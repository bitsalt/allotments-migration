<?php


namespace Tests\Unit;


class IGradesTest extends \Tests\TestCase
{
    protected $gradesRepository;

    public function setUp(): void {
        parent::setUp();
        $this->gradesRepository = $this->app->make('App\Repository\GradesRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->gradesRepository->getDataByYear(2013);
        $this->assertIsArray($data);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $newData = $this->gradesRepository->rolloverYear($newYear, $copyYear);

        $copyData = $this->gradesRepository->getDataByYear($copyYear);
        $this->assertEquals(count($newData), count($copyData));
    }

    /** This test might fail if the import of legacy schools is sorted differently */
    public function testCanGetIdByGrade() {
        $result = $this->gradesRepository->getIdByGrade('06', 2006);
        $this->assertEquals(111, $result);
    }
}
