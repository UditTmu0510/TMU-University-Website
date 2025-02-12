<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manuscript;
use Illuminate\Support\Facades\Storage;

class ManuscriptController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'email|max:255',
            'phone_number' => 'string|max:20',
            'applicant_file' => 'file|mimes:pdf,doc,docx|max:2048', // Ensure file upload
            'cd_id' => 'integer',
        ]);

        // Handle file upload
        if ($request->hasFile('applicant_file')) {
            $filePath = $request->file('applicant_file')->store('manuscripts', 'public');
            $validatedData['applicant_file_path'] = 'storage/' . $filePath;
        } else {
            return back()->withErrors(['applicant_file' => 'File upload is required.']);
        }

        // Store data in database
        Manuscript::create($validatedData);

        session()->flash('success', 'Manuscript submitted successfully.');
        return redirect()->back();
    }
}
