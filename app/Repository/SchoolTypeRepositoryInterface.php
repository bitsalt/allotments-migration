<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

/**
 * Class SchoolTypeRepositoryInterface
 * @package App\Repository
 */
interface SchoolTypeRepositoryInterface
{
    public function rolloverLegacyYear(int $newYear): array;
    public function rolloverYear(int $newYear, int $targetYear): array;
    public function getAllDataByYear($year): array;
    public function getIdByYearAndType(int $year, string $type): int;
    public function getRecordsCount(): int;
}
