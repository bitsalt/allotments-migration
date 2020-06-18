<?php


namespace App\Repository\Eloquent;


use App\Grades;
use App\SchoolGrades;

class GradesRepository implements \App\Repository\GradesRepositoryInterface
{
    private $model;

    public function __construct(Grades $model) {
        $this->model = $model;
    }

    public function rolloverYear(int $newYear, int $copyYear): array
    {
        $allYearData = $this->getDataByYear($copyYear);

        foreach ($allYearData as $data) {
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

    public function getDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }

    public function getIdByGrade(string $grade, int $year): int
    {
        $data = $this->model::where('grade', '=', $grade)
            ->where('school_year', '=', $year)
            ->first()
            ->toArray();
        return $data['id'];
    }
}
