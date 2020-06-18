<?php


namespace Tests\Unit;


class JSchoolGradesTest extends \Tests\TestCase
{
    protected $schoolGradesRepository;

    public function setUp(): void {
        parent::setUp();
        $this->schoolGradessRepository = $this->app->make('App\Repository\SchoolGradesRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->schoolGradessRepository->getAllDataByYear(2013);
        $this->assertGreaterThan(150, count($data));
    }

    public function testCanDoLegacyRolloverOperation()
    {
        $newYear = 2006;
        $result = $this->schoolGradessRepository->rolloverLegacyYear($newYear);
        $newData = $this->schoolGradessRepository->getAllDataByYear($newYear);
        $this->assertGreaterThan(100, count($newData));
    }
}
