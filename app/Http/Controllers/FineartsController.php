<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Recruiters;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;
use App\Models\Programmes;


class FineartsController extends Controller
{


    public function index()
    {
              $testimonials = Testimonials::where('cd_id', 14)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
            
                 $recruiters = Recruiters::where('cd_id', 14)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();
        return view('university.colleges.fine_arts.fine_arts_home', compact('testimonials','recruiters'));
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
           $programmes = Programmes::where('cd_id',14)->where('status','Y')->get();
        return view('university.colleges.fine_arts.fine_arts_syllabus',compact('programmes'));
    }

    public function fine_arts_timetable()
    {
        return view('university.colleges.fine_arts.fine_arts_timetable');
    }
}
