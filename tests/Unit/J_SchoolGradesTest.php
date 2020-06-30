<?php


namespace Tests\Unit;


class JSchoolGradesTest extends \Tests\TestCase
{
    protected $schoolGradesRepository;
    protected $schoolsRepository;
    protected $gradeLevelRepository;

    public function setUp(): void {
        parent::setUp();
        $this->schoolGradessRepository = $this->app->make('App\Repository\SchoolGradesRepositoryInterface');
        $this->schoolsRepository = $this->app->make('App\Repository\SchoolsRepositoryInterface');
        $this->gradeLevelRepository = $this->app->make('App\Repository\GradeLevelRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->schoolGradessRepository->getAllDataByYear(2013);
        $this->assertGreaterThan(150, count($data));
    }

    public function testCanDoLegacyRolloverOperation()
    {
        $newYear = 2006;
        $map = [
            'E' => 6, //['K','01','02','03','04','05'],
            'M' => 3, // ['06','07','08'],
            'H' => 4, // ['09','10','11','12'],
            'U' => 5, // ['06','07','08','09','10'],
            'L' => 8 // ['K','01','02','03','04','05','06','07']
        ];
        $total = 0;
        $schools = $this->schoolsRepository->getAllDataByYear($newYear);
        foreach ($schools as $school) {
            $gLevel = $this->gradeLevelRepository->getGradeLevelById($school['school_grade_level_id']);
            $total += $map[$gLevel];
        }
        $this->expectedVal = $total;
        $this->schoolGradessRepository->rolloverLegacyYear($newYear);
        $newData = $this->schoolGradessRepository->getAllDataByYear($newYear);
        $this->assertEquals($total, count($newData));
    }
}
