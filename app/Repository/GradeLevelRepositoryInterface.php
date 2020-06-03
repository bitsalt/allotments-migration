<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

/**
 * Interface GradeLevelRepositoryInterface
 * @package App\Repository
 */
interface GradeLevelRepositoryInterface
{
    public function rolloverYear(int $newYear, array $gradeLevelData): Collection;

}
