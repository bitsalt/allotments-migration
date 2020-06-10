<?php

namespace App\Repository\Eloquent;

use App\School;
use App\Repository\SchoolRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class SchoolRepository implements SchoolRepositoryInterface
{

    private $model;

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(School $model)
    {
        $this->model = $model;
    }


    /**
     * @return array
     */
    public function getAllDataByYear($year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
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
