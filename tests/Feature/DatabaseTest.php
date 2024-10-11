<?php
 
namespace Tests\Feature;
 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
 
class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_database(): void
{
    // Create a user in the database with the new name and email
    $user = \App\Models\User::factory()->create([
        'name' => 'Krishan',
        'email' => 'danushka@gmail.com',
    ]);

    
    $response = $this->get('/');

    // Assert that the database has the created user
    $this->assertDatabaseHas('users', [
        'name' => 'Krishan',
        'email' => 'danushka@gmail.com',
    ]);

    
    $response->assertStatus(200);
    $response->assertSee('Krishan');
}

}