<?php


namespace App\Repository\Eloquent;


use App\SchoolType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repository\SchoolTypeRepositoryInterface;

class SchoolTypeRepository implements SchoolTypeRepositoryInterface
{
    private $model;

    public function __construct(SchoolType $model) {
        $this->model = $model;
    }

    /**
     * @param array $schoolTypeData
     * @return Model
     */
    public function rolloverYear(int $newYear, array $schoolTypeData): Collection
    {
        foreach ($schoolTypeData as $schoolType) {
            $type = $this->model::where([
                'id' => $schoolType['id']
            ]);
            $newType = $this->model->replicate();
            $newType->save();
            $newType->update(['school_year' => $newYear]);
        }
        return $this->getDataByYear($newYear);
    }

    public function getDataByYear($year)
    {
        return $this->model::where([
            'school_year' => $year
        ])->get();
    }
}
