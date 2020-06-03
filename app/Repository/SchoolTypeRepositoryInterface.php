<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

/**
 * Class SchoolTypeRepositoryInterface
 * @package App\Repository
 */
interface SchoolTypeRepositoryInterface
{
    public function rolloverYear(int $newYear, array $schoolTypeData): Collection;

}
