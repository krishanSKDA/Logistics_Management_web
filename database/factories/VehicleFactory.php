<?php

namespace Database\Factories;

use App\Models\Vehicle; 
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class; 

    public function definition()
    {
        return [
            'make' => $this->faker->company,
            'vehicle_model' => $this->faker->word,
            'registration_number' => strtoupper($this->faker->unique()->bothify('??###??')),
            'year' => (string) $this->faker->year($max = 'now'),
            'type' => $this->faker->randomElement(['plane', 'truck', 'ship', 'other', 'sedan']),
        ];
    }
}
