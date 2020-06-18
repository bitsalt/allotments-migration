<?php

namespace Tests\Unit;

use Tests\TestCase;

final class DCategoriesTest extends TestCase
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
        $data = $this->categoriesRepository->getAllDataByYear($this->copyYear);
        $this->assertIsArray($data);
    }

    public function testCanDoLegacyRolloverOperation()
    {
        $legacyCategories = $this->legacyResourcesRepository->getCategories($this->newYear);
        $this->categoriesRepository->rolloverLegacyData($this->newYear, $this->copyYear, $legacyCategories);
        //$this->assertEquals($this->count($legacyCategories), $this->count($categories));
        $data = $this->categoriesRepository->getAllDataByYear($this->newYear);
        $this->assertNotNull($data[0]['category_name']);
    }

    public function testAfterLegacyRolloverCategoriesHaveUniqueDisplayOrder()
    {
        $categories = $this->categoriesRepository->getAllDataByYear($this->newYear);
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
        $data = $this->categoriesRepository->getAllDataByYear($this->copyYear);
        $this->categoriesRepository->rolloverYear($this->newYear, $data);

        $newData = $this->categoriesRepository->getAllDataByYear($this->newYear);
        $this->assertIsArray($newData);
    }
}
