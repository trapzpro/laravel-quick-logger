<?php

use Trapzpro\QuickLogger\Note;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a note', function () {

    $note = Note::factory()->create();

    $this->assertCount(1, Note::all());
});