<?php


namespace App\Repository;


interface ReportingDaysRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): array;
    public function getDataByYear(int $year): array;
}
