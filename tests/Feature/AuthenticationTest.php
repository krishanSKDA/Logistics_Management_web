<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class); 
test('login screen can be rendered', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    
    $password = 'password';
    $user = User::factory()->create([
        'password' => bcrypt($password), 
    ]);

    
    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => $password,
    ]);

   
    $this->assertAuthenticatedAs($user); 
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users cannot authenticate with invalid password', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'), 
    ]);

    
    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

   
    $this->assertGuest(); 
});
