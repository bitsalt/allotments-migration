<?php


namespace App\Repository;


/**
 * Interface GradeLevelRepositoryInterface
 * @package App\Repository
 */
interface GradeLevelRepositoryInterface
{
    public function rolloverYear(int $newYear, int $copyYear): array;
    public function getAllDataByYear(int $year): array;
    public function getRecordsCount(): int;
    public function getGradeLevelById(int $id): string;
}
