<?php


namespace App\Repository\Eloquent;


use App\Repository\GradesRepositoryInterface;
use App\Repository\SchoolsRepositoryInterface;
use App\Repository\SchoolGradesRepositoryInterface;
use App\School;
use App\SchoolGrades;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SchoolGradesRepository implements SchoolGradesRepositoryInterface
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

    public function rolloverLegacyYear(int $newYear): bool
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

        $count = 0;
        foreach ($schoolData as $school) {
            $gradeLevelData = School::find($school['id'])->gradeLevel->toArray();
            $schoolGradesArr = $map[$gradeLevelData['grade_level']];

            foreach ($schoolGradesArr as $grade) {
                try {
                    $this->model::create([
                        'school_id' => $school['id'],
                        'school_year' => $newYear,
                        'grade_id' => $this->gradesRepository->getIdByGrade($grade, $newYear)
                    ]);
                    $count++;
                } catch (ModelNotFoundException $exception) {
                    $this->logError(get_class($this), __FUNCTION__, ['year' => $newYear]);
                    return false;
                }
            }
        }
        return true;
    }

    public function getAllDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
