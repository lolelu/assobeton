<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'published' => $this->faker->boolean,
            'title' => $this->faker->sentence,
            'description' => '<p>' . $this->faker->paragraph . '</p>',
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'address' => $this->faker->address,

            //Da mettere a posto e associare con le variabilie di regione e gruppo e tipo
            // 'region' => $this->faker->sentence,


            // 'group' => $this->faker->sentence,
            // 'type' => $this->faker->sentence,
        ];
    }
}
