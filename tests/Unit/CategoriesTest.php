<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoriesTest extends TestCase
{
    protected $categoriesRepository;

    public function setUp(): void {
        parent::setUp();
        $this->categoriesRepository = $this->app->make('App\Repository\CategoriesRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->categoriesRepository->getDataByYear(2013);
        $dataArr = $data->toArray();
        $this->assertIsArray($dataArr);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $data = $this->categoriesRepository->getDataByYear($copyYear);
        $dataArr = $data->toArray();
        $this->categoriesRepository->rolloverYear($newYear, $dataArr);

        $newData = $this->categoriesRepository->getDataByYear($newYear);
        $dataArr = $newData->toArray();
        $this->assertIsArray($dataArr);
    }
}
