<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Batch;
use App\Models\Recipe;
use App\Models\User;

class BatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Batch::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'start_date' => $this->faker->date(),
            'primary_fermentation' => $this->faker->date(),
            'secondary_fermentation' => $this->faker->date(),
            'aging' => $this->faker->date(),
            'notes' => $this->faker->text(),
            'abv' => $this->faker->randomFloat(5, 0, 1000.),
            'sg' => $this->faker->randomFloat(5, 0, 1000.),
            'brix' => $this->faker->randomFloat(5, 0, 1000.),
            'baume' => $this->faker->randomFloat(5, 0, 1000.),
            'abw' => $this->faker->randomFloat(5, 0, 1000.),
            'label' => $this->faker->word(),
            'tags' => $this->faker->word(),
            'status' => $this->faker->randomElement(["pending","successful","failed","primary_fermentation","secondary_fermentation","aging"]),
            'user_id' => User::factory(),
            'recipe_id' => Recipe::factory(),
        ];
    }
}
