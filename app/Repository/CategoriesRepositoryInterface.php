<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;

/**
 * Interface CategoriesRepositoryInterface
 * @package App\Repository
 */
interface CategoriesRepositoryInterface {

    public function rolloverYear(int $newYear, array $schoolTypeData): Collection;

}
