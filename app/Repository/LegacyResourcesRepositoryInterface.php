<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

interface LegacyResourcesRepositoryInterface {

    public function getCategories(int $year): array;

    public function getResources(int $year): Collection;
}
