<?php


namespace Tests\Unit;


use App\Repository\SchoolRepositoryInterface;
use Illuminate\Support\Collection;
use Tests\TestCase;

class SchoolTest extends TestCase
{

    public function test_canGetAllSchools(SchoolRepositoryInterface $schoolRepository) {
        $schools = $schoolRepository->all();
        $this->assertIsArray($schools, 'Array of school records');
    }
}
