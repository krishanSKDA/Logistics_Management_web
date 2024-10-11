<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class ModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_creation()
    {
        // Arrange: Set up the data needed for the test
        $data = [
            'name' => 'Krishan Danushka',
            'email' => 'danushka@gmail.com',
            'password' => 'secret',
        ];

        // Act: Execute the functionality being tested
        $user = User::create($data);

        // Assert: Check the results
        $this->assertDatabaseHas('users', [
            'email' => 'danushka@gmail.com',
        ]);
    }
}

