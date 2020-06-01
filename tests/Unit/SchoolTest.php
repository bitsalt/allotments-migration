<?php


namespace Tests\Unit;


use App\Repository\SchoolRepositoryInterface;
use Tests\TestCase;

class SchoolTest extends TestCase
{

    public function test_canGetAllSchools(SchoolRepositoryInterface $schoolRepository) {
        $schools = $schoolRepository->allByYear(2013);
        $this->assertIsArray($schools, 'Array of school records');
    }
}
