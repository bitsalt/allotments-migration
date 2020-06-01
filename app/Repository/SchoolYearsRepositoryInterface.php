<?php


namespace App\Repository;

use Illuminate\Support\Collection;

/**
 * Interface SchoolYearsRepositoryInterface
 * @package App\Repository
 */
interface SchoolYearsRepositoryInterface
{
    public function getCurrentYear(int $year): Collection;

    public function getCurrentAdminYear(int $year): Collection;
}
