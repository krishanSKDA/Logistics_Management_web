<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(), 
            'tracking_number' => $this->faker->unique()->numerify('TRACK#####'),
            'carrier' => $this->faker->randomElement(['FedEx', 'UPS', 'DHL', 'USPS']),
            'shipped_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}
