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
            ->orderBy('id', 'DESC')
            ->get();
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

    public function ijih_aboutus()
    {
        return view('university.colleges.nursing.ijih_about_us');
    }

    public function ijih_edi_board()
    {
        return view('university.colleges.nursing.ijih_edi_board');
    }

    public function ijih_guide_ethics()
    {
        return view('university.colleges.nursing.ijih_guide_ethics');
    }

    public function ijih_submission_process()
    {
        return view('university.colleges.nursing.ijih_submission_process');
    }

    public function ijih_archives()
    {
        return view('university.colleges.nursing.ijih_archives');
    }

    public function ijih_current_issue()
    {
        return view('university.colleges.nursing.ijih_current_issue');
    }

    public function ijih_manuscript_submission()
    {
        return view('university.colleges.nursing.ijih_manuscript_submission');
    }


    public function nursing_study_material()
    {
        ini_set('memory_limit', '-1');

        // Fetch data
        $prognamme = DB::table('study_material_prog_master')
            ->where('cd_code', 'TMNS')
            ->where('status', '1')
            ->orderBy('slno', 'ASC')
            ->get();

        $sm_sy = DB::table('sm_sem_year')->orderBy('id', 'ASC')->get();
        $coursestructure = DB::table('study_material')->orderBy('id', 'ASC')->get();


        return view('university.colleges.nursing.nursing_study_material', compact('prognamme', 'sm_sy', 'coursestructure'));
    }

}
