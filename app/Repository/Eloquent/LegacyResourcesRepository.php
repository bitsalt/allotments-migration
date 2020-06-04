<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\LegacyResources;

class LegacyResourcesRepository extends BaseRepository implements \App\Repository\LegacyResourcesRepositoryInterface
{

    public function __construct(LegacyResources $model) {
        parent::__construct($model);
    }

    public function getCategories(int $year): array {
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
