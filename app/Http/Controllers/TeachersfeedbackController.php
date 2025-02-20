<?php

namespace App\Http\Controllers;
use App\Models\Colleges;
use App\Models\TeachersFeedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class TeachersfeedbackController extends Controller
{
    public function createTeachersFeedbackForm()
{
    $colleges = Colleges::select('cd_id', 'cd_name')
        ->where('for_programmes', 'Y') // Add this line
        ->get();

    return view('university.iqac.teachers_feedback_form', compact('colleges'));



    
}


    public function storeFeedback(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'cd_id' => 'exists:cd_name,cd_id',
            'faculty_name' => 'string',
            'designation' => 'string',
            'employee_code' => 'string',
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
            'topics_beyond_syllabus' => 'string',
            'topics_to_delete' => 'string',
            'suggestions' => 'string',
        ]);

        // Store feedback data into the feedback table
        DB::table('teachers_feedback')->insert($validatedData);

        


        // Redirect with a success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }

    
}