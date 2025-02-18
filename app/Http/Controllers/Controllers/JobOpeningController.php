<?php

namespace App\Http\Controllers;
use app\Models\JobOpening;

use Illuminate\Http\Request;

class JobOpeningController extends Controller
{
    public function showJobOpenings()
{
    // Fetch academic and administrative job openings separately
    $academicJobs = JobOpening::where('type', 'academic')->get();
    $adminJobs = JobOpening::where('type', 'administration')->get();

    // Pass data to the view
    return view('university.university_glimpse.careers_form', compact('academicJobs', 'adminJobs'));
}
}
