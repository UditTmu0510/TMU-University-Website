<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Recruiters;
use App\Models\Programmes;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class AgricultureController extends Controller
{
    
    public function index()
    {
         $testimonials = Testimonials::where('cd_id', 16)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
  $recruiters = Recruiters::where('cd_id', 16)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();

        return view('university.colleges.agriculture.agriculture_home',compact('testimonials','recruiters'));
    }
    
    public function agriculture_academic_calendar()
    {
        return view('university.colleges.agriculture.agriculture_academic_calendar');
    }

    public function agriculture_anti_ragging()
    {
        return view('university.colleges.agriculture.agriculture_anti_ragging');
    }

    public function agriculture_cab()
    {
        return view('university.colleges.agriculture.agriculture_cab');
    }

    public function agriculture_choupal()
    {
        return view('university.colleges.agriculture.agriculture_choupal');
    }

    public function agriculture_college_highlight()
    {
        return view('university.colleges.agriculture.agriculture_college_highlight');
    }

    public function agriculture_contact_us()
    {
        return view('university.colleges.agriculture.agriculture_contact_us');
    }

    public function agriculture_dean()
    {
        return view('university.colleges.agriculture.agriculture_dean');
    }

    public function agriculture_gallery()
    {
        return view('university.colleges.agriculture.agriculture_gallery');
    }

    public function agriculture_guest_lecture()
    {
        return view('university.colleges.agriculture.agriculture_guest_lecture');
    }

    public function agriculture_iqac()
    {
        return view('university.colleges.agriculture.agriculture_iqac');
    }

    public function agriculture_orientation()
    {
        return view('university.colleges.agriculture.agriculture_orientation');
    }
    public function agriculture_overview()
    {
        return view('university.colleges.agriculture.agriculture_overview');
    }

    public function agriculture_placement_calendar()
    {
        return view('university.colleges.agriculture.agriculture_placement_calendar');
    }

    public function agriculture_placement_news()
    {
        return view('university.colleges.agriculture.agriculture_placement_news');
    }
    public function agriculture_syllabus()
    {
        $programmes = Programmes::where('cd_id',16)->where('status','Y')->get();
        return view('university.colleges.agriculture.agriculture_syllabus',compact('programmes'));
    }

    public function agriculture_timetable()
    {
        return view('university.colleges.agriculture.agriculture_timetable');
    }

    public function agriculture_tpc()
    {
        return view('university.colleges.agriculture.agriculture_tpc');
    }
}
