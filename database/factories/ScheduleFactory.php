<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{

    /**
     * @var string
     */
    protected $model = Schedule::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate start_time between now and +3 years
        $start_time = $this->faker->dateTimeBetween('now', '+3 years');

        return [
            'start_time' => $start_time->format('Y-m-d H:i:s'),
            // Generate end_time between start_time and +3 years from start_time
            'end_time' => $this->faker->dateTimeBetween($start_time, $start_time->format('Y-m-d H:i:s') . ' +3 years')->format('Y-m-d H:i:s'),
            'vehicle' => $this->faker->name,
            'user_email' => $this->faker->email,
            'completed' => $this->faker->boolean,
        ];
    }
}
