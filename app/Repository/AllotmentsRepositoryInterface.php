<?php


namespace App\Repository;


interface AllotmentsRepositoryInterface
{
    public function getAllDataByYear(int $year): array;
    public function getLegacyData(int $year): array;
    public function rolloverLegacyData(int $year): bool;
    public function getRecordsCount(): int;
}
