<?php


namespace App\Repository\Eloquent;


use App\SchoolType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repository\SchoolTypeRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SchoolTypeRepository implements SchoolTypeRepositoryInterface
{
    private $model;

    public function __construct(SchoolType $model) {
        $this->model = $model;
    }

    /**
     * @param array $schoolTypeData
     * @return Model
     */
    public function rolloverYear(int $newYear, array $schoolTypeData): Collection
    {
        foreach ($schoolTypeData as $schoolType) {
            try {
                $type = $this->model::where('id', '=', $schoolType['id'])
                    ->firstOrFail()
                    ->toArray();
                $type['school_year'] = $newYear;
                unset($type['id']);
                $this->model::create($type);
            }  catch (ModelNotFoundException $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['year' => $newYear,
                    'school type data' => $schoolTypeData]);
            }
        }
        return $this->getDataByYear($newYear);
    }

    public function getDataByYear($year)
    {
        return $this->model::where([
            'school_year' => $year
        ])->get();
    }
}
