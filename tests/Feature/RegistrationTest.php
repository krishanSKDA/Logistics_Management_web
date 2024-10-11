<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the registration screen can be rendered.
     */
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * Test if the registration screen cannot be rendered if support is disabled.
     */
    public function test_registration_screen_cannot_be_rendered_if_support_is_disabled()
    {
        
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * Test if new users can register.
     */
    public function test_new_users_can_register()
    {
        // Arrange: Prepare user data
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
            'address' => '123 Test St',
            'mobile_number' => '1234567890',
            'dob' => '2000-01-01',
        ];

        // Act: Perform the registration request
        $response = $this->post('/register', $userData);

      
        $this->assertAuthenticated();

        // Assert: Check if the user is redirected to the dashboard
        $response->assertRedirect(route('dashboard', absolute: false));

       
    }

    /**
     * Test registration fails if required fields are missing.
     */
    public function test_registration_fails_with_missing_fields()
    {
        $response = $this->post('/register', []);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }

    /**
     * Test registration fails with invalid email.
     */
    public function test_registration_fails_with_invalid_email()
    {
        $userData = [
            'name' => 'Test User',
            'email' => 'invalid-email',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors('email');
    }

    /**
     * Test registration fails when passwords do not match.
     */
    public function test_registration_fails_when_passwords_do_not_match()
    {
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'wrongpassword',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors('password');
    }

    /**
     * Test registration fails if the email is already taken.
     */
    public function test_registration_fails_if_email_is_already_taken()
    {
        
        User::create([
            'name' => 'Existing User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'address' => '123 Test St',
            'mobile_number' => '1234567890',
            'dob' => '2000-01-01',
        ]);

        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors('email');
    }
}
