<?php
namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Interface LegacySchoolRepositoryInterface
 * @package App\Repository
 */
interface LegacySchoolRepositoryInterface
{
    public function getAllDataByYear(int $year): array;
    public function getCountByYear($year): int;
    public function isMagnetSchool(): bool;
    public function getSchoolDataById($id): array;
    public function getRecordsCount(): int;
}
