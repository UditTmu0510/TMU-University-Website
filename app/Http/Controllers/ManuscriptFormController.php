<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Manuscript;

class ManuscriptFormController extends Controller
{
    /**
     * Store a newly submitted manuscript in the database and handle file uploads.
     */
    public function store(Request $request)
    {
        try {
            // Step 1: Validate the input fields
            Log::info('Step 1: Validation started');
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:15',
                'applicant_file_path' => 'required|file|mimes:pdf,doc,docx|max:2048', // Restrict to certain file types
            ]);

            Log::info('Step 2: Validation passed, handling file upload');

            // Step 2: Handle file upload
            if ($request->hasFile('applicant_file_path')) {
                // Get the original file name
                $originalFileName = $request->file('applicant_file_path')->getClientOriginalName();

                // Define the target folder path
                $targetFolder = public_path('assets/pdf/manuscript_file');

                // Ensure the folder exists, create if not
                if (!file_exists($targetFolder)) {
                    mkdir($targetFolder, 0755, true); // Create the folder with proper permissions
                    Log::info('Folder created at ' . $targetFolder);
                }

                // Move the file to the target folder
                $filePath = $request->file('applicant_file_path')->move($targetFolder, $originalFileName);

                // Get the relative path to store in the database
                $relativePath = 'assets/pdf/manuscript_file/' . $originalFileName;

                Log::info('File uploaded successfully: ' . $relativePath);
            } else {
                throw new \Exception('File upload failed. No file found.');
            }

            Log::info('Step 3: File uploaded, storing in database');

            // Step 3: Store data in the database
            Manuscript::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'applicant_file_path' => $relativePath,
                'cd_id' => $request->input('cd_id', 5), // Default to 5 if not provided
            ]);

            Log::info('Step 4: Data stored successfully');

            // Step 4: Redirect back with a success message
            return back()->with('success', 'Manuscript submitted successfully.');
        } catch (\Exception $e) {
            // Step 5: Log the error and return a user-friendly message
            Log::error('Error at Step X: ' . $e->getMessage());
            return back()->withErrors(['error' => 'There was an issue submitting your manuscript. Please try again.'.$e->getMessage()]);
        }
    }
}
