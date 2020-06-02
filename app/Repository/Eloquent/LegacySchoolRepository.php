<?php

namespace App\Repository\Eloquent;

use App\LegacySchools;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\MissingValue;
use Illuminate\Support\Collection;

class LegacySchoolRepository extends BaseRepository
{

    /**
     * @var array
     */
    protected $schoolData;


    /**
     * UserRepository constructor.
     *
     * @param LegacySchools $model
     */
    public function __construct(LegacySchools $model)
    {
        parent::__construct($model);
    }


    /**
     * @return Collection
     */
    public function allByYear($year): Collection
    {
        return $this->model->where('start_yr', '<=', $year)
            ->where('end_yr', '>=', $year)
            ->get();
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
        $school = $this->find($id);
        $this->schoolData = $school->attributesToArray();
    }
}
