<?php

namespace Trapzpro\QuickLogger;

class QuickLogger
{
    public static function note(string $text)
    {
        $newNote = (new Note(['start_note' => $text]))->save();
    }
}