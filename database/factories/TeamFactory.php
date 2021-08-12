<?php

namespace Database\Factories;

use App\Models\ESport;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'e_sports_id' => ESport::factory(),
            'name' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'region' => $this->faker->word(),
            'logo' => $this->faker->word(),
            'founded_at' => $this->faker->date(),
        ];
    }
}
