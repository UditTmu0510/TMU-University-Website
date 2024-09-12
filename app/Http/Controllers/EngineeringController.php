<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EngineeringController extends Controller
{
    
    public function index()
    {
        return view('university.colleges.engineering.faculty_of_engineering');
    }

   
    public function engineering_about_us()
    {
        return view('university.colleges.engineering.engineering_overview');
    }

    public function engineering_highlights()
    {
        return view('university.colleges.engineering.engineering_highlights');
    }

    public function engineering_principal()
    {
        return view('university.colleges.engineering.engineering_principal');
    }

    public function engineering_academic_calednar()
    {
        return view('university.colleges.engineering.engineering_academic_calednar');
    }

    public function engineering_nba()
    {
        return view('university.colleges.engineering.engineering_nba');
    }

    public function engineering_corporate_advisory_board()
    {
        return view('university.colleges.engineering.engineering_corporate_board');
    }

    public function engineering_placement_calendar()
    {
        return view('university.colleges.engineering.engineering_placement_calendar');
    }

    public function engineering_placement_brochure()
    {
        return view('university.colleges.engineering.engineering_placement_brochure');
    }

    public function engineering_placement_news()
    {
        return view('university.colleges.engineering.engineering_placement_news');
    }

    public function engineering_project_guidelines()
    {
        return view('university.colleges.engineering.engineering_project_guidelines');
    }

    public function engineering_project_template()
    {
        return view('university.colleges.engineering.engineering_project_template');
    }

    public function engineering_timetable()
    {
        return view('university.colleges.engineering.engineering_timetable');
    }

    public function engineering_anti_ragging()
    {
        return view('university.colleges.engineering.engineering_anti_ragging');
    }

    public function engineering_financial_statement()
    {
        return view('university.colleges.engineering.engineering_financial_statement');
    }

    public function engineering_contact_us()
    {
        return view('university.colleges.engineering.engineering_contact_us');
    }

    public function engineering_gallery()
    {
        return view('university.colleges.engineering.engineering_gallery');
    }

    public function engineering_iqac()
    {
        return view('university.colleges.engineering.engineering_iqac');
    }

    public function engineering_syllabus()
    {
        return view('university.colleges.engineering.engineering_syllabus');
    }
}
