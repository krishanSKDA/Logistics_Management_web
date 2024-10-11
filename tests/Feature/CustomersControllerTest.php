<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Customers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomersControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Create a user to authenticate the requests
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    /** @test */
    public function it_can_list_all_customers()
    {
        // Create customers
        Customers::factory(5)->create();

        
        $response = $this->getJson('/api/customers');

       
        $response->assertStatus(200)
                 ->assertJsonCount(5); 
    }

    /** @test */
    public function it_can_show_a_customer_by_id()
    {
        
        $customer = Customers::factory()->create();

        
        $response = $this->getJson("/api/customers/{$customer->id}");

       
        $response->assertStatus(200)
                 ->assertJson([
                    'id' => $customer->id,
                    'customer_name' => $customer->customer_name,
                 ]);
    }

    /** @test */
    public function it_can_create_a_customer()
    {
        // Define customer data
        $customerData = [
            'customer_name' => 'Krishan',
            'customer_email' => 'danushka@gmail.com',
            'customer_phone' => '1234567890',
            'alternative_phone' => '0987654321',
            'customer_address' => '123 Test Street',
            'billing_address' => '456 Billing Road',
            'payment_info' => 'Credit Card',
        ];

       
        $response = $this->postJson('/api/customers', $customerData);

        // Assert the customer is created
        $response->assertStatus(201)
                 ->assertJson($customerData);

        // Assert the customer exists in the database
        $this->assertDatabaseHas('customers', [
            'customer_email' => 'danushka@gmail.com',
        ]);
    }

    /** @test */
    public function it_can_update_a_customer()
    {
       
        $customer = Customers::factory()->create();

        
        $updatedData = [
            'customer_name' => 'Krishan',
            'customer_email' => 'danushka@gmail.com',
            'customer_phone' => '9876543210',
            'alternative_phone' => '0123456789',
            'customer_address' => '789 Test Ave',
            'billing_address' => '321 Billing Blvd',
            'payment_info' => 'PayPal',
        ];

       
        $response = $this->putJson("/api/customers/{$customer->id}", $updatedData);

        
        $response->assertStatus(200)
                 ->assertJson($updatedData);

       
        $this->assertDatabaseHas('customers', [
            'customer_email' => 'danushka@gmail.com',
        ]);
    }

    /** @test */
    public function it_can_delete_a_customer()
    {
        
        $customer = Customers::factory()->create();

      
        $response = $this->deleteJson("/api/customers/{$customer->id}");

       
        $response->assertStatus(200)
                 ->assertJson(['message' => 'Customer deleted']);

        
        $this->assertDatabaseMissing('customers', [
            'id' => $customer->id,
        ]);
    }
}
