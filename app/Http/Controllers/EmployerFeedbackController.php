<?php

namespace App\Http\Controllers;

use App\Models\Colleges;
use App\Models\EmployerFeedback;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployerFeedbackController extends Controller
{
    public function createEmployerFeedbackForm()
    {
        $colleges = Colleges::select('cd_id', 'cd_name')
            ->where('for_programmes', 'Y') // Add this line
            ->get();

        return view('university.iqac.employer_feedback_form', compact('colleges'));
    }

    public function storeFeedback(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([

            'name' => 'string',
            'current_organization' => 'string',
            'current_designation' => 'string',
            'contact_no' => 'string',
            'email' => 'string',
            'cd_id' => 'exists:cd_name,cd_id',
            'academic_year' => 'string',
            'q1' => 'string',
            'q2' => 'string',
            'q3' => 'string',
            'overall_rating' => 'numeric|min:1|max:5',
            'improve_syllabus' => 'string',
            'new_content_existing_syllabus' => 'string',
            'topics_to_delete' => 'string',
            'addition_of_new_course' => 'string',
            'any_emerging_trend' => 'string',
            




        ]);

        // Store feedback data into the feedback table
        DB::table('employer_feedback')->insert($validatedData);




        // Redirect with a success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
