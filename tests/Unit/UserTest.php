<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Customers; 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_fill_mass_assignment_attributes()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123', 
            'address' => '123 Street Name',
            'mobile_number' => '1234567890',
            'dob' => '2000-01-01',
        ];

        $user = User::create($userData);

        $this->assertEquals($userData['name'], $user->name);
        $this->assertEquals($userData['email'], $user->email);
        $this->assertEquals($userData['address'], $user->address);
        $this->assertEquals($userData['mobile_number'], $user->mobile_number);
        $this->assertEquals($userData['dob'], $user->dob);
        $this->assertNotEquals($userData['password'], $user->password); 
    }

    /** @test */
    public function it_has_a_customer_relationship()
    {
        $user = User::factory()->create(); 
        $customer = Customers::factory()->create(['user_id' => $user->id]); 

        $this->assertInstanceOf(Customers::class, $user->customer);
        $this->assertEquals($customer->id, $user->customer->id);
    }
}
