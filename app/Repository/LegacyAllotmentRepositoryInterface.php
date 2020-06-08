<?php


namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface LegacyAllotmentRepositoryInterface
 * @package App\Repository
 */
interface LegacyAllotmentRepositoryInterface
{
    public function getAllotments(): Collection;
}
