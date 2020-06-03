<?php


namespace App\Repository\Eloquent;


use App\SchoolType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repository\SchoolTypeRepositoryInterface;

class SchoolTypeRepository extends BaseRepository implements SchoolTypeRepositoryInterface
{
    public function __construct(SchoolType $model) {
        parent::__construct($model);
    }

    /**
     * @param array $schoolTypeData
     * @return Model
     */
    public function rolloverYear(int $newYear, array $schoolTypeData): Collection
    {
        foreach ($schoolTypeData as $schoolType) {
            $type = $this->model->find($schoolType['id']);
            $newType = $type->replicate();
            $newType->save();
            $newType->update(['school_year' => $newYear]);
//            $schoolType['school_year'] = $newYear;
//            unset($schoolType['id']);
//            $this->model->save([$schoolType]);
        }
        return $this->getDataByYear($newYear);
    }

}
