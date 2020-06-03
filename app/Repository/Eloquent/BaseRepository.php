<?php

namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function save(array $attributes): Model {
        return $this->model->save($attributes);
    }

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function update(array $attributes, $id)
    {
        $record = $this->model->find($id);
        return $record->update($attributes);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function getDataByYear(int $year): Collection
    {
        return $this->model
            ->where('school_year', $year)
            ->get();
    }
}
