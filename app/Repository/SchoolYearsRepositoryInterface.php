<?php


namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface SchoolYearsRepositoryInterface
 * @package App\Repository
 */
interface SchoolYearsRepositoryInterface
{
    public function getCurrentYear(): array;
    public function getCurrentAdminYear(): array;
    public function addSchoolYear(int $year, string $displayYears): Model;
    public function getAllDataByYear(int $year): array;
    public function getRecordsCount(): int;
}
