<?php
use App\Repository\Eloquent\LegacySchoolRepository;

test('legacyschools', function () {
    assertTrue(true);
});

it('can list legacy schools', function() {
    $coll = \App\LegacySchools::all();
    $allSchools = $coll->toArray();
    assertIsArray($allSchools);
});
