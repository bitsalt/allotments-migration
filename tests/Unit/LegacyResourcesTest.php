<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class LegacyResourcesTest extends TestCase
{
    private $resourcesRepository;
    private $newYear = 2006;

    function setUp(): void
    {
        parent::setUp();
        $this->resourcesRepository = $this->app
            ->make('App\Repository\LegacyResourcesRepositoryInterface');
    }

    public function testCanGetResourcesCollection()
    {
        $collection = $this->resourcesRepository->getResources($this->newYear);
        $this->assertInstanceOf(Collection::class, $collection);
    }

    public function testCanGetCategoriesCollectionFromResources()
    {
        $categories = $this->resourcesRepository->getCategories($this->newYear);
        $this->assertArrayNotHasKey('data_link', $categories);
    }

    public function testCanGetResourcesCollectionByYear()
    {
        $collection = $this->resourcesRepository->getResources($this->newYear);
        $arr = $collection->toArray();
        $this->assertEquals(43, count($arr));
    }

    public function testCanMapResourceToAllotmentType()
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
        $newRecord = [
            'school_year' => $this->newYear,
            'allotment_prog_code' => 'ISD3',
            'allotment_prog_desc' => 'Sch Assistance/Athletic Director/Trainer',
            'data_link' => 'downloads/english_planning_and_athletic_director.pdf',
            'category_id' => 75,
            'category_name' => 'Instructional Services Allotments',
            'is_carryover' => 0,
            'date_created' => date('Y-m-d H:i:s'),
            'date_modified' => null,
        ];

        $newMap = $this->resourcesRepository
            ->mapLegacyResourceToAllotmentType($legacyRecord, $this->newYear);
        $this->assertEquals($newRecord, $newMap);
    }

    public function testCanDoLegacyRollover()
    {
        $this->resourcesRepository->rolloverLegacyData($this->newYear);
    }



}
