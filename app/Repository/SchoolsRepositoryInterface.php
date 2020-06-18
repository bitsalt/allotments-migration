<?php


namespace App\Repository;


interface SchoolsRepositoryInterface
{
    public function getAllDataByYear(int $year): array;
    public function matchLegacySchoolToTargetYearSchool(int $year, array $school): array;
    public function legacyRolloverYear(int $newYear, int $targetYear, array $legacySchools): int;
    public function getSchoolCountByYear(int $year): int;
    public function addNewSchool(array $data): bool;
    public function getSchoolIdBySchoolNum(int $schoolNum, int $year): int;
}
