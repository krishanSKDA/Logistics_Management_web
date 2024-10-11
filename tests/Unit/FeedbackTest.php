<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_feedback()
    {
        $feedback = Feedback::create([
            'name' => 'Krishan',
            'email' => 'danushka@gmail.com',
            'date' => '2024-01-01',
            'review' => 'Great service!',
            'additional_details' => 'I will definitely recommend this.',
        ]);

        $this->assertDatabaseHas('feedback', [
            'email' => 'danushka@gmail.com',
            'name' => 'Krishan',
            'review' => 'Great service!',
        ]);
    }

    public function test_feedback_fillable_attributes()
    {
        $fillable = (new Feedback())->getFillable();

        $this->assertEquals([
            'name',
            'email',
            'date',
            'review',
            'additional_details',
        ], $fillable);
    }

    public function test_feedback_requires_valid_data()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Feedback::create([
            
        ]);
    }

    public function test_feedback_has_correct_date_format()
    {
        $feedback = Feedback::create([
            'name' => 'Krishan',
            'email' => 'danushka@gmail.com',
            'date' => '2024-01-01',
            'review' => 'Great service!',
            'additional_details' => 'I will definitely recommend this.',
        ]);

        $this->assertEquals('2024-01-01', $feedback->date);
    }
}
