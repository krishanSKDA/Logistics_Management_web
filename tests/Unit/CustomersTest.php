<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Order;
use App\Models\Customers;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_customer()
    {
        
        $user = User::factory()->create();

        
        $customer = Customers::create([
            'user_id' => $user->id,
            'customer_name' => 'Krishan',
            'customer_email' => 'kdanushka@gmail.com',
            'customer_phone' => '1234567890',
            'alternative_phone' => '0987654321',
            'customer_address' => '123 Main St',
            'billing_address' => '123 Billing St',
            'payment_info' => 'Credit Card'
        ]);

       
        $this->assertInstanceOf(Customers::class, $customer);
        $this->assertEquals('Krishan', $customer->customer_name);
        $this->assertEquals('kdanushka@gmail.com', $customer->customer_email);
    }

    /** @test */
    public function it_belongs_to_a_user()
    {
      
        $user = User::factory()->create();
        $customer = Customers::factory()->create(['user_id' => $user->id]);

    
        $this->assertInstanceOf(User::class, $customer->user);
        $this->assertEquals($customer->user->id, $user->id);
    }

    /** @test */
    public function it_has_many_orders()
    {
       
        $customer = Customers::factory()->create();
        $orders = Order::factory()->count(3)->create(['customer_id' => $customer->id]);

        
        $this->assertCount(3, $customer->orders);
        $this->assertInstanceOf(Order::class, $customer->orders->first());
    }

    /** @test */
    public function it_requires_valid_data_to_create_a_customer()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

      
        Customers::create([
            'customer_name' => null,
            'customer_email' => null,
        ]);
    }
}
