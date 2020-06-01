<?php
namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface SchoolRepositoryInterface
{
    public function allByYear(int $year): Collection;
}
