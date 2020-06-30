<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

interface LegacyResourcesRepositoryInterface {

    public function getCategories(int $year): array;
    public function rolloverLegacyData(int $year): bool;
    public function mapLegacyResourceToAllotmentType($record, $year): array;
    public function getAllDataByYear($year): array;
    public function getRecordsCount(): int;
}
