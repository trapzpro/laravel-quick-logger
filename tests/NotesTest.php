<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Trapzpro\QuickLogger\Note;

uses(RefreshDatabase::class);

it('can create a note', function () {
    $note = Note::factory()->create();

    $this->assertCount(1, Note::all());
});
