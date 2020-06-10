<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use App\LegacyAllotments;
use Illuminate\Database\Eloquent\Model;

class LegacyAllotmentRepository implements \App\Repository\LegacyAllotmentRepositoryInterface
{
    private $model;

    public function __construct(LegacyAllotments $model)
    {
        $this->model = $model;
    }

    public function getAllotments(): array
    {
        return $this->model::all()->toArray();
    }

    /**
     * Override BaseRepository.getDataByYear()
     * @param int $year
     * @return Collection
     */
    public function getDataByYear(int $year): array
    {
        return $this->model::where('year', '=', $year)
            ->get()
            ->toArray();
    }
}
