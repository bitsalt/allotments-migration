<?php

use App\Repository\Eloquent\LegacySchoolRepository;
use App\LegacySchools;

it('can check for magnet schools', function () {
    $repos = \App\Repository\LegacySchoolRepositoryInterface::class;
    $arr = $repos->allByYear();
    assertIsArray($arr);
});
