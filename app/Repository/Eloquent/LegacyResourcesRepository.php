<?php


namespace App\Repository\Eloquent;


use App\AllotmentTypes;
use App\Repository\AllotmentTypesRepositoryInterface;
use App\Repository\CategoriesRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\LegacyResources;
use Psr\Log\NullLogger;

class LegacyResourcesRepository extends BaseRepository implements \App\Repository\LegacyResourcesRepositoryInterface
{
    private $allotmentTypesRepository;
    private $categoriesRepository;

    public function __construct(LegacyResources $model) {
        parent::__construct($model);
        $this->allotmentTypesModel = app()->make(AllotmentTypesRepositoryInterface::class);
        $this->categoriesRepository = app()->make(CategoriesRepositoryInterface::class);
    }

    public function rolloverLegacyData(int $year): void
    {
        $collection = $this->getResources($year);
        $records = $collection->toArray();
        foreach ($records as $record) {
            $this->allotmentTypesRepository->save($this->mapLegacyResourceToAllotmentType($record));
        }
    }

    /**
     * Map data from legacy resource table to allotment_type table
     *
     * @param $record
     */
    public function mapLegacyResourceToAllotmentType($record, $year)
    {
        $map = [
            'school_year' => $year,
            'allotment_prog_code' => $record['resourceid'],
            'allotment_prog_desc' => $record['name'],
            'data_link' => $record['data_link'],
            'is_carryover' => 0,
            'date_created' => date('Y-m-d H:i:s'),
            'date_modified' => null,
        ];

        $categoryData = $this->categoriesRepository->getCategoryByName($record['category_name'], $year);
        $map['category_id'] = $categoryData['category_id'];
        $map['category_name'] = $categoryData['category_name'];

        return $map;
    }

    public function getCategories(int $year): array
    {
        $resourceCollection = $this->getResources($year);
        $resources = $resourceCollection->toArray();
        $categoryArray = [];
        foreach ($resources as $resource) {
            $categoryArray[] = $resource['category_name'];
        }

        return array_unique($categoryArray);
    }

    public function getResources($year): Collection
    {
        $resources = $this->model
            ->where('start_yr', '<=', $year)
            ->where('end_yr', '>', $year)
            ->get();
        return $resources;
    }
}
