<?php


namespace App\Repository\Eloquent;


use App\NewParms;

class NewParmsRepository implements \App\Repository\NewParmsRepositoryInterface
{

    private $model;

    public function __construct(NewParms $model) {
        $this->model = $model;
    }

    public function rolloverYear(int $newYear, int $copyYear): array
    {
        $newparmsData = $this->getDataByYear($copyYear);

        foreach ($newparmsData as $data) {
            $data['school_year'] = $newYear;
            try {
                $this->model::create($data);
            } catch (ModelNotFoundException $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['newYear' => $newYear,
                    'copyYear' => $copyYear]);
            }
        }

        return $this->getDataByYear($newYear);
    }

    public function getDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }
}
