<?php


namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface LegacyAllotmentRepositoryInterface
 * @package App\Repository
 */
interface LegacyAllotmentRepositoryInterface
{
    public function getAllotments(): array;
    public function getAllDataByYear(int $year): array;
    public function getRecordsCount(): int;
}
