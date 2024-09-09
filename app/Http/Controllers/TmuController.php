<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colleges;
use App\Models\News;
use App\Models\Programmes;
use App\Models\Faqs;
use App\Models\ProgrameeFee;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;


class TmuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $colleges = Colleges::where('for_programmes', 'Y')
            ->where('status', 1)
            ->orderBy('short_name', 'ASC')
            ->withCount('programmes') // This will add a count of related programmes
            ->get();

        $news = News::where('status', 1)
            ->where('display_main', 'Y')
            ->whereNotNull('monaco_image_path')
            ->where('monaco_image_path', '!=', '')
            ->select('event_title', 'event_description', 'event_date', 'ti_path', 'n_slug', 'monaco_image_path')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();



        return view('university.home', compact('colleges', 'news'));
    }

    public function news_info()
    {

        return view('university.news.news_info');
    }




    public function fetch_programmes(Request $request)
    {
        $cd_id = $request->cd_id;
        // Search for the records with the given cd_id
        $programs = Programmes::where('cd_id', $cd_id)
            ->where('status', 'Y')->get();

        // Check if any records are found
        if ($programs->isEmpty()) {
            return response()->json(['error' => 'No records found for the given cd_id'], 404);
        }

        // Return the JSON response
        return response()->json(['programs' => $programs]);
    }



    public function programme($slug)
    {

        $programme = Programmes::where('page_slug', $slug)->firstOrFail();
        $prog_id = $programme->prog_id;
        $fee_details = ProgrameeFee::where('prog_id', $prog_id)->get();
        $faqs = Faqs::where('programme_id', $prog_id)->where('display_programme_page', 'Y')->where('status', 'Y')->get();
        return view('university.programme.programme_info_new', compact('programme', 'fee_details', 'faqs'));
    }


    // // Sarvagya Controller Starts Here 


    // public function about_us()
    // {
    //     return view('university.university_glimpse.about_us');
    // }

    // public function vision_and_mission()
    // {
    //     return view('university.university_glimpse.tmu_vision_mission');
    // }


    // public function statutory_approvals()
    // {
    //     return view('university.university_glimpse.statutory_approvals');
    // }

    // public function awards_and_recognition()
    // {
    //     return view('university.university_glimpse.awards_&_recognition');
    // }

    // public function university_governance()
    // {
    //     return view('university.university_glimpse.tmu_governance');
    // }

    // public function university_organogram()
    // {
    //     return view('university.university_glimpse.tmu_organogram');
    // }

    // public function university_administration()
    // {
    //     return view('university.university_glimpse.administration');
    // }

    // public function chancellor_desk()
    // {
    //     return view('university.university_glimpse.chancellor_desk');
    // }

    // public function founder_vice_chancellor_desk()
    // {
    //     return view('university.university_glimpse.founder_vice_chancellor_desk');
    // }

    // public function vice_chancellor_desk()
    // {
    //     return view('university.university_glimpse.vice_chancellor_desk');
    // }

    // //IIC

    // public function iic_home()
    // {
    //     return view('university.iic.iic');
    // }

    // public function iic_about_cell()
    // {
    //     return view('university.iic.iic_about_cell');
    // }

    // public function iic_policy()
    // {
    //     return view('university.iic.iic_policy');
    // }

    // // public function iic_research_policy()
    // // {
    // //     return view('university.iic.iic_research_policy');
    // // }

    // public function iic_committee()
    // {
    //     return view('university.iic.iic_committee');
    // }

    // public function iic_activities_calendar()
    // {
    //     return view('university.iic.iic_activities_calendar');
    // }

    // public function iic_establishment_certificate()
    // {
    //     return view('university.iic.iic_establishment_certificate');
    // }

    // public function iic_innovation_ambassador_training_series()
    // {
    //     return view('university.iic.iic_innovation_ambassador_training_series');
    // }

    // public function iic_campaign_participation()
    // {
    //     return view('university.iic.iic_campaign_participation');
    // }

    // public function iic_achievements()
    // {
    //     return view('university.iic.iic_achievements');
    // }

    // public function iic_activities()
    // {
    //     return view('university.iic.iic_activities');
    // }

    // public function iic_successful_startup_story()
    // {
    //     return view('university.iic.iic_successful_startup_story');
    // }

    // public function iic_contact()
    // {
    //     return view('university.iic.iic_contact');
    // }

    // // NSS

    // public function nss_about()
    // {
    //     return view('university.nss.nss_about');
    // }

    // public function nss_aims()
    // {
    //     return view('university.nss.nss_aims');
    // }

    // public function nss_badge()
    // {
    //     return view('university.nss.nss_badge');
    // }

    // public function nss_day_and_song()
    // {
    //     return view('university.nss.nss_day&song');
    // }

    // public function nss_activities()
    // {
    //     return view('university.nss.nss_activities');
    // }

    // public function nss_volunteers()
    // {
    //     return view('university.nss.nss_volunteers');
    // }

    // public function nss_internationalday()
    // {
    //     return view('university.nss.nss_internationalday');
    // }

    // public function nss_events()
    // {
    //     return view('university.nss.nss_events');
    // }

    // public function nss_contactus()
    // {
    //     return view('university.nss.nss_contactus');
    // }

    // // NEP

    // public function nep_guidelines()
    // {
    //     return view('university.nep.nep_guidelines');
    // }

    // public function nep_immplement_committee()
    // {
    //     return view('university.nep.nep_immplement_committee');
    // }

    // public function nep_coordinator()
    // {
    //     return view('university.nep.nep_coordinator');
    // }

    // public function nep_academic_bank()
    // {
    //     return view('university.nep.nep_academic_bank');
    // }

    // public function nep_disciplines_list()
    // {
    //     return view('university.nep.nep_disciplines_list');
    // }

    // public function nep_courses()
    // {
    //     return view('university.nep.nep_courses');
    // }

    // public function nep_course_list()
    // {
    //     return view('university.nep.nep_course_list');
    // }

    // public function nep_document()
    // {
    //     return view('university.nep.nep_document');
    // }

    // public function nep_minor_list()
    // {
    //     return view('university.nep.nep_minor_list');
    // }

    // public function nep_fyup_salient()
    // {
    //     return view('university.nep.nep_fyup_salient');
    // }

    // // CTLD

    // public function ctld_about()
    // {
    //     return view('university.ctld.about_ctld');
    // }

    // public function ctld_aims_and_objectives()
    // {
    //     return view('university.ctld.aims_and_objectives_ctld');
    // }

    // public function ctld_director_desk()
    // {
    //     return view('university.ctld.ctld_director');
    // }

    // public function ctld_team()
    // {
    //     return view('university.ctld.ctld_team');
    // }

    // public function ctld_students_testimonials()
    // {
    //     return view('university.ctld.students_testimonials_ctld');
    // }

    // public function ctld_events()
    // {
    //     return view('university.ctld.ctld_events');
    // }

    // public function ctld_magazine()
    // {
    //     return view('university.ctld.ctld_magazine');
    // }

    // // IQAC

    // public function iqac_about()
    // {
    //     return view('university.iqac.iqac');
    // }

    // public function iqac_quality_policy()
    // {
    //     return view('university.iqac.iqac_quality_policy');
    // }

    // public function iqac_composition()
    // {
    //     return view('university.iqac.iqac_composition');
    // }

    // public function iqac_mom_and_action_taken_reports()
    // {
    //     return view('university.iqac.mom&atr');
    // }

    // public function aqar_report()
    // {
    //     return view('university.iqac.aqar_report');
    // }

    // public function sss_report()
    // {
    //     return view('university.iqac.sss_report');
    // }

    // public function annual_report()
    // {
    //     return view('university.iqac.annual_report');
    // }

    // public function iqac_awards()
    // {
    //     return view('university.iqac.iqac_awards');
    // }

    // public function iqac_strategic_plan()
    // {
    //     return view('university.iqac.iqac_stratergic_plan');
    // }

    // public function iqac_best_practices()
    // {
    //     return view('university.iqac.iqac_best_practice');
    // }

    // public function iqac_academic_calendar()
    // {
    //     return view('university.iqac.iqac_academic_calendar');
    // }

    // public function iqac_student_feedback()
    // {
    //     return view('university.iqac.student_feedback');
    // }

    // public function iqac_policies_and_sops()
    // {
    //     return view('university.iqac.iqac_policies');
    // }

    // public function iqac_contact_us()
    // {
    //     return view('university.iqac.iqac_contactus');
    // }


    // // NAAC

    // public function naac_home()
    // {
    //     return view('university.naac.naac');
    // }

    // public function naac_cycle_i()
    // {
    //     return view('university.naac.naac_i');
    // }

    // // NIRF

    // public function nirf_home()
    // {
    //     return view('university.nirf.nirf');
    // }


    // // IQAC ERP


    // public function iqac_erp_about()
    // {
    //     return view('university.iqac.iqac_erp');
    // }

    // public function iqac_erp_screenshot()
    // {
    //     return view('university.iqac.iqac_erp_screenshot');
    // }

    // public function iqac_erp_policy()
    // {
    //     return view('university.iqac.iqac_erp_policy');
    // }

    // public function iqac_erp_license()
    // {
    //     return view('university.iqac.iqac_erp_license');
    // }




    // // Institutional Values

    // public function gender_equity_initiative()
    // {
    //     return view('university.iqac.iqac_genderequityinitate');
    // }

    // public function environmental_consciousness_and_sustainability()
    // {
    //     return view('university.iqac.iqac_enniviron_conciousness');
    // }

    // public function waste_management_initiative()
    // {
    //     return view('university.iqac.iqac_waste_mgmt_initiative');
    // }

    // public function iqac_water_conservate_initiative()
    // {
    //     return view('university.iqac.iqac_water_conservate_initiative');
    // }

    // public function green_initiative()
    // {
    //     return view('university.iqac.iqac_green_initiative');
    // }

    // public function environment_and_energy_audits()
    // {
    //     return view('university.iqac.iqac_audits');
    // }

    // public function pwd_facilities()
    // {
    //     return view('university.iqac.iqac_pwd');
    // }

    // public function inclusive_environmnet_activities()
    // {
    //     return view('university.iqac.iqac_situatedness');
    // }

    // public function professional_ethics()
    // {
    //     return view('university.iqac.iqac_professional_ethics');
    // }

    // public function code_of_conduct()
    // {
    //     return view('university.iqac.iqac_co_conduct');
    // }

    // public function commemorative_days()
    // {
    //     return view('university.iqac.iqac_comemorative');
    // }


    // // QUICK_LINKS

    // public function disciplinary_rules()
    // {
    //     return view('university.quick_links.disciplinary_rules');
    // }

    // public function university_sports_calendar()
    // {
    //     return view('university.quick_links.university_sports_calendar');
    // }

    // public function university_academic_calendar()
    // {
    //     return view('university.quick_links.university_academic_calendar');
    // }

    // public function university_anti_ragging_committee()
    // {
    //     return view('university.quick_links.university_anti_ragging_committee');
    // }

    // public function greviances_about()
    // {
    //     return view('university.quick_links.greviances');
    // }

    // public function greviance_submit_suggestion()
    // {
    //     return view('university.quick_links.greviance_submit_suggestion');
    // }

    // // RDC_Quick_links

    // public function research_development_center_about()
    // {
    //     return view('university.quick_links.research_development_center');
    // }

    // public function rdc_faculty_profile()
    // {
    //     return view('university.quick_links.rdc_faculty_profile');
    // }

    // public function rdc_contact_us()
    // {
    //     return view('university.quick_links.r&d_contactus');
    // }

    // public function rdc_infrastructure()
    // {
    //     return view('university.quick_links.r&d_infrastructure');
    // }


    // // RESEARCH CELL

    // public function research_about()
    // {
    //     return view('university.research.research');
    // }

    // public function research_policy()
    // {
    //     return view('university.research.research_policy');
    // }

    // public function code_of_ethics()
    // {
    //     return view('university.research.code_of_ethics');
    // }

    // public function conferences()
    // {
    //     return view('university.research.conferences');
    // }

    // public function research_publication()
    // {
    //     return view('university.research.research_publication');
    // }

    // public function sponsored_project()
    // {
    //     return view('university.research.sponsored_project');
    // }

    // public function patent()
    // {
    //     return view('university.research.patent');
    // }

    // public function seed_money()
    // {
    //     return view('university.research.seed_money');
    // }

    // public function research_innovation_awards()
    // {
    //     return view('university.research.research_innovation_awards');
    // }

    // public function fellowship_awards()
    // {
    //     return view('university.research.fellowship_awards');
    // }

    // public function university_ethics_commitee()
    // {
    //     return view('university.research.university_ethics_commitee');
    // }

    // public function uaip_caip()
    // {
    //     return view('university.research.uaip_caip');
    // }

    // public function phd_overview()
    // {
    //     return view('university.research.phd_overview');
    // }

    // public function phd_ordinance()
    // {
    //     return view('university.research.phd_ordinance');
    // }

    // public function phd_intake()
    // {
    //     return view('university.research.phd_intake');
    // }

    // public function research_scholar()
    // {
    //     return view('university.research.research_scholar');
    // }

    // public function syllabus_course_work()
    // {
    //     return view('university.research.syllabus_course_work');
    // }

    // public function phd_faq()
    // {
    //     return view('university.research.phd_faq');
    // }

    // public function phd_admission_notice()
    // {
    //     return view('university.research.phd_admission_notice');
    // }

    // public function phd_how_to_apply()
    // {
    //     return view('university.research.phd_how_to_apply');
    // }

    // public function phd_process()
    // {
    //     return view('university.research.phd_process');
    // }

    // public function checklist()
    // {
    //     return view('university.research.checklist');
    // }

    // public function phd_application_form()
    // {
    //     return view('university.research.phd_application_form');
    // }

    // public function phd_fee_structure()
    // {
    //     return view('university.research.phd_fee_structure');
    // }

    // public function semester_progress_report()
    // {
    //     return view("university.research.semester_progress_report");
    // }

    // public function thesis_submission_form()
    // {
    //     return view('university.research.thesis_submission_form');
    // }

    // public function phd_no_dues()
    // {
    //     return view('university.research.phd_no_dues');
    // }

    // public function phd_provisional_degree_proforma()
    // {
    //     return view('university.research.phd_provisional_degree_proforma');
    // }

    // public function final_thesis_submission_form()
    // {
    //     return view('university.research.final_thesis_submission_form');
    // }

    // public function phd_result()
    // {
    //     return view('university.research.phd_result');
    // }

    // // Examination

    // public function exam_overview()
    // {
    //     return view('university.examination.exam_overview');
    // }

    // public function exam_ordinance()
    // {
    //     return view('university.examination.exam_ordinance');
    // }

    // public function syllabus()
    // {
    //     return view('university.examination.syllabus');
    // }


    // // CBCS Open Elective

    // public function cbcs()
    // {
    //     return view('university.examination.cbcs.cbcs');
    // }

    // public function cbcs_circulars()
    // {
    //     return view('university.examination.cbcs.cbcs_circulars');
    // }

    // public function cbcs_nursing()
    // {
    //     return view('university.examination.cbcs.cbcs_nursing');
    // }

    // public function cbcs_pharmacy()
    // {
    //     return view('university.examination.cbcs.cbcs_pharmacy');
    // }

    // public function cbcs_paramedical_sciences()
    // {
    //     return view('university.examination.cbcs.cbcs_paramedical');
    // }

    // public function cbcs_physiotherapy()
    // {
    //     return view('university.examination.cbcs.cbcs_physiotherapy');
    // }

    // public function cbcs_management()
    // {
    //     return view('university.examination.cbcs.cbcs_management');
    // }

    // public function cbcs_law_and_legal_studies()
    // {
    //     return view('university.examination.cbcs.cbcs_law');
    // }

    // public function cbcs_ccsit()
    // {
    //     return view('university.examination.cbcs.cbcs_ccsit');
    // }

    // public function cbcs_engineering()
    // {
    //     return view('university.examination.cbcs.cbcs_engineering');
    // }

    // public function cbcs_university_polytechnic()
    // {
    //     return view('university.examination.cbcs.cbcs_polytechnic');
    // }

    // public function cbcs_education()
    // {
    //     return view('university.examination.cbcs.cbcs_education');
    // }

    // public function cbcs_agriculture_sciences()
    // {
    //     return view('university.examination.cbcs.cbcs_agriculture');
    // }

    // // Management College

    // public function tmimt_college_of_management()
    // {
    //     return view('university.colleges.management.tmimt_college_of_management');
    // }

    // public function mgmt_overview()
    // {
    //     return view('university.colleges.management.mgmt_overview');
    // }

    // public function mgmt_highlight()
    // {
    //     return view('university.colleges.management.mgmt_highlight');
    // }

    // public function mgmt_principal()
    // {
    //     return view('university.colleges.management.mgmt_principal');
    // }

    // public function mgmt_academic_calendar()
    // {
    //     return view('university.colleges.management.mgmt_academic_calendar');
    // }

    // public function training_placements_cell()
    // {
    //     return view('university.colleges.management.mgmt_tpc');
    // }

    // public function corporate_advisory_board()
    // {
    //     return view('university.colleges.management.mgmt_ca_board');
    // }

    // public function mgmt_placement_calendar()
    // {
    //     return view('university.colleges.management.mgmt_placement_calendar');
    // }

    // public function mgmt_placement_brochure()
    // {
    //     return view('university.colleges.management.mgmt_placement_brochure');
    // }

    // public function mgmt_news()
    // {
    //     return view('university.colleges.management.mgmt_news');
    // }

    // public function mgmt_timetable()
    // {
    //     return view('university.colleges.management.mgmt_timetable');
    // }

    // public function mgmt_anti_ragging()
    // {
    //     return view('university.colleges.management.mgmt_anti_ragging');
    // }

    // public function mgmt_scst_committee()
    // {
    //     return view('university.colleges.management.mgmt_scst_committee');
    // }

    // public function mgmt_icc_committee()
    // {
    //     return view('university.colleges.management.mgmt_icc_committee');
    // }

    // public function mgmt_guestlecture()
    // {
    //     return view('university.colleges.management.mgmt_guestlecture');
    // }

    // public function mgmt_contactus()
    // {
    //     return view('university.colleges.management.mgmt_contactus');
    // }

    // public function mgmt_magazine()
    // {
    //     return view('university.colleges.management.mgmt_magazine');
    // }


    // About TMU


    public function about_us()
    {
        return view('university.university_glimpse.about_us');
    }

    public function vision_and_mission()
    {
        return view('university.university_glimpse.tmu_vision_mission');
    }


    public function statutory_approvals()
    {
        return view('university.university_glimpse.statutory_approvals');
    }

    public function awards_and_recognition()
    {
        return view('university.university_glimpse.awards_&_recognition');
    }

    public function university_governance()
    {
        return view('university.university_glimpse.tmu_governance');
    }

    public function university_organogram()
    {
        return view('university.university_glimpse.tmu_organogram');
    }

    public function university_administration()
    {
        return view('university.university_glimpse.administration');
    }

    public function chancellor_desk()
    {
        return view('university.university_glimpse.chancellor_desk');
    }

    public function founder_vice_chancellor_desk()
    {
        return view('university.university_glimpse.founder_vice_chancellor_desk');
    }

    public function vice_chancellor_desk()
    {
        return view('university.university_glimpse.vice_chancellor_desk');
    }

    public function tmu_careers()
    {
        return view('university.university_glimpse.careers');
    }

    //IIC

    public function iic_home()
    {
        return view('university.iic.iic');
    }

    public function iic_about_cell()
    {
        return view('university.iic.iic_about_cell');
    }

    public function iic_policy()
    {
        return view('university.iic.iic_policy');
    }

    public function iic_research_policy()
    {
        return view('university.iic.iic_research_policy');
    }

    public function iic_committee()
    {
        return view('university.iic.iic_committee');
    }

    public function iic_activities_calendar()
    {
        return view('university.iic.iic_activities_calendar');
    }

    public function iic_establishment_certificate()
    {
        return view('university.iic.iic_establishment_certificate');
    }

    public function iic_innovation_ambassador_training_series()
    {
        return view('university.iic.iic_innovation_ambassador_training_series');
    }

    public function iic_campaign_participation()
    {
        return view('university.iic.iic_campaign_participation');
    }

    public function iic_achievements()
    {
        return view('university.iic.iic_achievements');
    }

    public function iic_activities()
    {
        return view('university.iic.iic_activities');
    }

    public function iic_successful_startup_story()
    {
        return view('university.iic.iic_successful_startup_story');
    }

    public function iic_contact()
    {
        return view('university.iic.iic_contact');
    }

    // NSS

    public function nss_about()
    {
        return view('university.nss.nss_about');
    }

    public function nss_aims()
    {
        return view('university.nss.nss_aims');
    }

    public function nss_badge()
    {
        return view('university.nss.nss_badge');
    }

    public function nss_day_and_song()
    {
        return view('university.nss.nss_day&song');
    }

    public function nss_activities()
    {
        return view('university.nss.nss_activities');
    }

    public function nss_volunteers()
    {
        return view('university.nss.nss_volunteers');
    }

    public function nss_internationalday()
    {
        return view('university.nss.nss_internationalday');
    }

    public function nss_events()
    {
        return view('university.nss.nss_events');
    }

    public function nss_contactus()
    {
        return view('university.nss.nss_contactus');
    }

    // NEP

    public function nep_2020_programmes_offered()
    {
        return view('university.nep.nep_2020_programmes_offered');
    }

    public function nep_2020_university_ordinance()
    {
        return view('university.nep.nep_2020_university_ordinance');
    }

    public function nep_ability_enhancement()
    {
        return view('university.nep.nep_ability_enhancement');
    }

    public function nep_implementation_committee()
    {
        return view('university.nep.nep_implementation_committee');
    }

    public function nep_multidisciplinary_specializations()
    {
        return view('university.nep.nep_multidisciplinary_specializations');
    }

    public function nep_obe_implementation()
    {
        return view('university.nep.nep_obe_implementation');
    }

    public function nep_skill_enhancement()
    {
        return view('university.nep.nep_skill_enhancement');
    }

    public function nep_value_added_courses()
    {
        return view('university.nep.nep_value_added_courses');
    }


    // CTLD

    public function ctld_about()
    {
        return view('university.ctld.about_ctld');
    }

    public function ctld_aims_and_objectives()
    {
        return view('university.ctld.aims_and_objectives_ctld');
    }

    public function ctld_director_desk()
    {
        return view('university.ctld.ctld_director');
    }

    public function ctld_team()
    {
        return view('university.ctld.ctld_team');
    }

    public function ctld_students_testimonials()
    {
        return view('university.ctld.students_testimonials_ctld');
    }

    public function ctld_events()
    {
        return view('university.ctld.ctld_events');
    }

    public function ctld_magazine()
    {
        return view('university.ctld.ctld_magazine');
    }

    // IQAC

    public function iqac_about()
    {
        return view('university.iqac.iqac');
    }

    public function iqac_quality_policy()
    {
        return view('university.iqac.iqac_quality_policy');
    }

    public function iqac_composition()
    {
        return view('university.iqac.iqac_composition');
    }

    public function iqac_mom_and_action_taken_reports()
    {
        return view('university.iqac.mom&atr');
    }

    public function aqar_report()
    {
        return view('university.iqac.aqar_report');
    }

    public function sss_report()
    {
        return view('university.iqac.sss_report');
    }

    public function annual_report()
    {
        return view('university.iqac.annual_report');
    }

    public function iqac_awards()
    {
        return view('university.iqac.iqac_awards');
    }

    public function iqac_strategic_plan()
    {
        return view('university.iqac.iqac_stratergic_plan');
    }

    public function iqac_best_practices()
    {
        return view('university.iqac.iqac_best_practice');
    }

    public function iqac_academic_calendar()
    {
        return view('university.iqac.iqac_academic_calendar');
    }

    public function iqac_student_feedback()
    {
        return view('university.iqac.student_feedback');
    }

    public function iqac_policies_and_sops()
    {
        return view('university.iqac.iqac_policies');
    }

    public function iqac_contact_us()
    {
        return view('university.iqac.iqac_contactus');
    }


    // NAAC

    public function naac_home()
    {
        return view('university.naac.naac');
    }


    // NIRF

    public function nirf_home()
    {
        return view('university.nirf.nirf');
    }


    // IQAC ERP


    public function iqac_erp()
    {
        return view('university.iqac.iqac_erp');
    }

    




    // Institutional Values

    public function gender_equity_initiative()
    {
        return view('university.iqac.iqac_genderequityinitate');
    }

    public function environmental_consciousness_and_sustainability()
    {
        return view('university.iqac.iqac_enniviron_conciousness');
    }

    public function waste_management_initiative()
    {
        return view('university.iqac.iqac_waste_mgmt_initiative');
    }

    public function iqac_water_conservate_initiative()
    {
        return view('university.iqac.iqac_water_conservate_initiative');
    }

    public function green_initiative()
    {
        return view('university.iqac.iqac_green_initiative');
    }

    public function environment_and_energy_audits()
    {
        return view('university.iqac.iqac_audits');
    }

    public function pwd_facilities()
    {
        return view('university.iqac.iqac_pwd');
    }

    public function inclusive_environmnet_activities()
    {
        return view('university.iqac.iqac_situatedness');
    }

    public function professional_ethics()
    {
        return view('university.iqac.iqac_professional_ethics');
    }

    public function code_of_conduct()
    {
        return view('university.iqac.iqac_co_conduct');
    }

    public function commemorative_days()
    {
        return view('university.iqac.iqac_comemorative');
    }


    // QUICK_LINKS

    public function disciplinary_rules()
    {
        return view('university.quick_links.disciplinary_rules');
    }

    public function university_sports_calendar()
    {
        return view('university.quick_links.university_sports_calendar');
    }

    public function university_academic_calendar()
    {
        return view('university.quick_links.university_academic_calendar');
    }

    public function university_anti_ragging_committee()
    {
        return view('university.quick_links.university_anti_ragging_committee');
    }

    public function greviances_about()
    {
        return view('university.quick_links.greviances');
    }

    public function greviance_submit_suggestion()
    {
        return view('university.quick_links.greviance_submit_suggestion');
    }

    // RDC_Quick_links

    public function research_development_center_about()
    {
        return view('university.quick_links.research_development_center');
    }

    public function rdc_faculty_profile()
    {
        return view('university.quick_links.rdc_faculty_profile');
    }

    public function rdc_contact_us()
    {
        return view('university.quick_links.r&d_contactus');
    }

    public function rdc_infrastructure()
    {
        return view('university.quick_links.r&d_infrastructure');
    }


    // RESEARCH CELL

    public function research_about()
    {
        return view('university.research.research');
    }

    public function research_policy()
    {
        return view('university.research.research_policy');
    }

    public function code_of_ethics()
    {
        return view('university.research.code_of_ethics');
    }

    public function conferences()
    {
        return view('university.research.conferences');
    }

    public function research_publication()
    {
        return view('university.research.research_publication');
    }

    public function sponsored_project()
    {
        return view('university.research.sponsored_project');
    }

    public function patent()
    {
        return view('university.research.patent');
    }

    public function seed_money()
    {
        return view('university.research.seed_money');
    }

    public function research_innovation_awards()
    {
        return view('university.research.research_innovation_awards');
    }

    public function fellowship_awards()
    {
        return view('university.research.fellowship_awards');
    }

    public function university_ethics_commitee()
    {
        return view('university.research.university_ethics_commitee');
    }

    public function uaip_caip()
    {
        return view('university.research.uaip_caip');
    }

    public function phd_overview()
    {
        return view('university.research.phd_overview');
    }

    public function phd_ordinance()
    {
        return view('university.research.phd_ordinance');
    }

    public function phd_intake()
    {
        return view('university.research.phd_intake');
    }

    public function research_scholar()
    {
        return view('university.research.research_scholar');
    }

    public function syllabus_course_work()
    {
        return view('university.research.syllabus_course_work');
    }

    public function phd_faq()
    {
        return view('university.research.phd_faq');
    }

    public function phd_admission_notice()
    {
        return view('university.research.phd_admission_notice');
    }

    public function phd_how_to_apply()
    {
        return view('university.research.phd_how_to_apply');
    }

    public function phd_process()
    {
        return view('university.research.phd_process');
    }

    public function checklist()
    {
        return view('university.research.checklist');
    }

    public function phd_application_form()
    {
        return view('university.research.phd_application_form');
    }

    public function phd_fee_structure()
    {
        return view('university.research.phd_fee_structure');
    }

    public function semester_progress_report()
    {
        return view("university.research.semester_progress_report");
    }

    public function thesis_submission_form()
    {
        return view('university.research.thesis_submission_form');
    }

    public function phd_no_dues()
    {
        return view('university.research.phd_no_dues');
    }

    public function phd_provisional_degree_proforma()
    {
        return view('university.research.phd_provisional_degree_proforma');
    }

    public function final_thesis_submission_form()
    {
        return view('university.research.final_thesis_submission_form');
    }

    public function phd_result()
    {
        return view('university.research.phd_result');
    }

    // Examination

    public function exam_overview()
    {
        return view('university.examination.exam_overview');
    }

    public function exam_ordinance()
    {
        return view('university.examination.exam_ordinance');
    }

    public function syllabus()
    {
        return view('university.examination.syllabus');
    }


    // CBCS Open Elective

    public function cbcs()
    {
        return view('university.examination.cbcs.cbcs');
    }

    public function cbcs_circulars()
    {
        return view('university.examination.cbcs.cbcs_circulars');
    }

    public function cbcs_nursing()
    {
        return view('university.examination.cbcs.cbcs_nursing');
    }

    public function cbcs_pharmacy()
    {
        return view('university.examination.cbcs.cbcs_pharmacy');
    }

    public function cbcs_paramedical_sciences()
    {
        return view('university.examination.cbcs.cbcs_paramedical');
    }

    public function cbcs_physiotherapy()
    {
        return view('university.examination.cbcs.cbcs_physiotherapy');
    }

    public function cbcs_management()
    {
        return view('university.examination.cbcs.cbcs_management');
    }

    public function cbcs_law_and_legal_studies()
    {
        return view('university.examination.cbcs.cbcs_law');
    }

    public function cbcs_ccsit()
    {
        return view('university.examination.cbcs.cbcs_ccsit');
    }

    public function cbcs_engineering()
    {
        return view('university.examination.cbcs.cbcs_engineering');
    }

    public function cbcs_university_polytechnic()
    {
        return view('university.examination.cbcs.cbcs_polytechnic');
    }

    public function cbcs_education()
    {
        return view('university.examination.cbcs.cbcs_education');
    }

    public function cbcs_agriculture_sciences()
    {
        return view('university.examination.cbcs.cbcs_agriculture');
    }

    // Management College

    public function tmimt_college_of_management()
    {
        return view('university.colleges.management.tmimt_college_of_management');
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

    public function mgmt_guestlecture()
    {
        return view('university.colleges.management.mgmt_guestlecture');
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


    // Law

    public function law_academic_calendar()
    {
        return view('university.colleges.law.law_academic_calendar');
    }

    public function law_anti_ragging()
    {
        return view('university.colleges.law.law_anti_ragging');
    }
    public function law_college_highlight()
    {
        return view('university.colleges.law.law_college_highlight');
    }

    public function law_contact_us()
    {
        return view('university.colleges.law.law_contact_us');
    }
    public function law_crills()
    {
        return view('university.colleges.law.law_crills');
    }

    public function law_dean()
    {
        return view('university.colleges.law.law_dean');
    }
    public function law_gallery()
    {
        return view('university.colleges.law.law_gallery');
    }

    public function law_iqac()
    {
        return view('university.colleges.law.law_iqac');
    }
    public function law_overview()
    {
        return view('university.colleges.law.law_overview');
    }

    public function law_principal()
    {
        return view('university.colleges.law.law_principal');
    }
    public function law_syllabus()
    {
        return view('university.colleges.law.law_syllabus');
    }

    public function law_time_table()
    {
        return view('university.colleges.law.law_time_table');
    }

    // Engineering


    public function engineering_home()
    {
        return view('university.colleges.engineering.faculty_of_engineering');
    }

    public function engineering_about_us()
    {
        return view('university.colleges.engineering.engineering_overview');
    }

    public function engineering_highlights()
    {
        return view('university.colleges.engineering.engineering_highlights');
    }

    public function engineering_principal()
    {
        return view('university.colleges.engineering.engineering_principal');
    }

    public function engineering_academic_calednar()
    {
        return view('university.colleges.engineering.engineering_academic_calednar');
    }

    public function engineering_nba()
    {
        return view('university.colleges.engineering.engineering_nba');
    }

    public function engineering_corporate_advisory_board()
    {
        return view('university.colleges.engineering.engineering_corporate_board');
    }

    public function engineering_placement_calendar()
    {
        return view('university.colleges.engineering.engineering_placement_calendar');
    }

    public function engineering_placement_brochure()
    {
        return view('university.colleges.engineering.engineering_placement_brochure');
    }

    public function engineering_placement_news()
    {
        return view('university.colleges.engineering.engineering_placement_news');
    }

    public function engineering_project_guidelines()
    {
        return view('university.colleges.engineering.engineering_project_guidelines');
    }

    public function engineering_project_template()
    {
        return view('university.colleges.engineering.engineering_project_template');
    }

    public function engineering_timetable()
    {
        return view('university.colleges.engineering.engineering_timetable');
    }

    public function engineering_anti_ragging()
    {
        return view('university.colleges.engineering.engineering_anti_ragging');
    }

    public function engineering_financial_statement()
    {
        return view('university.colleges.engineering.engineering_financial_statement');
    }

    public function engineering_contact_us()
    {
        return view('university.colleges.engineering.engineering_contact_us');
    }

    public function engineering_gallery()
    {
        return view('university.colleges.engineering.engineering_gallery');
    }

    public function engineering_iqac()
    {
        return view('university.colleges.engineering.engineering_iqac');
    }

    public function engineering_syllabus()
    {
        return view('university.colleges.engineering.engineering_syllabus');
    }


// CCSIT College


public function ccsit_home()
{
    return view('university.colleges.ccsit.ccsit');
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
    return view('university.colleges.ccsit.ccsit_syllabus');
}


// Fine arts

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
        return view('university.colleges.fine_arts.fine_arts_syllabus');
    }

    public function fine_arts_timetable()
    {
        return view('university.colleges.fine_arts.fine_arts_timetable');
    }


    // Medical College

    public function medical_home()
    {
        return view('university.colleges.medical.medical_home');
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

    // Dental

    public function dental_overview()
    {
        return view('university.colleges.dental.dental_overview');
    }

    public function dental_college_highlight()
    {
        return view('university.colleges.dental.dental_college_highlight');
    }

    public function dental_principal()
    {
        return view('university.colleges.dental.dental_principal');
    }

    public function dental_college_advisory_board()
    {
        return view('university.colleges.dental.dental_college_advisory_board');
    }

    public function dental_department()
    {
        return view('university.colleges.dental.dental_department');
    }

    public function dental_syllabus()
    {
        return view('university.colleges.dental.dental_syllabus');
    }

    public function dental_timetable()
    {
        return view('university.colleges.dental.dental_timetable');
    }

    public function dental_academic_calendar()
    {
        return view('university.colleges.dental.dental_academic_calendar');
    }

    public function dental_anti_ragging()
    {
        return view('university.colleges.dental.dental_anti_ragging');
    }

    public function dental_guest_lecture()
    {
        return view('university.colleges.dental.dental_guest_lecture');
    }

    public function dental_gallery()
    {
        return view('university.colleges.dental.dental_gallery');
    }

    public function dental_contact_us()
    {
        return view('university.colleges.dental.dental_contact_us');
    }

    public function dental_iqac()
    {
        return view('university.colleges.dental.dental_iqac');
    }

    public function dental_conservative_dentistry_endodontics()
    {
        return view('university.colleges.dental.dental_conservative_dentistry_endodontics');
    }

    public function dental_oral_maxillofacial_surgery()
    {
        return view('university.colleges.dental.dental_oral');
    }

    public function dental_orthodontics()
    {
        return view('university.colleges.dental.dental_orthodontics');
    }

    public function dental_Prosthodontics()
    {
        return view('university.colleges.dental.dental_Prosthodontics');
    }

    public function dental_paedodontics()
    {
        return view('university.colleges.dental.dental_paedodontics');
    }

    public function dental_periodontology()
    {
        return view('university.colleges.dental.dental_periodontology');
    }

    public function dental_public_health()
    {
        return view('university.colleges.dental.dental_public_health');
    }

    public function dental_oral_medicine()
    {
        return view('university.colleges.dental.dental_oral_medicine');
    }

    public function dental_oral_pathology()
    {
        return view('university.colleges.dental.dental_oral_pathology');
    }


    // Physiotherapy

    public function physiotherapy_about_us()
    {
        return view('university.colleges.physiotherapy.physiotherapy_about_us');
    }

    public function physiotherapy_college_highlights()
    {
        return view('university.colleges.physiotherapy.physiotherapy_college_highlights');
    }

    public function physiotherapy_hod()
    {
        return view('university.colleges.physiotherapy.physiotherapy_hod');
    }

    public function physio_research_lab()
    {
        return view('university.colleges.physiotherapy.physio_research_lab');
    }

    public function physiotherapy_syllabus()
    {
        return view('university.colleges.physiotherapy.physiotherapy_syllabus');
    }

    public function physiotherapy_academic_calendar()
    {
        return view('university.colleges.physiotherapy.physiotherapy_academic_calendar');
    }

    public function physiotherapy_timetable()
    {
        return view('university.colleges.physiotherapy.physiotherapy_timetable');
    }

    public function physiotherapy_anti_ragging()
    {
        return view('university.colleges.physiotherapy.physiotherapy_anti_ragging');
    }

    public function physiotherapy_gallery()
    {
        return view('university.colleges.physiotherapy.physiotherapy_gallery');
    }

    public function physiotherapy_contact_us()
    {
        return view('university.colleges.physiotherapy.physiotherapy_contact_us');
    }

    public function physiotherapy_labs()
    {
        return view('university.colleges.physiotherapy.physiotherapy_labs');
    }

    public function physiotherapy_electro_lab()
    {
        return view('university.colleges.physiotherapy.physiotherapy_electro_lab');
    }

    public function physio_exercise_lab()
    {
        return view('university.colleges.physiotherapy.physio_exercise_lab');
    }

    public function physio_opd()
    {
        return view('university.colleges.physiotherapy.physio_opd');
    }

    public function physiotherapy_magazine()
    {
        return view('university.colleges.physiotherapy.physiotherapy_magazine');
    }

    public function physiotherapy_iqac()
    {
        return view('university.colleges.physiotherapy.physiotherapy_iqac');
    }

    public function physiotherapy_intake()
    {
        return view('university.colleges.physiotherapy.physiotherapy_intake');
    }


    // Pharmacy


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
        return view('university.colleges.pharmacy.pharmacy_syllabus');
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


    // Paramedical

    public function paramedical_about_us()
    {
        return view('university.colleges.paramedical.paramedical_about_us');
    }

    public function paramedical_college_highlights()
    {
        return view('university.colleges.paramedical.paramedical_college_highlights');
    }

    public function paramedical_principal()
    {
        return view('university.colleges.paramedical.paramedical_principal');
    }

    public function paramedical_college_advisory_board()
    {
        return view('university.colleges.paramedical.paramedical_college_advisory_board');
    }

    public function paramedical_syllabus()
    {
        return view('university.colleges.paramedical.paramedical_syllabus');
    }

    public function paramedical_timetable()
    {
        return view('university.colleges.paramedical.paramedical_timetable');
    }

    public function paramedical_anti_ragging()
    {
        return view('university.colleges.paramedical.paramedical_anti_ragging');
    }

    public function paramedical_academic_calendar()
    {
        return view('university.colleges.paramedical.paramedical_academic_calendar');
    }

    public function paramedical_gallery()
    {
        return view('university.colleges.paramedical.paramedical_gallery');
    }

    public function paramedical_guest_lecture()
    {
        return view('university.colleges.paramedical.paramedical_guest_lecture');
    }

    public function paramedical_contact_us()
    {
        return view('university.colleges.paramedical.paramedical_contact_us');
    }

    public function paramedical_iqac()
    {
        return view('university.colleges.paramedical.paramedical_iqac');
    }



    // Education

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
        return view('university.colleges.education.education_syllabus');
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
        return view('university.colleges.education.education_guest_lecture');
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


    // Agriculoture


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
        return view('university.colleges.agriculture.agriculture_syllabus');
    }

    public function agriculture_timetable()
    {
        return view('university.colleges.agriculture.agriculture_timetable');
    }

    public function agriculture_tpc()
    {
        return view('university.colleges.agriculture.agriculture_tpc');
    }

    // Nursing

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
        return view('university.colleges.nursing.nursing_guest_lecture');
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
        return view('university.colleges.nursing.nursing_syllabus');
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



// Physical Education

public function physical_education_about_us()
{
    return view('university.colleges.physical_education.physical_education_about_us');
}

public function physical_education_academic_calendar()
{
    return view('university.colleges.physical_education.physical_education_academic_calendar');
}
public function physical_education_anti_ragging()
{
    return view('university.colleges.physical_education.physical_education_anti_ragging');
}

public function physical_education_college_highlight()
{
    return view('university.colleges.physical_education.physical_education_college_highlight');
}

public function physical_education_contact_us()
{
    return view('university.colleges.physical_education.physical_education_contact_us');
}

public function physical_education_gallery()
{
    return view('university.colleges.physical_education.physical_education_gallery');
}

public function physical_education_guest_lecture()
{
    return view('university.colleges.physical_education.physical_education_guest_lecture');
}

public function physical_education_iqac()
{
    return view('university.colleges.physical_education.physical_education_iqac');
}

public function physical_education_syllabus()
{
    return view('university.colleges.physical_education.physical_education_syllabus');
}

public function physical_education_principal()
{
    return view('university.colleges.physical_education.physical_education_principal');
}

public function physical_education_timetable()
{
    return view('university.colleges.physical_education.physical_education_timetable');
}








    // CRC Placement

    public function crc_about_us()
    {
        return view('university.crc.crc_about_us');
    }

    public function aims_and_objectives_crc()
    {
        return view('university.crc.aims_and_objectives_crc');
    }

    public function directors_desk_crc()
    {
        return view('university.crc.directors_desk_crc');
    }

    public function placement_rules()
    {
        return view('university.crc.placement_rules');
    }

    public function crc_team()
    {
        return view('university.crc.crc_team');
    }

    public function our_recruiters()
    {
        return view('university.crc.our_recruiters');
    }

    public function crc_collaboration()
    {
        return view('university.crc.crc_collaboration');
    }

    public function crc_corporate_testi()
    {
        return view('university.crc.crc_corporate_testi');
    }

    public function crc_student_testi()
    {
        return view('university.crc.crc_student_testi');
    }



// College Homepages 

public function agriculture_home()
    {
        return view('university.colleges.agriculture.agriculture_home');
    }
public function dental_home()
    {
        return view('university.colleges.dental.dental_home');
    }
public function education_home()
    {
        return view('university.colleges.education.education_home');
    }
public function fine_arts_home()
    {
        return view('university.colleges.fine_arts.fine_arts_home');
    }
public function law_home()
    {
        return view('university.colleges.law.law_home');
    }
public function paramedical_home()
    {
        return view('university.colleges.paramedical.paramedical_home');
    }
public function pharmacy_home()
    {
        return view('university.colleges.pharmacy.pharmacy_home');
    }
public function physical_education_home()
    {
        return view('university.colleges.physical_education.physical_education_home');
    }
public function nursing_home()
    {
        return view('university.colleges.nursing.nursing_home');
    }
public function physiotherapy_home()
    {
        return view('university.colleges.physiotherapy.physiotherapy_home');
    }


    // Sarvagya Controller Ends here


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
