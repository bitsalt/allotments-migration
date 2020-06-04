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
        $this->resourcesRepository = $this->app->make('App\Repository\LegacyResourcesRepositoryInterface');
    }

    public function testCanGetResourcesCollection() {
        $collection = $this->resourcesRepository->getResources($this->newYear);
        $this->assertInstanceOf(Collection::class, $collection);
    }

    public function testCanGetCategoriesFromResources() {
        $categories = $this->resourcesRepository->getCategories($this->newYear);
        $this->assertArrayNotHasKey('data_link', $categories);
    }



}
