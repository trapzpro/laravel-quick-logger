<?php

namespace Trapzpro\QuickLogger\Database\Factories;

use Trapzpro\QuickLogger\Note;
use Illuminate\Database\Eloquent\Factories\Factory;



class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->biasedNumberBetween(),
            'start_note' => $this->faker->sentence(),
            'end_note' => $this->faker->sentence(),
        ];
    }
}