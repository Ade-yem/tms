<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{

    /**
     * @var string
     */
    protected $model = Vehicle::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'model' => $this->faker->word,
            'quantity' => $this->faker->randomDigit,
            'numOfSeats' => $this->faker->randomDigit,
            'rate' => $this->faker->randomDigit,
        ];
    }
}
