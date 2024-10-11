<?php

namespace Tests\Unit;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_store_a_customer()
    {
       
        $user = User::factory()->create(); 

        
        Auth::login($user);

        
        $customerData = [
            'customer_name' => 'Krishan',
            'customer_email' => 'danushka@gmail.com',
            'customer_phone' => '1234567890',
            'alternative_phone' => '0987654321',
            'customer_address' => '123 Elm St, Springfield',
            'billing_address' => '456 Oak St, Springfield',
            'payment_info' => 'Credit Card',
        ];

       
        $response = $this->post(route('customers.store'), $customerData);

       
        $response->assertRedirect();

        
        $this->assertDatabaseHas('customers', [
            'customer_name' => 'Krishan',
            'customer_email' => 'danushka@gmail.com',
            'customer_phone' => '1234567890',
            'user_id' => $user->id, 
        ]);
    }

    /** @test */
    public function it_validates_customer_data()
    {
        
        $user = User::factory()->create(); 

       
        Auth::login($user);

        
        $response = $this->post(route('customers.store'), [
            'customer_name' => '', 
            'customer_email' => 'not-an-email', 
            'customer_phone' => '', 
        ]);

       
        $response->assertSessionHasErrors(['customer_name', 'customer_email', 'customer_phone']);
        $response->assertStatus(302); 
    }
}
