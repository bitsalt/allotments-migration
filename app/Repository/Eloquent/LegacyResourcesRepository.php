<?php


namespace App\Repository\Eloquent;


use App\AllotmentTypes;
use App\Categories;
use App\Traits\ExceptionLogging;
use App\LegacyResources;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LegacyResourcesRepository implements \App\Repository\LegacyResourcesRepositoryInterface
{
    use ExceptionLogging;
    private $model;

    public function __construct(LegacyResources $model) {
        $this->model = $model;
    }

    public function rolloverLegacyData(int $year): bool
    {
        $records = $this->getAllDataByYear($year);
        foreach ($records as $record) {
            $newRecord = $this->mapLegacyResourceToAllotmentType($record, $year);
            if (!empty($newRecord)) {
                try {
                    AllotmentTypes::create($newRecord);
                } catch (ModelNotFoundException $exception) {
                    $this->logError(get_class($this), __FUNCTION__, ['year' => $year]);
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * Map data from legacy resource table to allotment_type table
     * @param $record
     * @param $year
     * @return array
     */
    public function mapLegacyResourceToAllotmentType($record, $year): array
    {
        try {
            $categoryId = Categories::select('category_id')
                ->where('category_name', '=', $record['category_name'])
                ->where('school_year', '=', $year)
                ->firstOrFail()
                ->toArray();

            return [
                'school_year' => $year,
                'allotment_prog_code' => $record['resourceid'],
                'allotment_prog_desc' => $record['category_name'],
                'category_id' => $categoryId['category_id'],
                'data_link' => $record['data_link'],
                'is_carryover' => 0,
                'date_created' => date('Y-m-d H:i:s'),
                'date_modified' => null,
            ];
        }  catch (ModelNotFoundException $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year, 'record' => $record]);
        }
        return [];
    }

    public function getCategories(int $year): array
    {
        $resources = $this->getAllDataByYear($year);
        $categoryArray = [];
        foreach ($resources as $resource) {
            $categoryArray[] = $resource['category_name'];
        }

        return array_unique($categoryArray);
    }

    public function getAllDataByYear($year): array
    {
        return LegacyResources::where('start_yr', '<=', $year)
            ->where('end_yr', '>', $year)
            ->get()
            ->toArray();
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
