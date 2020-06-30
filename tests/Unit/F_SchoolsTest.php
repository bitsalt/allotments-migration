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
    // UPDATE: This breaks things as it trickles down, so...finding a way to include all
    // schools. Also adding the test below to ensure that all fields are properly set
    // for legacy schools.
    public function testCanRolloverYear()
    {
        $legacySchools = $this->legacySchoolRepository->getAllDataByYear($this->newYear);
        $expected = count($legacySchools);
        $result = $this->schoolsRepository->legacyRolloverYear($this->newYear, $this->targetYear, $legacySchools);
        $actual = count($this->schoolsRepository->getAllDataByYear($this->newYear));
        $this->assertEquals($expected, $actual);
    }

    // This is more functional test than unit test, as it requires the preceding testCanRolloverYear()
    // to have already run.
    public function testCanRolloverYearWithAllData()
    {
        $testData = $this->schoolsRepository->getSchoolBySchoolNum(411, $this->newYear);
        $mockData = [
            'school_name' => 'East Wake High',
            'school_grade_level_id' => 43,
            'magnet_ind' => null,
            'restart_ind' => null,
            'school_type_id' => 48,
        ];
        $result = true;
        foreach ($mockData as $key => $val) {
            if ($testData[$key] != $val) {
                $result = false;
                break;
            }
        }
        $this->assertTrue($result);
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
