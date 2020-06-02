<?php

use App\Repository\SchoolYearsRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use App\SchoolYear;

it('can add a school year', function () {
    $repos = new \App\Repository\Eloquent\SchoolYearsRepository(new SchoolYear());
//    $repos = new \App\Repository\Eloquent\SchoolYearsRepository(App\Repository\Eloquent\SchoolYearsRepository::class);
    assertTrue($repos->addSchoolYear(2006, '2006-2007'));
});

test('schoolyears', function () {
    assertTrue(true);
});
