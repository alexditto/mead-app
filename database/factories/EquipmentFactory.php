<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Equipment;
use App\Models\User;

class EquipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'notes' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 2, 9999.),
            'image' => $this->faker->word(),
            'location' => $this->faker->word(),
            'user_id' => User::factory(),
        ];
    }
}
