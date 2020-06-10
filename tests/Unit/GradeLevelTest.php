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
        $this->assertIsArray($data);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $data = $this->gradeLevelRepository->getDataByYear($copyYear);
        $this->gradeLevelRepository->rolloverYear($newYear, $data);

        $newData = $this->gradeLevelRepository->getDataByYear($newYear);
        $this->assertNotNull($newData[0]['grade_level_name']);
    }


}
