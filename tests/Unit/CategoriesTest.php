<?php

namespace Tests\Unit;

use Tests\TestCase;

final class CategoriesTest extends TestCase
{
    protected $categoriesRepository;
    protected $legacyResourcesRepository;
    private $newYear = 2006;
    private $copyYear = 2013;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
        $this->categoriesRepository = $this->app
            ->make('App\Repository\CategoriesRepositoryInterface');
        $this->legacyResourcesRepository = $this->app
            ->make('App\Repository\LegacyResourcesRepositoryInterface');
    }

    public function testCanGetDataByYear()
    {
        $data = $this->categoriesRepository->getDataByYear($this->copyYear);
        $dataArr = $data->toArray();
        $this->assertIsArray($dataArr);
    }

    public function testCanDoLegacyRolloverOperation()
    {
        $legacyCategories = $this->legacyResourcesRepository->getCategories($this->newYear);
        $categories = $this->categoriesRepository->rolloverLegacyData($this->newYear, $legacyCategories);
        $this->assertEquals($this->count($legacyCategories), $this->count($categories));
    }

    public function testAfterLegacyRolloverCategoriesHaveUniqueDisplayOrder()
    {
        $categories = $this->categoriesRepository->getDataByYear($this->newYear);
        $categories = $categories->toArray();
        $displayValues = [];
        foreach ($categories as $category) {
            $displayValues[] = $category['display_order'];
        }
        $originalCount = count($displayValues);
        $uniqueCount = count(array_unique($displayValues));

        $this->assertEquals($originalCount, $uniqueCount);
    }

    /**
     * Don't run this for the legacy rollover...save for later
     */
    public function notestCanDoStandardRolloverOperation()
    {
        $data = $this->categoriesRepository->getDataByYear($this->copyYear);
        $dataArr = $data->toArray();
        $this->categoriesRepository->rolloverYear($this->newYear, $dataArr);

        $newData = $this->categoriesRepository->getDataByYear($this->newYear);
        $dataArr = $newData->toArray();
        $this->assertIsArray($dataArr);
    }
}
