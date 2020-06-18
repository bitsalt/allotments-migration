<?php

namespace Tests\Unit;

use Tests\TestCase;

final class CSchoolTypeTest extends TestCase {

    protected $schoolTypeRepository;

    public function setUp(): void {
        parent::setUp();
        $this->schoolTypeRepository = $this->app->make('App\Repository\SchoolTypeRepositoryInterface');
    }

    public function testCanGetTypeByYear() {
        $data = $this->schoolTypeRepository->getAllDataByYear(2013);
        $this->assertIsArray($data);
    }

    public function testCanDoRolloverOperation() {
        $newYear = 2006;
        $copyYear = 2013;
        $this->schoolTypeRepository->rolloverLegacyYear($newYear);

        $newData = $this->schoolTypeRepository->getAllDataByYear($newYear);
        $this->assertIsArray($newData);
    }


}
