<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Customers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customers::factory(), 
            'order_number' => $this->faker->unique()->numerify('ORD###'), 
            'order_date' => now(), 
            'receiver_name' => $this->faker->name, 
            'order_type' => $this->faker->randomElement(['Standard', 'Express']), 
            'shipping_address' => $this->faker->address, 
            'package_size' => $this->faker->randomElement(['Small', 'Medium', 'Large']),  
            'package_weight' => $this->faker->randomFloat(2, 1, 50),
            'delivery_instructions' => $this->faker->sentence, 
            'status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered']),
        ];
    }
}
