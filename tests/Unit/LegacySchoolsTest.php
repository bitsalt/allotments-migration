<?php


namespace Tests\Unit;

use Tests\TestCase;
use App\Repository\Eloquent\SchoolRepository;

final class LegacySchoolsTest extends TestCase
{

    public function setUp(): void {
        parent::setUp();
        $this->schoolRepository = $this->app->make('App\Repository\LegacySchoolRepositoryInterface');
    }

    public function testDatabaseHasLegacySchools() {
        $this->assertDatabaseHas('legacy_schools', [
            'schoolname' => 'Adams Elementary'
        ]);
    }

    public function testCanListLegacySchools() {
        $collection = \App\LegacySchools::all();
        $schools = $collection->toArray();
        $this->assertIsArray($schools);
    }

    public function testCanGetAllSchoolsByYear() {
        $collection = $this->schoolRepository->allByYear(2013);
        $schools = $collection->toArray();
        $this->assertIsArray($schools, 'Array of school records');
    }

}

