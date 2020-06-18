<?php


namespace App\Repository\Eloquent;


use App\ReportingDays;

class ReportingDaysRepository implements \App\Repository\ReportingDaysRepositoryInterface
{
    private $model;

    public function __construct(ReportingDays $model) {
        $this->model = $model;
    }

    public function rolloverYear(int $newYear, int $copyYear): array
    {
        $daysData = $this->getDataByYear($copyYear);

        foreach ($daysData as $data) {
            unset($data['id']);
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
