<?php


namespace App\Repository\Eloquent;

use App\GradeLevel;
use Illuminate\Database\Eloquent\Collection;

class GradeLevelRepository extends BaseRepository implements \App\Repository\GradeLevelRepositoryInterface
{

    public function __construct(GradeLevel $model) {
        parent::__construct($model);
    }

    public function rolloverYear(int $newYear, array $gradeLevelData): Collection
    {
        foreach ($gradeLevelData as $schoolType) {
            $type = $this->model->find($schoolType['id']);
            $newType = $type->replicate();
            $newType->save();
            $newType->update(['school_year' => $newYear]);
        }
        return $this->getDataByYear($newYear);
    }

}
