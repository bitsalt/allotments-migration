<?php

namespace Tests\Unit;

use Tests\TestCase;

final class GradeLevelTest extends TestCase {

    protected $gradeLevelRepository;

    public function setUp(): void {
        parent::setUp();
        $this->gradeLevelRepository = $this->app->make('App\Repository\GradeLevelRepositoryInterface');
    }

    public function testCanGetDataByYear() {
        $data = $this->gradeLevelRepository->getDataByYear(2013);
        $dataArr = $data->toArray();
        $this->assertIsArray($dataArr);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $data = $this->gradeLevelRepository->getDataByYear($copyYear);
        $dataArr = $data->toArray();
        $this->gradeLevelRepository->rolloverYear($newYear, $dataArr);

        $newData = $this->gradeLevelRepository->getDataByYear($newYear);
        $dataArr = $newData->toArray();
        $this->assertIsArray($dataArr);
    }
}
