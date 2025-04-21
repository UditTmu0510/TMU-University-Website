<?php

namespace App\Http\Controllers;

use App\Models\Colleges;
use App\Models\EmployerFeedback;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ExpertFeedbackController extends Controller
{
    public function createExpertFeedbackForm()
    {
        $colleges = Colleges::select('cd_id', 'cd_name')
            ->where('for_programmes', 'Y') // Add this line
            ->get();

        return view('university.iqac.expert_feedback_form', compact('colleges'));
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
            'q4' => 'string',
            'q5' => 'string',
            'q6' => 'string',
            'q7' => 'string',
            'q8' => 'string',
            'q9' => 'string',
            'q10' => 'string',
            'overall_rating' => 'numeric|min:1|max:5',
            'improve_syllabus' => 'string',
            'new_content_existing_syllabus' => 'string',
            'topics_to_delete' => 'string',
            'addition_of_new_course' => 'string',
            'any_emerging_trend' => 'string',
            




        ]);

        // Store feedback data into the feedback table
        DB::table('expert_feedback')->insert($validatedData); 




        // Redirect with a success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
