<?php


namespace App\Repository;


interface NewParmsRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): array;
    public function getDataByYear(int $year): array;
}
