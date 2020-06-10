<?php


namespace Tests\Unit;

use Tests\TestCase;
use App\Repository\Eloquent\SchoolRepository;

final class LegacySchoolsTest extends TestCase
{
    private $legacySchoolRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->legacySchoolRepository = $this->app->make('App\Repository\LegacySchoolRepositoryInterface');
    }

    public function testDatabaseHasLegacySchools()
    {
        $this->assertDatabaseHas('legacy_schools', [
            'schoolname' => 'Adams Elementary'
        ]);
    }

    public function testCanGetAllSchoolsByYear()
    {
        $data = $this->legacySchoolRepository->getAllDataByYear(2013);
        $this->assertIsArray($data, 'Array of school records');
    }

    public function testCanGetLegacySchoolCount()
    {
        $schools = $this->legacySchoolRepository->getCountByYear(2006);
        $this->assertGreaterThan(100, $schools);
    }

}

