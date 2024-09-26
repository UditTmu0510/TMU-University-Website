<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Recruiters;
use App\Models\Programmes;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class EducationController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonials::where('cd_id',15)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
           $recruiters = Recruiters::where('cd_id', 15)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();

        return view('university.colleges.education.education_home',compact('testimonials','recruiters'));
    }
    
    public function education_principal()
    {
        return view('university.colleges.education.education_principal');
    }

    public function education_college_highlight()
    {
        return view('university.colleges.education.education_college_highlight');
    }

    public function education_syllabus()
    {
           $programmes = Programmes::where('cd_id',15)->where('status','Y')->get();
        return view('university.colleges.education.education_syllabus',compact('programmes'));
    }

    public function education_academic_calendar()
    {
        return view('university.colleges.education.education_academic_calendar');
    }

    public function education_timetable()
    {
        return view('university.colleges.education.education_timetable');
    }

    public function education_anti_ragging()
    {
        return view('university.colleges.education.education_anti_ragging');
    }

    public function education_guest_lecture()
    {
        return view('university.colleges.education.education_guest_lecture');
    }

    public function education_gallery()
    {
        return view('university.colleges.education.education_gallery');
    }

    public function education_contact_us()
    {
        return view('university.colleges.education.education_contact_us');
    }

    public function education_iqac()
    {
        return view('university.colleges.education.education_iqac');
    }
}
