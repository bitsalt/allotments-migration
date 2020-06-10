<?php


namespace App\Repository\Eloquent;


use App\SchoolYear;
use Carbon\Exceptions\InvalidTypeException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Repository\Eloquent;
use PHPUnit\Framework\ExceptionWrapper;

class SchoolYearsRepository implements \App\Repository\SchoolYearsRepositoryInterface
{

    private $model;

    /**
     * SchoolYearRepository constructor.
     * @param SchoolYears $model
     */
    public function __construct(SchoolYear $model) {
        $this->model = $model;
    }

    public function getCurrentYear(int $year): Collection {
        return $this->model::where([
            'current_ind' => 1
        ])->get();
    }

    public function getCurrentAdminYear(int $year): Collection {
        return $this->model::where([
            'admin_current_ind' => 1
        ])->get();
    }

    public function addSchoolYear($year, $displayYears): Model {

        return $this->model->create([
            'school_year' => $year,
            'display' => $displayYears,
            'current_ind' => 0,
            'admin_current_ind' => 0,
            'visible_to_schools' => 0
        ]);
    }


    public function getAllSchoolYears(): Collection {
        return $this->model->all();
    }

    public function getAllDataByYear(int $year): array
    {
        return $this->model::where([
            'school_year' => $year
        ])->firstOrFail()->toArray();
    }

}
