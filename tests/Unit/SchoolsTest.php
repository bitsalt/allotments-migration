<?php


namespace Tests\Unit;

use Tests\TestCase;

class SchoolsTest extends TestCase
{
    private $schoolsRepository;
    private $legacySchoolRepository;

    private $targetYear = 2013;
    private $newYear = 2006;

    function setUp(): void
    {
        parent::setUp();
        $this->schoolsRepository = $this->app
            ->make('App\Repository\SchoolsRepositoryInterface');
        $this->legacySchoolRepository = $this->app
            ->make('App\Repository\LegacySchoolRepositoryInterface');
    }

    public function testCanGetTargetYearSchools()
    {
        $schools = $this->schoolsRepository->getAllDataByYear($this->targetYear);
        $this->assertEquals(170, count($schools));
    }

    public function testCanMatchLegacySchoolToTargetYearSchool()
    {
        $legacySchools = $this->legacySchoolRepository->getAllDataByYear($this->newYear);
        $matches = [];
        foreach ($legacySchools as $legacySchool) {
//            if($legacySchool['schoolid'] == 411) {
//                $exceptions[] = $legacySchool;
//            } else {
            $matches[] = $this->schoolsRepository->matchLegacySchoolToTargetYearSchool($this->targetYear, $legacySchool);
//            }
            //("Legacy schools not found: ", $exceptions);
        }
        $this->assertGreaterThan(100, count($matches));
    }

    public function NOTtestCanRolloverYear()
    {
        $legacySchools = $this->legacySchoolRepository->getAllDataByYear($this->newYear);
        $result = $this->schoolsRepository->legacyRolloverYear($this->newYear, $this->targetYear, $legacySchools);
        $this->assertTrue($result);
    }
}
