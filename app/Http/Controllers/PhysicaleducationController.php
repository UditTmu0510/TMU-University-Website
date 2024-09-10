<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysicaleducationController extends Controller
{

    public function index()
    {
        return view('university.colleges.physical_education.physical_education_home');
    }
    
public function physical_education_about_us()
{
    return view('university.colleges.physical_education.physical_education_about_us');
}

public function physical_education_academic_calendar()
{
    return view('university.colleges.physical_education.physical_education_academic_calendar');
}
public function physical_education_anti_ragging()
{
    return view('university.colleges.physical_education.physical_education_anti_ragging');
}

public function physical_education_college_highlight()
{
    return view('university.colleges.physical_education.physical_education_college_highlight');
}

public function physical_education_contact_us()
{
    return view('university.colleges.physical_education.physical_education_contact_us');
}

public function physical_education_gallery()
{
    return view('university.colleges.physical_education.physical_education_gallery');
}

public function physical_education_guest_lecture()
{
    return view('university.colleges.physical_education.physical_education_guest_lecture');
}

public function physical_education_iqac()
{
    return view('university.colleges.physical_education.physical_education_iqac');
}

public function physical_education_syllabus()
{
    return view('university.colleges.physical_education.physical_education_syllabus');
}

public function physical_education_principal()
{
    return view('university.colleges.physical_education.physical_education_principal');
}

public function physical_education_timetable()
{
    return view('university.colleges.physical_education.physical_education_timetable');
}



}
