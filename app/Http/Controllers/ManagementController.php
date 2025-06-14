<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Programmes;
use App\Models\News;
use App\Models\Recruiters;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class ManagementController extends Controller
{
    
    
    public function index()
    {
         $testimonials = Testimonials::where('cd_id', 8)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
          $recruiters = Recruiters::where('cd_id', 8)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();

        return view('university.colleges.management.tmimt_college_of_management',compact('testimonials','recruiters'));
    }
    public function mgmt_overview()
    {
        return view('university.colleges.management.mgmt_overview');
    }

    public function mgmt_highlight()
    {
        return view('university.colleges.management.mgmt_highlight');
    }

    public function mgmt_principal()
    {
        return view('university.colleges.management.mgmt_principal');
    }

    public function mgmt_academic_calendar()
    {
        return view('university.colleges.management.mgmt_academic_calendar');
    }

    public function training_placements_cell()
    {
        return view('university.colleges.management.mgmt_tpc');
    }

    public function corporate_advisory_board()
    {
        return view('university.colleges.management.mgmt_ca_board');
    }

    public function mgmt_placement_calendar()
    {
        return view('university.colleges.management.mgmt_placement_calendar');
    }

    public function mgmt_placement_brochure()
    {
        return view('university.colleges.management.mgmt_placement_brochure');
    }

    public function mgmt_news()
    {
        return view('university.colleges.management.mgmt_news');
    }

    public function mgmt_timetable()
    {
        return view('university.colleges.management.mgmt_timetable');
    }

    public function mgmt_anti_ragging()
    {
        return view('university.colleges.management.mgmt_anti_ragging');
    }

    public function mgmt_scst_committee()
    {
        return view('university.colleges.management.mgmt_scst_committee');
    }

    public function mgmt_icc_committee()
    {
        return view('university.colleges.management.mgmt_icc_committee');
    }
    public function mgmt_iqac()
    {
        return view('university.colleges.management.mgmt_iqac');
    }

    public function mgmt_guestlecture()
    {
        $guest_lectures = News::where('cd_id', 8)
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
            $lecture->formatted_date = "{$day} {$month} {$year}";
        }

        return view('university.colleges.management.mgmt_guestlecture',compact('guest_lectures'));
    }

    public function mgmt_contactus()
    {
        return view('university.colleges.management.mgmt_contactus');
    }

    public function mgmt_magazine()
    {
        return view('university.colleges.management.mgmt_magazine');
    }
    public function mgmt_gallery()
    {
        return view('university.colleges.management.mgmt_gallery');
    }
    
         public function mgmt_syllabus()
    {
        $programmes = Programmes::where('cd_id',8)->where('status','Y')->get();
        return view('university.colleges.management.mgmt_syllabus',compact('programmes'));
    }


    public function mgmt_study_material()
    {
        ini_set('memory_limit', '-1');

        // Fetch data
        $prognamme = DB::table('study_material_prog_master')
            ->where('cd_code', 'TMMG')
            ->where('status', '1')
            ->orderBy('slno', 'ASC')
            ->get();

        $sm_sy = DB::table('sm_sem_year')->orderBy('id', 'ASC')->get();
        $coursestructure = DB::table('study_material')->orderBy('id', 'ASC')->get();


        return view('university.colleges.management.mgmt_study_material', compact('prognamme', 'sm_sy', 'coursestructure'));
    }
    
    
}
