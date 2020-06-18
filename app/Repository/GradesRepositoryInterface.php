<?php


namespace App\Repository;


interface GradesRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): array;
    public function getDataByYear(int $year): array;
    public function getIdByGrade(string $grade, int $year): int;
}
