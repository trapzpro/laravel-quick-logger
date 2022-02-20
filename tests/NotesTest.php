<?php

use Trapzpro\QuickLogger\Note;
use Trapzpro\QuickLogger\QuickLogger;
use Trapzpro\QuickLogger\Facades\QuickLogger as QL;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a note', function () {

    $note = Note::factory()->create();

    $this->assertCount(1, Note::all());
});

it('can create a note via QuickLogger class', function () {

    $note = QuickLogger::note('QuickLogger note!');

    $this->assertCount(1, Note::all());
});