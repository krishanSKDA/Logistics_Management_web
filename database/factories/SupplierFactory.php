<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, 
            'contact_person' => $this->faker->name, 
            'email' => $this->faker->unique()->safeEmail, 
            'phone' => $this->faker->phoneNumber, 
            'address' => $this->faker->address, 
        ];
    }
}
