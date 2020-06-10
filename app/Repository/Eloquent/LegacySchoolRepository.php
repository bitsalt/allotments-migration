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
            ->firstOrFail()
            ->toArray();
    }

    public function countByYear($year): Collection
    {
        return count($this->allByYear($year));
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

    public function getSchoolData($id): void
    {
        $this->schoolData = $this->model::where([
            'id' => $id
        ]);

    }
}
