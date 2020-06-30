<?php


namespace App\Repository;


interface GradesRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): bool;
    public function getDataByYear(int $year): array;
    public function getIdByGrade(string $grade, int $year): int;
    public function getRecordsCount(): int;
}
