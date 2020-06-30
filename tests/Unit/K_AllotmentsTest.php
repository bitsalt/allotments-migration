<?php


namespace Tests\Unit;


class KAllotmentsTest extends \Tests\TestCase
{
    private $allotmentsRepository;
    private $newYear = 2006;
    private $targetYear = 2013;

    function setUp(): void
    {
        parent::setUp();
        $this->allotmentsRepository = $this->app
            ->make('App\Repository\AllotmentsRepositoryInterface');
    }

    function testCanGetAllotmentData()
    {
        $data = $this->allotmentsRepository->getAlldataByYear($this->targetYear);
        $this->assertArrayHasKey('moe', $data[0]);
    }

    function testCanGetLegacyAllotmentsForRollover()
    {
        $legacyData = $this->allotmentsRepository->getLegacyData($this->newYear);
        $this->assertArrayHasKey('resourceid', $legacyData[0]);
    }

    function testCanRolloverLegacyData()
    {
        $data = $this->allotmentsRepository->rolloverLegacyData($this->newYear, $this->targetYear);
        $this->assertEquals(4942, count($data));
    }
}
