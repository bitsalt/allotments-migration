<?php


namespace App\Repository\Eloquent;

use App\GradeLevel;
use Illuminate\Database\Eloquent\Collection;

class GradeLevelRepository implements \App\Repository\GradeLevelRepositoryInterface
{

    private $model;

    public function __construct(GradeLevel $model) {
        $this->model = $model;
    }

    public function rolloverYear(int $newYear, array $gradeLevelData): Collection
    {
        foreach ($gradeLevelData as $schoolType) {
            $type = $this->model::where('id', '=', $schoolType['id'])
                ->get();
            $type = $type->toArray();
            $type['school_year'] = $newYear;
            $this->model::create($type);
        }
        return $this->getDataByYear($newYear);
    }

    public function getDataByYear(int $year): Collection
    {
        return $this->model::where([
            'school_year' => $year
        ])->get();
    }
}
