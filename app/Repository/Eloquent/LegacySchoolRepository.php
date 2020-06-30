<?php

namespace App\Repository\Eloquent;

use App\LegacySchools;
use App\Repository\LegacySchoolRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\MissingValue;
use Illuminate\Support\Collection;

class LegacySchoolRepository implements LegacySchoolRepositoryInterface
{

    /**
     * @var array
     */
    protected $schoolData;

    private $model;

    /**
     * UserRepository constructor.
     *
     * @param LegacySchools $model
     */
    public function __construct(LegacySchools $model)
    {
        $this->model = $model;
    }


    /**
     * @return Collection
     */
    public function getAllDataByYear($year): array
    {
        return $this->model::where('start_yr', '<=', $year)
            ->where('end_yr', '>=', $year)
            ->get()
            ->toArray();
    }

    public function getCountByYear($year): int
    {
        return count($this->getAllDataByYear($year));
    }

    public function isMagnetSchool(): bool
    {
        if (!isset($this->schoolData)) {
            throwException(MissingValue::class);
        }

        if (strstr($this->schoolData['type'], '-MG')) {
            return true;
        }
        return false;
    }

    public function getSchoolDataById($id): array
    {
        $this->schoolData = $this->model::where('id', '=', $id)
            ->get()
            ->toArray();

        return $this->schoolData;
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
