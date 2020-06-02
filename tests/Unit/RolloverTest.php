<?php

it('has rollover page')
    ->get('/rollover')
    ->assertStatus(200);

it('cat get data count before rollover', function() {
    $ro = new \App\Http\Controllers\RolloverController();
    $ro->countem('pre');
    $data = $ro->getPreRolloverTableRowCount();
    assertEquals(1443, $data['schools']);
});

it('cat get data count after rollover', function() {
    $ro = new \App\Http\Controllers\RolloverController();
    $ro->countem('post');
    $data = $ro->getPostRolloverTableRowCount();
    assertEquals(1443, $data['schools']);
});
