<?php

namespace Tests\Unit;

use Tests\TestCase;

final class SchoolTypeTest extends TestCase {

    protected $schoolTypeRepository;

    public function setUp(): void {
        parent::setUp();
        $this->schoolTypeRepository = $this->app->make('App\Repository\SchoolTypeRepositoryInterface');
    }

    public function testCanGetTypeByYear() {
        $data = $this->schoolTypeRepository->getDataByYear(2013);
        $dataArr = $data->toArray();
        $this->assertIsArray($dataArr);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $data = $this->schoolTypeRepository->getDataByYear($copyYear);
        $dataArr = $data->toArray();
        $this->schoolTypeRepository->rolloverYear($newYear, $dataArr);

        $newData = $this->schoolTypeRepository->getDataByYear($newYear);
        $dataArr = $newData->toArray();
        $this->assertIsArray($dataArr);
    }


}
