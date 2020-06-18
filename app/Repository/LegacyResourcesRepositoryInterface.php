<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

interface LegacyResourcesRepositoryInterface {

    public function getCategories(int $year): array;
    public function rolloverLegacyData(int $year): void;
    public function mapLegacyResourceToAllotmentType($record, $year): array;
    public function getAllDataByYear($year): array;
}
