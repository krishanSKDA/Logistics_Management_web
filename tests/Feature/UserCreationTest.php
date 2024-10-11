<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\postJson;

uses(RefreshDatabase::class);

test('user can be created successfully', function () {
    $response = postJson('/api/create-user', [
        'name' => 'Test User',
        'email' => 'testuser@example.com',
        'password' => 'password123',
    ]);

    $response->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'message',
            'token',
        ]);

    
    $this->assertDatabaseHas('users', [
        'email' => 'testuser@example.com',
    ]);
});
