<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use App\Categories;

class CategoriesRepository extends BaseRepository implements \App\Repository\CategoriesRepositoryInterface
{

    public function __construct(Categories $model) {
        parent::__construct($model);
    }

    public function rolloverYear(int $newYear, array $gradeLevelData): Collection
    {
        foreach ($gradeLevelData as $data) {
            $type = $this->model->find($data['category_id']);
            $newType = $type->replicate();
            $newType->save();
            $newType->update(['school_year' => $newYear]);
        }
        return $this->getDataByYear($newYear);
    }

}
