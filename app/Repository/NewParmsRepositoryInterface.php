<?php


namespace App\Repository;


interface NewParmsRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): bool;
    public function getDataByYear(int $year): array;
    public function getRecordsCount(): int;
}
