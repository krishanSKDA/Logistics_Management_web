<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name, 
            'email' => $this->faker->unique()->safeEmail,
            'date' => $this->faker->date(), 
            'review' => $this->faker->text(200), 
            'additional_details' => $this->faker->paragraph,
        ];
    }
}
