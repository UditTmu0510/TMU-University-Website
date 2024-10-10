<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Colleges;

use Illuminate\Http\Request;

class AlumnifeedbackController extends Controller
{
    public function createAlumniFeedbackForm()
    {
        $colleges = Colleges::select('cd_id', 'cd_name')
            ->where('for_programmes', 'Y') // Add this line
            ->get();

        return view('university.iqac.alumni_feedback_form', compact('colleges'));
    }

    public function storeFeedback(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([

            'name' => 'string',
            'current_organization' => 'string',
            'current_designation' => 'string',
            'cd_id' => 'exists:cd_name,cd_id',
            'prog_studied_in_tmu' => 'string',
            'prog_passout_year' => 'string',
            'cd_enroll_no' => 'string',
            'email' => 'string',
            'contact_no' => 'string',
            'academic_year' => 'string',
            'overall_rating' => 'numeric|min:1|max:5',
            'topics_beyond_syllabus' => 'string',
            'topics_to_delete' => 'string',
            'suggestions' => 'string',
            'q1' => 'string',
            'q2' => 'string',
            'q3' => 'string',
            'q4' => 'string',
            'q5' => 'string',
            'q6' => 'string',
            'q7' => 'string',
            'q8' => 'string',
            'q9' => 'string',
            'q10' => 'string',


        ]);

        // Store feedback data into the feedback table
        DB::table('alumni_feedback')->insert($validatedData);




        // Redirect with a success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
