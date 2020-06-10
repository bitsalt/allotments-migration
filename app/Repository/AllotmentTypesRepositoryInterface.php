<?php


namespace App\Repository;


interface AllotmentTypesRepositoryInterface
{

    public function getAllDataByYear($year): array;
    
}
