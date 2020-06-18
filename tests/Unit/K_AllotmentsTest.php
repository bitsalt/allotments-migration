<?php


namespace Tests\Unit;


class KAllotmentsTest extends \Tests\TestCase
{
    private $allotmentsRepository;
    private $newYear = 2006;

    function setUp(): void
    {
        parent::setUp();
        $this->allotmentsRepository = $this->app
            ->make('App\Repository\AllotmentsRepositoryInterface');
    }
}
