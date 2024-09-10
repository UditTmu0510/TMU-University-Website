<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawController extends Controller
{

    
public function index()
{
    return view('university.colleges.law.law_home');
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
        return view('university.colleges.law.law_syllabus');
    }

    public function law_time_table()
    {
        return view('university.colleges.law.law_time_table');
    }
}
