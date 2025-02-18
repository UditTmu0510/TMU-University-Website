<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiters;
use App\Models\Testimonials;
use App\Models\Programmes;

class PharmacyController extends Controller
{
    
    public function index()
    {
        
          $testimonials = Testimonials::where('cd_id', 5)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
          $recruiters = Recruiters::where('cd_id', 5)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();
        return view('university.colleges.pharmacy.pharmacy_home',compact('recruiters','testimonials'));
    }
    

    public function pharmacy_about_us()
    {
        return view('university.colleges.pharmacy.pharmacy_about_us');
    }

    public function pharmacy_college_highlights()
    {
        return view('university.colleges.pharmacy.pharmacy_college_highlights');
    }

    public function pharmacy_principal()
    {
        return view('university.colleges.pharmacy.pharmacy_principal');
    }

    public function pharmacy_infrastructure()
    {
        return view('university.colleges.pharmacy.pharmacy_infrastructure');
    }

    public function pharmacy_syllabus()
    {
            $programmes = Programmes::where('cd_id',5)->where('status','Y')->get();
        return view('university.colleges.pharmacy.pharmacy_syllabus',compact('programmes'));
    }


    public function pharmacy_academic_calendar()
    {
        return view('university.colleges.pharmacy.pharmacy_academic_calendar');
    }

    public function pharmacy_timetable()
    {
        return view('university.colleges.pharmacy.pharmacy_timetable');
    }

    public function pharmacy_anti_ragging()
    {
        return view('university.colleges.pharmacy.pharmacy_anti_ragging');
    }

    public function pharmacy_gallery()
    {
        return view('university.colleges.pharmacy.pharmacy_gallery');
    }

    public function pharmacy_contact_us()
    {
        return view('university.colleges.pharmacy.pharmacy_contact_us');
    }

    public function pharmacy_college_advisory_board()
    {
        return view('university.colleges.pharmacy.pharmacy_college_advisory_board');
    }

    public function pharmacy_iqac()
    {
        return view('university.colleges.pharmacy.pharmacy_iqac');
    }
}
