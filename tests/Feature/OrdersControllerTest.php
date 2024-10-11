<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Order;
use App\Models\Customers; 
class OrdersControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_store_a_new_order()
    {
      
        $user = User::factory()->create();
        $user->customer()->save(Customers::factory()->make()); 
        $this->actingAs($user);

      
        $orderData = [
            'receiver_name' => 'John Doe',
            'order_type' => 'Standard',
            'shipping_address' => '123 Elm St, Springfield',
            'package_size' => 'Medium',
            'package_weight' => '2kg',
            'delivery_instructions' => 'Leave at the front door',
            'terms_and_conditions' => true,
        ];

       
        $response = $this->post(route('orders.store'), $orderData);

      
        $response->assertRedirect();
        $this->assertCount(1, Order::all());

      
        $order = Order::first();
        $this->assertEquals('John Doe', $order->receiver_name);
        $this->assertEquals('Standard', $order->order_type);
        $this->assertEquals('123 Elm St, Springfield', $order->shipping_address);
        $this->assertEquals('Medium', $order->package_size);
        $this->assertEquals('2kg', $order->package_weight);
        $this->assertEquals('Leave at the front door', $order->delivery_instructions);
    }

    /** @test */
    public function it_validates_required_fields_when_storing_an_order()
    {
       
        $user = User::factory()->create();
        $user->customer()->save(Customers::factory()->make()); 
        $this->actingAs($user);

        
        $invalidOrderData = [
            
            'delivery_instructions' => 'Leave at the front door',
            'terms_and_conditions' => false, 
        ];

        // Make a POST request to the store method with invalid data
        $response = $this->post(route('orders.store'), $invalidOrderData);

        // Assert the response status
        $response->assertSessionHasErrors(['receiver_name', 'order_type', 'shipping_address', 'package_size', 'package_weight']);
        $this->assertCount(0, Order::all()); 
    }
}
