<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface CategoriesRepositoryInterface
 * @package App\Repository
 */
interface CategoriesRepositoryInterface {

    public function rolloverYear(int $newYear, array $schoolTypeData): void;

    public function getCategoryByName($name, $year): array;

    public function rolloverLegacyData(int $newYear, int $copyYear, array $categoryData): void;

    public function getAllDataByYear(int $year): array;

}
