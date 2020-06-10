<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class LegacyResourcesTest extends TestCase
{
    private $resourcesRepository;
    private $allotmentTypesRepository;
    private $newYear = 2006;

    function setUp(): void
    {
        parent::setUp();
        $this->resourcesRepository = $this->app
            ->make('App\Repository\LegacyResourcesRepositoryInterface');
        $this->allotmentTypesRepository = $this->app
            ->make('App\Repository\AllotmentTypesRepositoryInterface');
    }

    public function testCanGetResourcesData()
    {
        $data = $this->resourcesRepository->getAllDataByYear($this->newYear);
        $this->assertNotEmpty($data);
    }

    public function testCanGetCategoriesCollectionFromResources()
    {
        $categories = $this->resourcesRepository->getCategories($this->newYear);
        $this->assertArrayNotHasKey('data_link', $categories);
    }

    public function testCanGetResourcesCollectionByYear()
    {
        $data = $this->resourcesRepository->getAllDataByYear($this->newYear);
        $this->assertEquals(43, count($data));
    }

    public function BAD_testWillNotMapResourceWithoutCategoryMatch()
    {
        $legacyRecord = [
            'resourceid' => 'ISD3',
            'name' => 'Sch Assistance/Athletic Director/Trainer',
            'category_name' => 'Instructional Services Allotments',
            'start_yr' => 2001,
            'end_yr' => 9999,
            'glevel' => 'H',
            'lastupdate' => 28,
            'data_link' => 'downloads/english_planning_and_athletic_director.pdf'
        ];

        $newMap = $this->resourcesRepository->mapLegacyResourceToAllotmentType($legacyRecord, $this->newYear);
        $this->assertEquals([], $newMap);
    }

    public function testWillMapResourceWithCategoryMatch()
    {
        $legacyRecord = [
            'resourceid' => 'ADM2',
            'name' => 'Assistant Principal',
            'category_name' => 'Area Superintendent Allotments',
            'start_yr' => 2001,
            'end_yr' => 9999,
            'glevel' => 'A',
            'lastupdate' => 17,
            'data_link' => 'downloads/assistant_principal.pdf'
        ];
        $newRecord = [
            'school_year' => $this->newYear,
            'allotment_prog_code' => 'ADM2',
            'allotment_prog_desc' => 'Area Superintendent Allotments',
            'category_id' => 74,
            'data_link' => 'downloads/assistant_principal.pdf',
            'is_carryover' => 0,
            'date_created' => date('Y-m-d H:i:s'),
            'date_modified' => null,
        ];

        $newMap = $this->resourcesRepository->mapLegacyResourceToAllotmentType($legacyRecord, $this->newYear);
        $this->assertEquals($newRecord, $newMap);
    }

    public function testLegacyRolloverRecordCountMatchesNewRecords()
    {
        $legacyRecords = $this->resourcesRepository->getAllDataByYear($this->newYear);
        $this->resourcesRepository->rolloverLegacyData($this->newYear);
        $newRecords = $this->allotmentTypesRepository->getAllDataByYear($this->newYear);
        $this->assertEquals(count($legacyRecords), count($newRecords));

    }



}
