<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'review' =>  'required|string|max:255',
            'additional_details' =>  'nullable|string|max:255',
           // 'form_type' => 'required|string', 
        ]);

        // Create feedback and store it in the database
        Feedback::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'date' => $validated['date'],
            'review' => $validated['review'],
            'additional_details' => $validated['additional_details'] ?? null,
            //'form_type' => $validated['form_type'], 
        ]);

        return redirect()->back();
    }
}

