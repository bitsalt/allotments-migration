<?php


namespace App\Repository\Eloquent;


use App\AllotmentTypes;

class AllotmentTypesRepository implements \App\Repository\AllotmentTypesRepositoryInterface
{

    private $model;

    public function __construct(AllotmentTypes $model)
    {
        $this->model = $model;
    }

    public function getAllDataByYear($year): array
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
