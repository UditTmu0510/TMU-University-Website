<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FineartsController extends Controller
{


    public function index()
    {
        return view('university.colleges.fine_arts.fine_arts_home');
    }

    public function fine_arts_academic_calendar()
    {
        return view('university.colleges.fine_arts.fine_arts_academic_calendar');
    }

    public function fine_arts_anti_ragging()
    {
        return view('university.colleges.fine_arts.fine_arts_anti_ragging');
    }
    public function fine_arts_highlights()
    {
        return view('university.colleges.fine_arts.fine_arts_highlights');
    }

    public function fine_arts_contact_us()
    {
        return view('university.colleges.fine_arts.fine_arts_contact_us');
    }
    
    public function fine_arts_hod()
    {
        return view('university.colleges.fine_arts.fine_arts_hod');
    }
    public function fine_arts_gallery()
    {
        return view('university.colleges.fine_arts.fine_arts_gallery');
    }

    public function fine_arts_iqac()
    {
        return view('university.colleges.fine_arts.fine_arts_iqac');
    }
    public function fine_arts_overview()
    {
        return view('university.colleges.fine_arts.fine_arts_overview');
    }

    public function fine_arts_syllabus()
    {
        return view('university.colleges.fine_arts.fine_arts_syllabus');
    }

    public function fine_arts_timetable()
    {
        return view('university.colleges.fine_arts.fine_arts_timetable');
    }
}
