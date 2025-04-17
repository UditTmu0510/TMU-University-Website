<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TeachersFeedbackExport;
use App\Exports\EmployerFeedbackExport;
use App\Exports\ExpertFeedbackExport;
use App\Exports\AlumniFeedbackExport;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IQACFeedbackExportController extends Controller
{


    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.backend.pages.iqac_feedback_forms.feedback_forms', compact('profileData')); // OR 'admin.feedback_forms' if inside folder
    }

    public function downloadTeachersFeedback()
    {
        return Excel::download(new TeachersFeedbackExport, 'teachers_feedback.xlsx');
    }

    public function downloadEmployerFeedback()
    {
        return Excel::download(new EmployerFeedbackExport, 'employer_feedback.xlsx');
    }

    public function downloadExpertFeedback()
    {
        return Excel::download(new ExpertFeedbackExport, 'expert_feedback.xlsx');
    }

    public function downloadAlumniFeedback()
    {
        return Excel::download(new AlumniFeedbackExport, 'alumni_feedback.xlsx');
    }
}
