<?php


namespace Tests\Unit;


use Tests\TestCase;

class AALegacyAllotmentsTest extends TestCase
{
    protected $legacyAllotmentRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->legacyAllotmentRepository = $this->app
            ->make('App\Repository\LegacyAllotmentRepositoryInterface');
    }

    public function testCanGetLegacyAllotmentRecords()
    {
        $allotments = $this->legacyAllotmentRepository->getDataByYear(2006);
        $this->assertEquals(4942, count($allotments));
    }
}
