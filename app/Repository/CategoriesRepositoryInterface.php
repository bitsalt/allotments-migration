<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface CategoriesRepositoryInterface
 * @package App\Repository
 */
interface CategoriesRepositoryInterface {

    public function rolloverYear(int $newYear, array $schoolTypeData): Collection;

    public function getCategoryByName($name): array;
}
