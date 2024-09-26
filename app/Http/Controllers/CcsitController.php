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

class CcsitController extends Controller
{
    //

    
    public function index()
    {
            $testimonials = Testimonials::where('cd_id', 10)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
            
              $recruiters = Recruiters::where('cd_id', 10)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();

        return view('university.colleges.ccsit.ccsit',compact('testimonials','recruiters'));
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
         $programmes = Programmes::where('cd_id',10)->where('status','Y')->get();
        return view('university.colleges.ccsit.ccsit_syllabus',compact('programmes'));
    }

}
