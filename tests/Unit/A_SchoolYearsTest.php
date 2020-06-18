<?php

namespace Tests\Unit;

use Tests\TestCase;

final class ASchoolYearsTest extends TestCase {

    protected $schoolYearsRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->schoolYearsRepository = $this->app->make('App\Repository\SchoolYearsRepositoryInterface');
    }

    public function testCanGetSchoolYearRecordByYear()
    {
        $data = $this->schoolYearsRepository->getAllDataByYear(2013);
        $this->assertArrayHasKey('display', $data);
    }

    public function testCanAddSchoolYear()
    {
        $this->schoolYearsRepository->addSchoolYear(2006, '2006-2007');
        $data = $this->schoolYearsRepository->getAllDataByYear(2006);
        $this->assertEquals('2006-2007', $data['display']);
    }

    /** This test will not work if the db is not persistent */
    public function testCanGetCurrentSchoolYear()
    {
        $yearData = $this->schoolYearsRepository->getCurrentYear();
        $this->assertEquals(2019, $yearData['school_year']);
    }

    /** This test will not work if the db is not persistent */
    public function testCanGetCurrentAdminSchoolYear()
    {
        $yearData = $this->schoolYearsRepository->getCurrentAdminYear();
        $this->assertEquals(2020, $yearData['school_year']);
    }

}
