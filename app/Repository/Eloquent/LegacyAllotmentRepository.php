<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use App\LegacyAllotments;
use Illuminate\Database\Eloquent\Model;

class LegacyAllotmentRepository extends BaseRepository implements \App\Repository\LegacyAllotmentRepositoryInterface
{
    public function __construct(LegacyAllotments $model)
    {
        parent::__construct($model);
    }

    public function getAllotments(): Collection
    {
        return $this->model->all();
    }

    /**
     * Override BaseRepository.getDataByYear()
     * @param int $year
     * @return Collection
     */
    public function getDataByYear(int $year): Collection
    {
        return $this->model
            ->where('year', $year)
            ->get();
    }
}
