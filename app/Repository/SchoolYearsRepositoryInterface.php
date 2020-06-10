<?php


namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Interface SchoolYearsRepositoryInterface
 * @package App\Repository
 */
interface SchoolYearsRepositoryInterface
{
    public function getCurrentYear(int $year): Collection;

    public function getCurrentAdminYear(int $year): Collection;

    public function addSchoolYear(int $year, string $displayYears): Model;

    public function getAllDataByYear(int $year): array;
}
