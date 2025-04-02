<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobapplication;
use App\Models\Jobappliqualification;
use App\Models\ExamsQualified;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PDF;
use App\Exports\JobApplicationsExport;
use Maatwebsite\Excel\Facades\Excel;

class JobApplicationController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $profileData = User::find($user_id);
        $job_applications = Jobapplication::orderBy('id', 'desc')->get();
        return view('admin.backend.pages.jobapplications.view_all_jobs', compact('job_applications', 'profileData'));
    }

    public function generate_pdf(Request $request)
    {
        $job_id = $request->id;
        $jobapplication = Jobapplication::where('id', $job_id)->first();
        $job_qualifications = Jobappliqualification::where('application_id', $job_id)->get();
        $exams_qualified = ExamsQualified::where('application_id', $job_id)->get();
        $pdf = PDF::loadView('admin.backend.pages.jobapplications.generate_pdf', compact('jobapplication', 'job_qualifications', 'exams_qualified'));
        return $pdf->stream('application_details.pdf');
    }

    public function exportJobApplications()
    {
        try {
            // Authorization is handled by middleware, but you can still add a fallback
            if (!Auth::user()->hasPermissionTo('Export Job Applications')) {
                abort(403, 'You do not have permission to export job applications.');
            }

            return Excel::download(new JobApplicationsExport(), 'job_applications.xlsx');
        } catch (Exception $e) {
            Log::error('Error exporting job applications: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while exporting job applications. Please try again.');
        }
    }
}