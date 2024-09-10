<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index()
    {
        return view('university.colleges.education.education_home');
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
        return view('university.colleges.education.education_syllabus');
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
