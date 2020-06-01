<?php


namespace App\Repository\Eloquent;


use App\SchoolYears;
use Illuminate\Support\Collection;

class SchoolYearsRepository extends BaseRepository implements \App\Repository\SchoolYearsRepositoryInterface
{
    /**
     * SchoolYearRepository constructor.
     * @param SchoolYears $model
     */
    public function __construct(SchoolYears $model)
    {
        parent::__construct($model);
    }

    public function getCurrentYear(int $year): Collection
    {
        return $this->model
            ->where('current_ind', '=', 1)
            ->get();
    }

    public function getCurrentAdminYear(int $year): Collection
    {
        return $this->model
            ->where('admin_current_ind', '=', 1)
            ->get();
    }
}
