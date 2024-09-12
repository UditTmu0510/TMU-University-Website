<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CcsitController extends Controller
{
    //

    
    public function index()
    {
        return view('university.colleges.ccsit.ccsit');
    }

    public function ccsit_overview()
    {
        return view('university.colleges.ccsit.ccsit_overview');
    }
    
    public function ccsit_highlights()
    {
        return view('university.colleges.ccsit.ccsit_highlights');
    }
    
    public function ccsit_principal()
    {
        return view('university.colleges.ccsit.ccsit_principal');
    }
    
    public function ccsit_gallery()
    {
        return view('university.colleges.ccsit.ccsit_gallery');
    }
    
    public function ccsit_academic_calendar()
    {
        return view('university.colleges.ccsit.ccsit_academic_calendar');
    }
    
    public function ccsit_corporate_advisory()
    {
        return view('university.colleges.ccsit.ccsit_corporate_advisory');
    }
    
    public function ccsit_placement_calendar()
    {
        return view('university.colleges.ccsit.ccsit_placement_calendar');
    }
    
    public function ccsit_placement_brochure()
    {
        return view('university.colleges.ccsit.ccsit_placement_brochure');
    }
    
    public function ccsit_placement_news()
    {
        return view('university.colleges.ccsit.ccsit_placement_news');
    }
    
    public function ccsit_project_guidelines()
    {
        return view('university.colleges.ccsit.ccsit_project_guidelines');
    }
    
    public function ccsit_project_templates()
    {
        return view('university.colleges.ccsit.ccsit_project_templates');
    }
    
    public function ccsit_timetable()
    {
        return view('university.colleges.ccsit.ccsit_timetable');
    }
    
    public function ccsit_anti_ragging()
    {
        return view('university.colleges.ccsit.ccsit_anti_ragging');
    }
    
    public function ccsit_karyashala()
    {
        return view('university.colleges.ccsit.ccsit_karyashala');
    }
    
    public function ccsit_event_magazine()
    {
        return view('university.colleges.ccsit.ccsit_event_magazine');
    }
    
    public function ccsit_guest_lecture()
    {
        return view('university.colleges.ccsit.ccsit_guest_lecture');
    }
    
    public function ccsit_contact_us()
    {
        return view('university.colleges.ccsit.ccsit_contact_us');
    }
    
    public function ccsit_syllabus()
    {
        return view('university.colleges.ccsit.ccsit_syllabus');
    }

}
