<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Feedback;

class FeedbackControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_submit_feedback()
    {
       
        $feedbackData = [
            'name' => 'Krishan',
            'email' => 'danushka@gmail.com',
            'date' => now()->toDateString(),
            'review' => 'Great service!',
            'additional_details' => 'Nothing else to add.',
        ];

       
        $response = $this->post('/feedback', $feedbackData);

        
        $response->assertStatus(302)
                 ->assertSessionHasNoErrors();

       
        $this->assertDatabaseHas('feedback', [
            'name' => 'Krishan',
            'email' => 'danushka@gmail.com',
            'review' => 'Great service!',
        ]);
    }

    /** @test */
    public function it_fails_to_submit_feedback_with_invalid_data()
    {
      
        $invalidData = [
            'name' => '', 
            'email' => 'invalid-email',
            'date' => 'invalid-date',
            'review' => '', 
        ];

       
        $response = $this->post('/feedback', $invalidData);

        
        $response->assertStatus(302) 
                 ->assertSessionHasErrors([
                    'name', 'email', 'date', 'review',
                 ]);
    }

    /** @test */
    public function it_submits_feedback_with_optional_additional_details()
    {
       
        $feedbackData = [
            'name' => 'Krishan',
            'email' => 'danushka@gmail.com',
            'date' => now()->toDateString(),
            'review' => 'Great service!',
            'additional_details' => null, 
        ];

       
        $response = $this->post('/feedback', $feedbackData);

      
        $response->assertStatus(302) 
                 ->assertSessionHasNoErrors();

     
        $this->assertDatabaseHas('feedback', [
            'name' => 'Krishan',
            'email' => 'danushka@gmail.com',
            'review' => 'Great service!',
            'additional_details' => null,
        ]);
    }
}
