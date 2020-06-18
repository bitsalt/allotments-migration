<?php

namespace Tests\Unit;

use Tests\TestCase;

final class CGradeLevelTest extends TestCase {

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
        $this->gradeLevelRepository->rolloverYear($newYear, $copyYear);

        $newData = $this->gradeLevelRepository->getDataByYear($newYear);
        $this->assertNotNull($newData[0]['grade_level_name']);
    }


}
