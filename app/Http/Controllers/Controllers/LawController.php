<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Recruiters;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;
use App\Models\Programmes;


class LawController extends Controller
{

    
public function index()
{
    $testimonials = Testimonials::where('cd_id', 9)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
         $recruiters = Recruiters::where('cd_id', 9)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();
    return view('university.colleges.law.law_home',compact('testimonials','recruiters'));
}


    public function law_academic_calendar()
    {
        return view('university.colleges.law.law_academic_calendar');
    }

    public function law_anti_ragging()
    {
        return view('university.colleges.law.law_anti_ragging');
    }
    public function law_college_highlight()
    {
        return view('university.colleges.law.law_college_highlight');
    }

    public function law_contact_us()
    {
        return view('university.colleges.law.law_contact_us');
    }
    public function law_crills()
    {
        return view('university.colleges.law.law_crills');
    }

    public function law_dean()
    {
        return view('university.colleges.law.law_dean');
    }
    public function law_gallery()
    {
        return view('university.colleges.law.law_gallery');
    }

    public function law_iqac()
    {
        return view('university.colleges.law.law_iqac');
    }
    public function law_overview()
    {
        return view('university.colleges.law.law_overview');
    }

    public function law_principal()
    {
        return view('university.colleges.law.law_principal');
    }
    public function law_syllabus()
    {
            $programmes = Programmes::where('cd_id',9)->where('status','Y')->get();
        return view('university.colleges.law.law_syllabus',compact('programmes'));
    }

    public function law_time_table()
    {
        return view('university.colleges.law.law_time_table');
    }
}
