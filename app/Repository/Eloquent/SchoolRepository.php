<?php

namespace App\Repository\Eloquent;

use App\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class SchoolRepository extends BaseRepository
{

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(School $model)
    {
        parent::__construct($model);
    }


    /**
     * @return Collection
     */
    public function allByYear($year): Collection
    {
        return $this->model->where('school_year', '=', $year)->get();
    }


    /**
     * @param $id
     * @return Model|null
     */
    public function show($id): ?Model
    {
        // TODO: Implement show() method.
    }
}
