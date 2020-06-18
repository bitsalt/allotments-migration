<?php


namespace Tests\Unit;


class HNewParmsTest extends \Tests\TestCase
{
    protected $newparmsRepository;

    public function setUp(): void {
        parent::setUp();
        $this->newparmsRepository = $this->app->make('App\Repository\NewParmsRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->newparmsRepository->getDataByYear(2013);
        $this->assertIsArray($data);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $newData = $this->newparmsRepository->rolloverYear($newYear, $copyYear);

        $copyData = $this->newparmsRepository->getDataByYear($copyYear);
        $this->assertEquals(count($newData), count($copyData));
    }
}
