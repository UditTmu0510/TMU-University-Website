<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiters;
use App\Models\Testimonials;
use App\Models\Programmes;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NursingController extends Controller
{
    
public function index()
{
    
         $testimonials = Testimonials::where('cd_id', 4)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
      $recruiters = Recruiters::where('cd_id', 4)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();
    return view('university.colleges.nursing.nursing_home',compact('recruiters','testimonials'));
}

    
    public function nursing_academic_calednar()
    {
        return view('university.colleges.nursing.nursing_academic_calednar');
    }

    public function nursing_anti_ragging()
    {
        return view('university.colleges.nursing.nursing_anti_ragging');
    }

    public function nursing_college_advisory_board()
    {
        return view('university.colleges.nursing.nursing_college_advisory_board');
    }

    public function nursing_college_highlight()
    {
        return view('university.colleges.nursing.nursing_college_highlight');
    }

    public function nursing_community_health()
    {
        return view('university.colleges.nursing.nursing_community_health');
    }

    public function nursing_contact_us()
    {
        return view('university.colleges.nursing.nursing_contact_us');
    }

    public function nursing_corporate_advisory_board()
    {
        return view('university.colleges.nursing.nursing_corporate_advisory_board');
    }

    public function nursing_dean()
    {
        return view('university.colleges.nursing.nursing_dean');
    }

    public function nursing_department()
    {
        return view('university.colleges.nursing.nursing_department');
    }

    public function nursing_fundamentals()
    {
        return view('university.colleges.nursing.nursing_fundamentals');
    }

    public function nursing_gallery()
    {
        return view('university.colleges.nursing.nursing_gallery');
    }

   public function nursing_guest_lecture()
    {


        $guest_lectures = News::where('cd_id', 4)
            ->where('status', '1')
            ->where('category', 'Guest-Lecture')
            ->orderBy(DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"), 'DESC')
            ->orderBy('id', 'DESC')
            ->get();


        // Function to get ordinal suffix for the day (1st, 2nd, 3rd, etc.)
        function getOrdinalSuffix($day)
        {
            if (!in_array(($day % 100), array(11, 12, 13))) {
                switch ($day % 10) {
                    case 1:
                        return $day . 'st';
                    case 2:
                        return $day . 'nd';
                    case 3:
                        return $day . 'rd';
                }
            }
            return $day . 'th';
        }


        // Loop through guest lectures and add formatted date
        foreach ($guest_lectures as $lecture) {
            // Format the event date
            $day = getOrdinalSuffix($lecture->event_day);
            $month = $lecture->event_month_name;
            $year = $lecture->event_year;


            // Add formatted date to each lecture object
            $lecture->formatted_date = "{$day} {$month} , {$year}";
        }






        return view('university.colleges.nursing.nursing_guest_lecture', compact('guest_lectures'));
    }


    public function nursing_gynaeo()
    {
        return view('university.colleges.nursing.nursing_gynaeo');
    }

    public function nursing_iqac()
    {
        return view('university.colleges.nursing.nursing_iqac');
    }
    
    public function nursing_medical_surgical()
    {
        return view('university.colleges.nursing.nursing_medical_surgical');
    }

    public function nursing_overview()
    {
        return view('university.colleges.nursing.nursing_overview');
    }

    public function nursing_paediatric()
    {
        return view('university.colleges.nursing.nursing_paediatric');
    }

    public function nursing_placement_calendar()
    {
        return view('university.colleges.nursing.nursing_placement_calendar');
    }

    public function nursing_placement_news()
    {
        return view('university.colleges.nursing.nursing_placement_news');
    }

    public function nursing_principal()
    {
        return view('university.colleges.nursing.nursing_principal');
    }

    public function nursing_psychiatric()
    {
        return view('university.colleges.nursing.nursing_psychiatric');
    }

    public function nursing_syllabus()
    {
        $programmes = Programmes::where('cd_id',4)->where('status','Y')->get();
        return view('university.colleges.nursing.nursing_syllabus',compact('programmes'));
    }

    public function nursing_timetable()
    {
        return view('university.colleges.nursing.nursing_timetable');
    }

    public function nursing_tpc()
    {
        return view('university.colleges.nursing.nursing_tpc');
    }

    public function nursing_viceprincipal()
    {
        return view('university.colleges.nursing.nursing_viceprincipal');
    }


}
