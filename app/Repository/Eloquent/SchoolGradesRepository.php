<?php


namespace App\Repository\Eloquent;


use App\Repository\GradesRepositoryInterface;
use App\Repository\SchoolsRepositoryInterface;
use App\School;
use App\SchoolGrades;

class SchoolGradesRepository implements \App\Repository\SchoolGradesRepositoryInterface
{

    private $model;
    private $gradesRepository;
    private $schoolsRepository;

    public function __construct(SchoolGrades $model,
                                SchoolsRepositoryInterface $schoolsRepository,
                                GradesRepositoryInterface $gradesRepository) {
        $this->model = $model;
        $this->schoolsRepository = $schoolsRepository;
        $this->gradesRepository = $gradesRepository;
    }

    public function rolloverYear(int $newYear, int $copyYear): array
    {
        $fullYearData = $this->getDataByYear($copyYear);

        foreach ($fullYearData as $data) {
            unset($data['id']);
            $data['school_year'] = $newYear;
            try {

                $this->model::create($data);
            } catch (ModelNotFoundException $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['newYear' => $newYear,
                    'copyYear' => $copyYear]);
            }
        }

        return $this->getDataByYear($newYear);
    }

    public function rolloverLegacyYear(int $newYear): array
    {
        // map grade levels to array for school grades inserts
        $map = [
            'E' => ['K','01','02','03','04','05'],
            'M' => ['06','07','08'],
            'H' => ['09','10','11','12'],
            'U' => ['06','07','08','09','10'],
            'L' => ['K','01','02','03','04','05','06','07']
        ];
        $schoolData = $this->schoolsRepository->getAllDataByYear($newYear);

        foreach ($schoolData as $school) {
            $gradeLevelData = School::find($school['id'])->gradeLevel->toArray();
            $schoolGradesArr = $map[$gradeLevelData['grade_level']];

            foreach ($schoolGradesArr as $grade) {
                $this->model::create([
                    'school_id' => $school['id'],
                    'school_year' => $newYear,
                    'grade_id' => $this->gradesRepository->getIdByGrade($grade, $newYear)
                ]);
            }
        }
        return $this->getAllDataByYear($newYear);
    }

    public function getAllDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }
}
