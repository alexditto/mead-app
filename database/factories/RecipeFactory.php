<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Recipe;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'notes' => $this->faker->text(),
            'target_gravity' => $this->faker->randomFloat(5, 0, 1000.),
            'target_volume' => $this->faker->randomFloat(5, 0, 1000.),
            'rating' => $this->faker->word(),
            'sharable' => $this->faker->boolean(),
            'creator_id' =>  User::factory(),
            'owner_id' =>  User::factory(),
        ];
    }
}
