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
    public function allByYear(int $year): Collection;
}
