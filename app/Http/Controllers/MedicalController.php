<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Programmes;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class MedicalController extends Controller
{
    //

    
    public function index()
    {
          $testimonials = Testimonials::where('cd_id', 2)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
        return view('university.colleges.medical.medical_home',compact('testimonials'));
    }
    
    public function medical_guest_lecture()
    {
        $guest_lectures = News::where('cd_id', 2)
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






       
        return view('university.colleges.medical.medical_guest_lecture', compact('guest_lectures'));
    }


    public function medical_about_us()
    {
        return view('university.colleges.medical.medical_about_us');
    }

    public function medical_college_info()
    {
        return view('university.colleges.medical.medical_college_info');
    }

    public function medical_infra()
    {
        return view('university.colleges.medical.medical_infra');
    }

    public function medical_citizens()
    {
        return view('university.colleges.medical.medical_citizens');
    }

    public function medical_highlights()
    {
        return view('university.colleges.medical.medical_highlights');
    }

    public function medical_principal()
    {
        return view('university.colleges.medical.medical_principal');
    }

    public function medical_supritendent()
    {
        return view('university.colleges.medical.medical_supritendent');
    }

    public function medical_affliation()
    {
        return view('university.colleges.medical.medical_affliation');
    }

    public function medical_approvals()
    {
        return view('university.colleges.medical.medical_approvals');
    }

    public function medical_sanctioned_intake()
    {
        return view('university.colleges.medical.medical_sanctioned_intake');
    }

    public function medical_departements()
    {
        return view('university.colleges.medical.medical_departements');
    }

    public function medical_foundation()
    {
        return view('university.colleges.medical.medical_foundation');
    }

    public function medical_learning()
    {
        return view('university.colleges.medical.medical_learning');
    }

    public function medical_academic_calendar()
    {
        return view('university.colleges.medical.medical_academic_calendar');
    }

    public function medical_aebas_attendance()
    {
        return view('university.colleges.medical.medical_aebas_attendance');
    }

    public function medical_stipend()
    {
        return view('university.colleges.medical.medical_stipend');
    }
    public function medical_result()
    {
        return view('university.colleges.medical.medical_result');
    }

    public function medical_students_details()
    {
        return view('university.colleges.medical.medical_students_details');
    }

    public function medical_tecahing()
    {
        return view('university.colleges.medical.medical_tecahing');
    }

    public function medical_timetable()
    {
        return view('university.colleges.medical.medical_timetable');
    }

    public function medical_bestpractice()
    {
        return view('university.colleges.medical.medical_bestpractice');
    }

    public function medical_anti_ragg()
    {
        return view('university.colleges.medical.medical_anti_ragg');
    }

    public function medical_ghc()
    {
        return view('university.colleges.medical.medical_ghc');
    }

    public function medical_gallery()
    {
        return view('university.colleges.medical.medical_gallery');
    }

    public function medical_contactus()
    {
        return view('university.colleges.medical.medical_contactus');
    }
     public function medical_syllabus()
    {
        $programmes = Programmes::where('cd_id',2)->where('status','Y')->get();
        return view('university.colleges.medical.medical_syllabus',compact('programmes'));
    }
    public function medical_anatomy()
    {
        return view('university.colleges.medical.anatomy');
    }

    public function medical_physiology()
    {
        return view('university.colleges.medical.physiology');
    }

    public function medical_biochemistry()
    {
        return view('university.colleges.medical.biochemistry');
    }

    public function medical_pathology()
    {
        return view('university.colleges.medical.pathology');
    }

    public function medical_microbiology()
    {
        return view('university.colleges.medical.microbiology');
    }

    public function medical_pharmacology()
    {
        return view('university.colleges.medical.pharmacology');
    }

    public function medical_forensic_medicine()
    {
        return view('university.colleges.medical.forensic_medicine');
    }

    public function medical_community_medicine()
    {
        return view('university.colleges.medical.community_medicine');
    }

    public function medical_general_medicine()
    {
        return view('university.colleges.medical.general_medicine');
    }

    public function medical_pulmonary_medicine()
    {
        return view('university.colleges.medical.pulmonary_medicine');
    }

    public function medical_psychiatry()
    {
        return view('university.colleges.medical.psychiatry');
    }

    public function medical_dermatology()
    {
        return view('university.colleges.medical.dermatology');
    }

    public function medical_paediatrics()
    {
        return view('university.colleges.medical.paediatrics');
    }

    public function medical_anesthesiology()
    {
        return view('university.colleges.medical.anesthesiology');
    }

    public function medical_radiology()
    {
        return view('university.colleges.medical.radiology');
    }

    public function medical_general_surgery()
    {
        return view('university.colleges.medical.general_surgery');
    }

    public function medical_orthopaedics()
    {
        return view('university.colleges.medical.orthopaedics');
    }

    public function medical_ent()
    {
        return view('university.colleges.medical.ent');
    }

    public function medical_ophthalmology()
    {
        return view('university.colleges.medical.ophthalmology');
    }

    public function medical_obstetrics_gynaecology()
    {
        return view('university.colleges.medical.obstetrics_gynaecology');
    }

    public function medical_anatomy_infra() 
    {
        return view('university.colleges.medical.anatomy_infra');
    }

    public function medical_physiology_infra() 
    {
        return view('university.colleges.medical.physiology_infra');
    }

    public function medical_biochemistry_infra() 
    {
        return view('university.colleges.medical.biochemistry_infra');
    }

    public function medical_pathology_infra() 
    {
        return view('university.colleges.medical.pathology_infra');
    }

    public function medical_microbiology_infra() 
    {
        return view('university.colleges.medical.microbiology_infra');
    }

    public function medical_pharmacology_infra() 
    {
        return view('university.colleges.medical.pharmacology_infra');
    }

    public function medical_forensic_medicine_infra() 
    {
        return view('university.colleges.medical.forensic_medicine_infra');
    }

    public function medical_community_medicine_infra() 
    {
        return view('university.colleges.medical.community_medicine_infra');
    }

    public function medical_general_medicine_infra() 
    {
        return view('university.colleges.medical.general_medicine_infra');
    }

    public function medical_pulmonary_medicine_infra() 
    {
        return view('university.colleges.medical.pulmonary_medicine_infra');
    }

    public function medical_psychiatry_infra() 
    {
        return view('university.colleges.medical.psychiatry_infra');
    }

    public function medical_dermatology_infra() 
    {
        return view('university.colleges.medical.dermatology_infra');
    }

    public function medical_paediatrics_infra() 
    {
        return view('university.colleges.medical.paediatrics_infra');
    }

    public function medical_anesthesiology_infra() 
    {
        return view('university.colleges.medical.anesthesiology_infra');
    }

    public function medical_radiology_infra() 
    {
        return view('university.colleges.medical.radiology_infra');
    }

    public function medical_general_surgery_infra() 
    {
        return view('university.colleges.medical.general_surgery_infra');
    }

    public function medical_orthopaedics_infra() 
    {
        return view('university.colleges.medical.orthopaedics_infra');
    }

    public function medical_ent_infra() 
    {
        return view('university.colleges.medical.ent_infra');
    }

    public function medical_ophthalmology_infra() 
    {
        return view('university.colleges.medical.ophthalmology_infra');
    }

    public function medical_obstetrics_gynaecology_infra() 
    {
        return view('university.colleges.medical.obstetrics_gynaecology_infra');
    }
    public function medical_community_health_centers() 
    {
        return view('university.colleges.medical.medical_community_health_centers');
    }
    public function medical_primary_health_centers() 
    {
        return view('university.colleges.medical.medical_primary_health_centers');
    }
    public function medical_rural_health_centers() 
    {
        return view('university.colleges.medical.medical_rural_health_centers');
    }
    public function medical_urban_health_centers() 
    {
        return view('university.colleges.medical.medical_urban_health_centers');
    }

    public function medical_study_material()
    {
        ini_set('memory_limit', '-1');

        // Fetch data
        $prognamme = DB::table('study_material_prog_master')
            ->where('cd_code', 'TMMC')
            ->where('status', '1')
            ->orderBy('slno', 'ASC')
            ->get();

        $sm_sy = DB::table('sm_sem_year')->orderBy('id', 'ASC')->get();
        $coursestructure = DB::table('study_material')->orderBy('id', 'ASC')->get();


        return view('university.colleges.medical.medical_study_material', compact('prognamme', 'sm_sy', 'coursestructure'));
    }

}
