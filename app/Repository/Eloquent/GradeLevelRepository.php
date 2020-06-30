<?php


namespace App\Repository\Eloquent;

use App\GradeLevel;
use App\Traits\ExceptionLogging;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GradeLevelRepository implements \App\Repository\GradeLevelRepositoryInterface
{
    use ExceptionLogging;
    private $model;

    public function __construct(GradeLevel $model) {
        $this->model = $model;
    }

    public function rolloverYear(int $newYear, int $copyYear): array
    {
        $gradeLevelData = $this->getAllDataByYear($copyYear);
        foreach ($gradeLevelData as $schoolType) {
            try {
                $type = $this->model::where('id', '=', $schoolType['id'])
                    ->firstOrFail()
                    ->toArray();
                $type['school_year'] = $newYear;
                $this->model::create($type);
            } catch (ModelNotFoundException $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['year' => $newYear,
                    'gradeLevelData' => $gradeLevelData]);
            }

        }
        return $this->getAllDataByYear($newYear);
    }

    public function getGradeLevelById(int $id): string
    {
        $data = $this->model::where('id', '=', $id)
            ->get()
            ->toArray();
        return $data[0]['grade_level'];
    }

    public function getAllDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
