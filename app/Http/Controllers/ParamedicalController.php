<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamedicalController extends Controller
{
    public function index()
    {
        return view('university.colleges.paramedical.paramedical_home');
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
        return view('university.colleges.paramedical.paramedical_syllabus');
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
