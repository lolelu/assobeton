<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Event::class;


    public function definition()
    {
        return [
            'published' => $this->faker->boolean,
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,

            //description seed html content
            'description' => '<p>' . $this->faker->paragraph . '</p>',

            'thematic' => $this->faker->sentence,
            'private' => $this->faker->boolean,

        ];
    }
}
