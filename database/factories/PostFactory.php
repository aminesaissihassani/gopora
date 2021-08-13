<?php

namespace Database\Factories;

use App\Models\ESport;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'team_id' => Team::factory(),
            'e_sport_id' => ESport::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'image' => $this->faker->word(),
            'body' => $this->faker->paragraph(),
        ];
    }
    # '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>'
}
