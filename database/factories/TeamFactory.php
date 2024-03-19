<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'city_id' => $this->faker->numberBetween(1, 20), // Assuming cities table has 20 records
            'titles' => $this->faker->numberBetween(0, 10),
            'logo' => null, // Assuming logo can be null
        ];
    }
}
