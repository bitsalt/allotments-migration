<?php

namespace Tests\Unit;

use Tests\TestCase;

final class SchoolYearsTest extends TestCase {

    protected $schoolYearsRepository;

    public function setUp(): void {
        parent::setUp();
        $this->schoolYearsRepository = $this->app->make('App\Repository\SchoolYearsRepositoryInterface');
    }

    public function testCanGetSchoolYearRecordByYear() {
        $data = $this->schoolYearsRepository->getAllDataByYear(2013);
        $this->assertArrayHasKey('display', $data);
    }

    public function testCanAddSchoolYear() {
        $this->schoolYearsRepository->addSchoolYear(2006, '2006-2007');
        $data = $this->schoolYearsRepository->getAllDataByYear(2006);
        $this->assertEquals('2006-2007', $data['display']);
    }

}
