<?php


namespace App\Repository;


interface SchoolGradesRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): array;
    public function getAllDataByYear(int $year): array;
    public function rolloverLegacyYear(int $newYear): bool;
    public function getRecordsCount(): int;
}
