<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;
use App\Models\Programmes;

class DentalController extends Controller
{
    public function index()
    {
         $testimonials = Testimonials::where('cd_id', 3)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
        return view('university.colleges.dental.dental_home', compact('testimonials'));
    }
    
    public function dental_overview()
    {
        return view('university.colleges.dental.dental_overview');
    }

    public function dental_college_highlight()
    {
        return view('university.colleges.dental.dental_college_highlight');
    }

    public function dental_principal()
    {
        return view('university.colleges.dental.dental_principal');
    }

    public function dental_college_advisory_board()
    {
        return view('university.colleges.dental.dental_college_advisory_board');
    }

    public function dental_department()
    {
        return view('university.colleges.dental.dental_department');
    }

    public function dental_syllabus()
    {
           $programmes = Programmes::where('cd_id',3)->where('status','Y')->get();
        return view('university.colleges.dental.dental_syllabus',compact('programmes'));
    }

    public function dental_timetable()
    {
        return view('university.colleges.dental.dental_timetable');
    }

    public function dental_academic_calendar()
    {
        return view('university.colleges.dental.dental_academic_calendar');
    }

    public function dental_anti_ragging()
    {
        return view('university.colleges.dental.dental_anti_ragging');
    }

    public function dental_guest_lecture()
    {
        return view('university.colleges.dental.dental_guest_lecture');
    }

    public function dental_gallery()
    {
        return view('university.colleges.dental.dental_gallery');
    }

    public function dental_contact_us()
    {
        return view('university.colleges.dental.dental_contact_us');
    }

    public function dental_iqac()
    {
        return view('university.colleges.dental.dental_iqac');
    }

    public function dental_conservative_dentistry_endodontics()
    {
        return view('university.colleges.dental.dental_conservative_dentistry_endodontics');
    }

    public function dental_oral_maxillofacial_surgery()
    {
        return view('university.colleges.dental.dental_oral');
    }

    public function dental_orthodontics()
    {
        return view('university.colleges.dental.dental_orthodontics');
    }

    public function dental_Prosthodontics()
    {
        return view('university.colleges.dental.dental_Prosthodontics');
    }

    public function dental_paedodontics()
    {
        return view('university.colleges.dental.dental_paedodontics');
    }

    public function dental_periodontology()
    {
        return view('university.colleges.dental.dental_periodontology');
    }

    public function dental_public_health()
    {
        return view('university.colleges.dental.dental_public_health');
    }

    public function dental_oral_medicine()
    {
        return view('university.colleges.dental.dental_oral_medicine');
    }

    public function dental_oral_pathology()
    {
        return view('university.colleges.dental.dental_oral_pathology');
    }
}
