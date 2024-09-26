<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Programmes;
use App\Models\Recruiters;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class ParamedicalController extends Controller
{
    public function index()
    {
             $testimonials = Testimonials::where('cd_id', 6)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
                    $recruiters = Recruiters::where('cd_id', 6)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();
        return view('university.colleges.paramedical.paramedical_home',compact('testimonials','recruiters'));
    }
    
    public function paramedical_about_us()
    {
        return view('university.colleges.paramedical.paramedical_about_us');
    }

    public function paramedical_college_highlights()
    {
        return view('university.colleges.paramedical.paramedical_college_highlights');
    }

    public function paramedical_principal()
    {
        return view('university.colleges.paramedical.paramedical_principal');
    }

    public function paramedical_college_advisory_board()
    {
        return view('university.colleges.paramedical.paramedical_college_advisory_board');
    }

    public function paramedical_syllabus()
    {
            $programmes = Programmes::where('cd_id',6)->where('status','Y')->get();
        return view('university.colleges.paramedical.paramedical_syllabus',compact('programmes'));
    }

    public function paramedical_timetable()
    {
        return view('university.colleges.paramedical.paramedical_timetable');
    }

    public function paramedical_anti_ragging()
    {
        return view('university.colleges.paramedical.paramedical_anti_ragging');
    }

    public function paramedical_academic_calendar()
    {
        return view('university.colleges.paramedical.paramedical_academic_calendar');
    }

    public function paramedical_gallery()
    {
        return view('university.colleges.paramedical.paramedical_gallery');
    }

    public function paramedical_guest_lecture()
    {
        return view('university.colleges.paramedical.paramedical_guest_lecture');
    }

    public function paramedical_contact_us()
    {
        return view('university.colleges.paramedical.paramedical_contact_us');
    }

    public function paramedical_iqac()
    {
        return view('university.colleges.paramedical.paramedical_iqac');
    }

}
