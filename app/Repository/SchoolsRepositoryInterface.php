<?php


namespace App\Repository;


interface SchoolsRepositoryInterface
{
    public function getAllDataByYear(int $year): array;
    public function matchLegacySchoolToTargetYearSchool(int $year, array $school): array;
    public function legacyRolloverYear(int $newYear, int $targetYear, array $legacySchools): bool;
    public function getSchoolCountByYear(int $year): int;
    public function addNewSchool(array $data): int;
}
