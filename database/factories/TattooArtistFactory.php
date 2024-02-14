<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TattooArtist>
 */
class TattooArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'presentation' => $this->faker->sentences(4, true),
            'home_phone' => $this->faker->phoneNumber(),
            'phone' => $this->faker->phoneNumber(),
            'instagram_sociallink' => $this->faker->userName(),
            'created_at' =>$this->faker->dateTime(),
            'updated_at' =>$this->faker->dateTime()
        ];
    }
}
