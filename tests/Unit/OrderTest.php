<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Order;
use App\Models\Customers;
use App\Models\User; 
use App\Models\Shipment;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_order()
    {
       
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), 
        ]);

       
        $customer = Customers::create([
            'user_id' => $user->id,
            'customer_name' => 'Krishan',
            'customer_email' =>'danushka@gmail.com',
            'customer_phone' => '1234567890',
            'alternative_phone' => '0987654321',
            'customer_address' => '123 Elm St',
            'billing_address' => '123 Elm St',
            'payment_info' => 'Credit Card',
        ]);

        $order = Order::create([
            'customer_id' => $customer->id,
            'order_number' => 'ORD12345',
            'order_date' => now(),
            'receiver_name' => 'Krishan',
            'order_type' => 'Standard',
            'shipping_address' => '456 Oak St',
            'package_size' => 'Medium',
            'package_weight' => 5.5,
            'delivery_instructions' => 'Leave at the front door',
            'status' => 'Pending',
        ]);

        $this->assertDatabaseHas('orders', [
            'order_number' => 'ORD12345',
            'receiver_name' => 'Krishan',
            'status' => 'Pending',
        ]);
    }

    public function test_order_fillable_attributes()
    {
        $fillable = (new Order())->getFillable();

        $this->assertEquals([
            'customer_id',
            'order_number',
            'order_date',
            'receiver_name',
            'order_type',
            'shipping_address',
            'package_size',
            'package_weight',
            'delivery_instructions',
            'status',
        ], $fillable);
    }

    public function test_order_belongs_to_customer()
    {
       
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

      
        $customer = Customers::create([
            'user_id' => $user->id,
            'customer_name' => 'Krishan',
            'customer_email' => 'danushka@gmail.com',
            'customer_phone' => '1234567890',
            'alternative_phone' => '0987654321',
            'customer_address' => '123 Elm St',
            'billing_address' => '123 Elm St',
            'payment_info' => 'Credit Card',
        ]);

        $order = Order::create([
            'customer_id' => $customer->id,
            'order_number' => 'ORD12345',
            'order_date' => now(),
            'receiver_name' => 'Krishan',
            'order_type' => 'Standard',
            'shipping_address' => '456 Oak St',
            'package_size' => 'Medium',
            'package_weight' => 5.5,
            'delivery_instructions' => 'Leave at the front door',
            'status' => 'Pending',
        ]);

        $this->assertInstanceOf(Customers::class, $order->customer);
        $this->assertEquals($customer->id, $order->customer->id);
    }

    public function test_order_has_one_shipment()
    {
       
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $customer = Customers::create([
            'user_id' => $user->id,
            'customer_name' => 'Krishan',
            'customer_email' => 'danushka@gmail.com',
            'customer_phone' => '1234567890',
            'alternative_phone' => '0987654321',
            'customer_address' => '123 Elm St',
            'billing_address' => '123 Elm St',
            'payment_info' => 'Credit Card',
        ]);

       
        $order = Order::create([
            'customer_id' => $customer->id,
            'order_number' => 'ORD12345',
            'order_date' => now(),
            'receiver_name' => 'Krishan',
            'order_type' => 'Standard',
            'shipping_address' => '456 Oak St',
            'package_size' => 'Medium',
            'package_weight' => 5.5,
            'delivery_instructions' => 'Leave at the front door',
            'status' => 'Pending',
        ]);

       
        $shipment = $order->shipment()->create([
            'tracking_number' => 'TRACK123',
            'shipping_status' => 'In Transit',
        ]);

        $this->assertInstanceOf(Shipment::class, $order->shipment);
        $this->assertEquals($shipment->id, $order->shipment->id);
    }
}
