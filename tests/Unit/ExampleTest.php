<?php

// Example tests for learning to use Pest PHP
test('basic')->assertTrue(true);

it('has welcome page')
    ->get('/')
    ->assertStatus(200);

