<?php

it('has schoolyears page', function () {
    $response = $this->get('/schoolyears');

    $response->assertStatus(200);
});
