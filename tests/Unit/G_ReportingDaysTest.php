<?php


namespace Tests\Unit;


class GReportingDaysTest extends \Tests\TestCase
{
    protected $reportingDaysRepository;

    public function setUp(): void {
        parent::setUp();
        $this->reportingDaysRepository = $this->app->make('App\Repository\ReportingDaysRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->reportingDaysRepository->getDataByYear(2013);
        $this->assertIsArray($data);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $newData = $this->reportingDaysRepository->rolloverYear($newYear, $copyYear);

        $copyData = $this->reportingDaysRepository->getDataByYear($copyYear);
        $this->assertEquals(count($newData), count($copyData));
    }
}
