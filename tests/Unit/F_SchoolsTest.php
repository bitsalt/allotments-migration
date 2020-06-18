<?php


namespace Tests\Unit;

use Tests\TestCase;

class FSchoolsTest extends TestCase
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

    // $result holds the difference in legacy count and new count after rollover, as returned
    // by legacyRolloverYear. The assertion is '1' as there is a school from 2006 that was
    // split up and renamed by 2013.
    // NOTE: This school will likely come up when testing other years.
    public function testCanRolloverYear()
    {
        $legacySchools = $this->legacySchoolRepository->getAllDataByYear($this->newYear);
        $result = $this->schoolsRepository->legacyRolloverYear($this->newYear, $this->targetYear, $legacySchools);
        $this->assertEquals(1, $result);
    }

    public function testWillNotAddSchoolWithBadData()
    {
        $result = $this->schoolsRepository->addNewSchool(['nothing', 'but', 'junk', 'data', 'here']);
        $this->assertFalse($result);
    }

    public function testCanGetSchoolIdBySchoolNum()
    {
        $result = $this->schoolsRepository->getSchoolIdBySchoolNum(304, $this->newYear);
        $this->assertEquals(1453, $result);
    }
}
