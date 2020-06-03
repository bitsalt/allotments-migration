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
        $data = $this->schoolYearsRepository->getSchoolYearDataByYear(2013);
        $arr = $data->toArray();
        $this->assertArrayHasKey('display', $arr);
    }

    public function testCanAddSchoolYear() {
        $this->schoolYearsRepository->addSchoolYear(2006, '2006-2007');
        $data = $this->schoolYearsRepository->getSchoolYearDataByYear(2006);
        $arr = $data->toArray();
        $this->assertEquals('2006-2007', $arr['display']);
    }

}
