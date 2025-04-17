<?php
// app/Http/Controllers/WebsiteFeedbackController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteFeedback;

class WebsiteFeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'feedback' => 'required|string',
            'image_1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Prepare data to store
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'feedback' => $request->feedback,
        ];

        // Handle image uploads if they exist
        if ($request->hasFile('image_1')) {
            $data['image_1'] = $request->file('image_1')->store('feedback_images', 'public');
        }

        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('feedback_images', 'public');
        }

        // Create new feedback entry
        WebsiteFeedback::create($data);

        // Redirect with success message
        return back()->with('success', 'Thank you for your feedback!');
    }
}
