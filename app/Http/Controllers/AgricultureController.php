<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Recruiters;
use App\Models\Programmes;
use App\Models\News;
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

        return view('university.colleges.agriculture.agriculture_home', compact('testimonials', 'recruiters'));
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
        $guest_lectures = News::where('cd_id', 16)
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
        return view('university.colleges.agriculture.agriculture_guest_lecture', compact('guest_lectures'));
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
        $programmes = Programmes::where('cd_id', 16)->where('status', 'Y')->get();
        return view('university.colleges.agriculture.agriculture_syllabus', compact('programmes'));
    }

    public function agriculture_timetable()
    {
        return view('university.colleges.agriculture.agriculture_timetable');
    }

    public function agriculture_study_material()
    {
        ini_set('memory_limit', '-1');

        // Fetch data
        $prognamme = DB::table('study_material_prog_master')
            ->where('cd_code', 'TMAG')
            ->where('status', '1')
            ->orderBy('slno', 'ASC')
            ->get();

        $sm_sy = DB::table('sm_sem_year')->orderBy('id', 'ASC')->get();
        $coursestructure = DB::table('study_material')->orderBy('id', 'ASC')->get();


        return view('university.colleges.agriculture.agriculture_study_material', compact('prognamme', 'sm_sy', 'coursestructure'));
    }

    public function agriculture_tpc()
    {
        return view('university.colleges.agriculture.agriculture_tpc');
    }
}
