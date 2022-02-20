<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Trapzpro\QuickLogger\Note;
use Trapzpro\QuickLogger\QuickLogger;

uses(RefreshDatabase::class);

it('can create a note via model', function () {
    $note = Note::factory()->create();

    $this->assertCount(1, Note::all());
});

it('can create a note via QuickLogger class', function () {
    $note = QuickLogger::note('QuickLogger note!');

    $this->assertCount(1, Note::all());
});
