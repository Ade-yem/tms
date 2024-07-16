<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RequestVehicle;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RequestVehicleFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = RequestVehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameOfVehicle' => $this->faker->name,
            'email' => $this->faker->email,
            'vehicleModel' => $this->faker->word,
            'whereTo' => $this->faker->word,
            'reason' => $this->faker->word,
        ];
    }
}
