<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aebes;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class AebesController extends Controller
{
    public function view()
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $aebes = Aebes::all();
        return view('admin.backend.pages.aebes.view', compact('aebes', 'profileData'));
    }

    public function edit($id)
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $aebes = Aebes::findOrFail($id); // Fetch Aebes by ID
        return view('admin.backend.pages.aebes.edit', compact('aebes', 'profileData'));
    }

    public function update(Request $request, $id)
    {
        try {
            $aebes = Aebes::findOrFail($id); // Fetch record by ID

            // Validate incoming data
            $request->validate([
                'date' => 'required|date',
                'pdf_path' => 'nullable|mimes:pdf|max:2048' // Only PDFs, max 2MB
            ]);

            // Update date
            $aebes->date = $request->date;

            // Handle file upload (only if a new file is uploaded)
            if ($request->hasFile('pdf_path')) {

                // Prepare path details from date
                $date = \Carbon\Carbon::parse($request->date);
                $year = $date->format('Y');
                $month = $date->format('F');
                $day = $date->format('d');

                // Define folder path
                $folderPath = 'assets/pdf/aebas-attendance/' . $year . '/' . $month;

                // Create folder if it doesn't exist
                if (!file_exists(public_path($folderPath))) {
                    mkdir(public_path($folderPath), 0777, true);
                }

                // Generate unique filename like "19-February-2025_1615341234.pdf"
                $timestamp = time();
                $filename = $day . '-' . $month . '-' . $year . '_' . $timestamp . '.pdf';

                // Move file
                $file = $request->file('pdf_path');
                $file->move(public_path($folderPath), $filename);

                // Save new path to DB
                $aebes->pdf_path = $folderPath . '/' . $filename;
            }

            $aebes->save(); // Save changes

            return redirect()->route('aebes.view')->with('success', 'Attendance updated successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $aebes = Aebes::findOrFail($id);

            // Optionally: delete the PDF file associated (if needed)
            if (file_exists(public_path($aebes->pdf_path))) {
                unlink(public_path($aebes->pdf_path));
            }

            $aebes->delete();

            return redirect()->route('aebes.view')->with('success', 'Attendance deleted successfully!');
        } catch (Exception $e) {
            return redirect()->route('aebes.view')->with('error', 'Error deleting record: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        return view('admin.backend.pages.aebes.create', compact('profileData'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'date' => 'required|date', // Ensure correct date format
            'pdf_path' => 'required|mimes:pdf|max:2048', // Require PDF max 2MB
        ]);

        $date = $request->date; // Expected format: Y-m-d

        // Check if attendance already exists for this date
        $existing = Aebes::where('date', $date)->first();
        if ($existing) {
            // Redirect back with error and link to edit
            return redirect()->back()->with(
                'error',
                'Attendance for this date <b>' . $date . '</b> already exists. 
            <a href="' . route('aebes.edit', $existing->id) . '" class="btn btn-sm btn-primary mt-2">Click here to Edit</a>'
            );
        }

        try {
            // Parse date components
            $carbonDate = \Carbon\Carbon::parse($date);
            $year = $carbonDate->format('Y');
            $month = $carbonDate->format('F'); // Full month name
            $day = $carbonDate->format('d');

            // Folder path logic
            $folderPath = 'assets/pdf/aebas-attendance/' . $year . '/' . $month;
            if (!file_exists(public_path($folderPath))) {
                mkdir(public_path($folderPath), 0777, true); // Create folder if not exists
            }

            // File name logic
            $timestamp = time();
            $filename = $day . '-' . $month . '-' . $year . '_' . $timestamp . '.pdf';

            // Move file
            $file = $request->file('pdf_path');
            $file->move(public_path($folderPath), $filename);

            // Store attendance record
            $aebes = new Aebes();
            $aebes->date = $date;
            $aebes->pdf_path = $folderPath . '/' . $filename;
            $aebes->save();

            return redirect()->route('aebes.view')->with('success', 'Attendance added successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
