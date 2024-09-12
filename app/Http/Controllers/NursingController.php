<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NursingController extends Controller
{
    
public function index()
{
    return view('university.colleges.nursing.nursing_home');
}

    
    public function nursing_academic_calednar()
    {
        return view('university.colleges.nursing.nursing_academic_calednar');
    }

    public function nursing_anti_ragging()
    {
        return view('university.colleges.nursing.nursing_anti_ragging');
    }

    public function nursing_college_advisory_board()
    {
        return view('university.colleges.nursing.nursing_college_advisory_board');
    }

    public function nursing_college_highlight()
    {
        return view('university.colleges.nursing.nursing_college_highlight');
    }

    public function nursing_community_health()
    {
        return view('university.colleges.nursing.nursing_community_health');
    }

    public function nursing_contact_us()
    {
        return view('university.colleges.nursing.nursing_contact_us');
    }

    public function nursing_corporate_advisory_board()
    {
        return view('university.colleges.nursing.nursing_corporate_advisory_board');
    }

    public function nursing_dean()
    {
        return view('university.colleges.nursing.nursing_dean');
    }

    public function nursing_department()
    {
        return view('university.colleges.nursing.nursing_department');
    }

    public function nursing_fundamentals()
    {
        return view('university.colleges.nursing.nursing_fundamentals');
    }

    public function nursing_gallery()
    {
        return view('university.colleges.nursing.nursing_gallery');
    }

    public function nursing_guest_lecture()
    {
        return view('university.colleges.nursing.nursing_guest_lecture');
    }

    public function nursing_gynaeo()
    {
        return view('university.colleges.nursing.nursing_gynaeo');
    }

    public function nursing_iqac()
    {
        return view('university.colleges.nursing.nursing_iqac');
    }
    
    public function nursing_medical_surgical()
    {
        return view('university.colleges.nursing.nursing_medical_surgical');
    }

    public function nursing_overview()
    {
        return view('university.colleges.nursing.nursing_overview');
    }

    public function nursing_paediatric()
    {
        return view('university.colleges.nursing.nursing_paediatric');
    }

    public function nursing_placement_calendar()
    {
        return view('university.colleges.nursing.nursing_placement_calendar');
    }

    public function nursing_placement_news()
    {
        return view('university.colleges.nursing.nursing_placement_news');
    }

    public function nursing_principal()
    {
        return view('university.colleges.nursing.nursing_principal');
    }

    public function nursing_psychiatric()
    {
        return view('university.colleges.nursing.nursing_psychiatric');
    }

    public function nursing_syllabus()
    {
        return view('university.colleges.nursing.nursing_syllabus');
    }

    public function nursing_timetable()
    {
        return view('university.colleges.nursing.nursing_timetable');
    }

    public function nursing_tpc()
    {
        return view('university.colleges.nursing.nursing_tpc');
    }

    public function nursing_viceprincipal()
    {
        return view('university.colleges.nursing.nursing_viceprincipal');
    }


}
