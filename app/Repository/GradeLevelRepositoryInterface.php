<?php


namespace App\Repository;


/**
 * Interface GradeLevelRepositoryInterface
 * @package App\Repository
 */
interface GradeLevelRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): array;
    public function getDataByYear(int $year): array;
}
