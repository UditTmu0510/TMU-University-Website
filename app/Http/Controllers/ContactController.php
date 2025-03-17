<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Contact; // Import the Contact model
use App\Mail\ThankYouMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secretKey = env('RECAPTCHA_SECRET_KEY'); // Store your secret key in .env

        // Send POST request to reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
        ]);

        $responseData = $response->json();

        if (!$responseData['success']) {
            return back()->withErrors(['captcha' => 'ReCAPTCHA verification failed.']);
        }

        // Validate form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
            'cd_id' => 'nullable|integer', // Validate cd_id if present
        ]);

        // Save to the database
        Contact::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'cd_id' => $validatedData['cd_id'] ?? null, // Handle nullable cd_id
            'message' => $validatedData['message']
        ]);
        // Send thank you email to the user
        Mail::to($validatedData['email'])->send(new ThankYouMail($validatedData['first_name'], $validatedData['last_name']));
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
