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

class EducationController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonials::where('cd_id',15)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
           $recruiters = Recruiters::where('cd_id', 15)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();

        return view('university.colleges.education.education_home',compact('testimonials','recruiters'));
    }
    
    public function education_principal()
    {
        return view('university.colleges.education.education_principal');
    }

    public function education_college_highlight()
    {
        return view('university.colleges.education.education_college_highlight');
    }

    public function education_syllabus()
    {
           $programmes = Programmes::where('cd_id',15)->where('status','Y')->get();
        return view('university.colleges.education.education_syllabus',compact('programmes'));
    }

    public function education_academic_calendar()
    {
        return view('university.colleges.education.education_academic_calendar');
    }

    public function education_timetable()
    {
        return view('university.colleges.education.education_timetable');
    }

    public function education_anti_ragging()
    {
        return view('university.colleges.education.education_anti_ragging');
    }

  public function education_guest_lecture()
    {
        $guest_lectures = News::where('cd_id', 15)
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
        return view('university.colleges.education.education_guest_lecture', compact('guest_lectures'));
    }


    public function education_gallery()
    {
        return view('university.colleges.education.education_gallery');
    }

    public function education_contact_us()
    {
        return view('university.colleges.education.education_contact_us');
    }

    public function education_iqac()
    {
        return view('university.colleges.education.education_iqac');
    }
    
    public function computer_infra()
    {
        return view('university.colleges.education.computer_infra');
    }

    // Study Material 
    public function education_study_material()
    {
        ini_set('memory_limit', '-1');

        // Fetch data
        $prognamme = DB::table('study_material_prog_master')
            ->where('cd_code', 'TMED')
            ->where('status', '1')
            ->orderBy('slno', 'ASC')
            ->get();

        $sm_sy = DB::table('sm_sem_year')->orderBy('id', 'ASC')->get();
        $coursestructure = DB::table('study_material')->orderBy('id', 'ASC')->get();


        return view('university.colleges.education.education_study_material', compact('prognamme', 'sm_sy', 'coursestructure'));
    }
}
