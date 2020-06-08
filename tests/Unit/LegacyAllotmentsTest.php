<?php


namespace Tests\Unit;


use Tests\TestCase;

class LegacyAllotmentsTest extends TestCase
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
        $allots = $this->legacyAllotmentRepository->getDataByYear(2006);
        $arr = $allots->toArray();
        $this->assertEquals(4942, count($arr));
    }
}
