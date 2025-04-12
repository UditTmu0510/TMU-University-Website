<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Colleges;
use App\Models\News;
use App\Models\Programmes;
use App\Models\Faqs;
use App\Models\Blogs;
use App\Models\Testimonials;
use App\Models\Recruiters;
use App\Models\ProgrameeFee;
use App\Models\Employees;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Str;
use App\Models\JobOpening;
use Carbon\Carbon;


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
            ->get()
            ->reject(function ($college) {
                return $college->cd_id == 17;
            });

        $news = News::where('status', 1)
            ->where('display_main', 'Y')
            ->whereNotNull('monaco_image_path')
            ->where('monaco_image_path', '!=', '')
            ->select('event_title', 'event_description', 'event_date', 'ti_path', 'n_slug', 'monaco_image_path')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $activeBlogs = Blogs::where('status', 1)
            ->orderBy('posted_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->take(6)
            ->get();

        // Format the date and pass blogs to the view
        foreach ($activeBlogs as $blog) {
            $blog->formatted_date = \Carbon\Carbon::parse($blog->posted_at)->format('D, M d'); // Format date as Mon, Feb 12
        }





        return view('university.home', compact('colleges', 'news', 'activeBlogs'));
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
            ->where('status', 'Y')
            ->where('display_on_home_page', 'Y')
            ->orderByRaw("
            CASE 
                WHEN programme_level = 'UG' THEN 1
                WHEN programme_level = 'PG' THEN 2
                ELSE 3
            END
        ")
            ->orderBy('prog_name', 'ASC') // Sort alphabetically within UG/PG
            ->get();


        // Check if any records are found
        if ($programs->isEmpty()) {
            return response()->json(['error' => 'No records found for the given cd_id'], 404);
        }

        // Return the JSON response
        return response()->json(['programs' => $programs]);
    }

    public function fetch_programmes_by_level(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'cd_id' => 'required|integer',
            'programme_level' => 'required'
        ]);

        $cd_id = $request->cd_id;
        $programme_level = $request->programme_level;

        try {
            // Search for the records with the given cd_id
            $programs = Programmes::where('cd_id', $cd_id)
                ->where('programme_level', $programme_level)
                ->where('status', 'Y')
                ->get();

            // Check if any records are found
            if ($programs->isEmpty()) {
                return response()->json(['error' => 'No records found for the given cd_id'], 404);
            }

            // Return the JSON response
            return response()->json(['programs' => $programs]);
        } catch (\Exception $e) {
            // Handle exception and return error response
            return response()->json(['error' => 'Something went wrong, please try again later.'], 500);
        }
    }



    public function programme($slug)
    {

        $programme = Programmes::where('page_slug', $slug)->firstOrFail();
        if ($programme->status === 'N') {
            abort(404); // Return a 404 error if the programme is not visible
        }

        $cd_id = $programme->cd_id;


        $prog_id = $programme->prog_id;
        $fee_details = ProgrameeFee::where('prog_id', $prog_id)->get();
        $faqs = Faqs::where('prog_id', $prog_id)->where('display_programme_page', 'Y')->where('status', 'Y')->get();
        $recruiters = Recruiters::where('cd_id', $cd_id)->where('display_college_main', 'Y')->where('status', 'Y')->get();
        return view('programme.programme', compact('programme', 'fee_details', 'faqs', 'recruiters'));
    }

    public function university_scholarship()
    {
        return view('university.quick_links.scholarship');
    }

    public function university_education_loan()
    {
        return view('university.quick_links.tmu_loan');
    }


    public function about_us()
    {
        return view('university.university_glimpse.about_us');
    }

    public function why_choose_tmu()
    {
        return view('university.university_glimpse.why_tmu');
    }

    public function virtual_tour()
    {
        return view('university.university_glimpse.virtual_tour');
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

        $administrators = Employees::orderBy('priority', 'ASC')->where('status', 'Y')->whereIn('cd_id', [0, 1])->where('is_head', 'Y')->get();
        $principals = Employees::orderBy('priority', 'ASC')->where('status', 'Y')->where('designation_id', 2)->get();
        $vice_principals = Employees::orderBy('priority', 'ASC')->where('status', 'Y')->where('designation_id', 29)->get();
        $deans = Employees::with('faculty') // Eager load faculty through college
            ->orderBy('priority', 'ASC')
            ->where('status', 'Y')
            ->where('designation_id', 3)
            ->where('cd_id', '!=', 0)
            ->get();

        $hods = Employees::orderBy('priority', 'ASC')->where('status', 'Y')->where('designation_id', 30)->get();
        return view('university.university_glimpse.administration', compact('administrators', 'principals', 'vice_principals', 'deans', 'hods'));
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

    public function website_feedback_form()
    {
        return view('university.university_glimpse.website_feedback_form');
    }

    public function tmu_careers()
    {
        $academicJobs = JobOpening::where('category', 'Academic')->get();
        $adminJobs = JobOpening::where('category', 'Administration')->get();

        if ($academicJobs->isEmpty() || $adminJobs->isEmpty()) {
            dd('No jobs found');
        }

        return view('university.university_glimpse.careers', compact('academicJobs', 'adminJobs'));
    }

    public function contact_us_main()
    {

        return view('university.quick_links.contact_us_main');
    }

    //IIC

    public function iic_home(Request $request)
    {



        $news = News::where('status', 1)
            ->where('category', 'IIC')
            ->select('event_title', 'event_date', 'ti_path', 'ei1_path', 'n_slug', 'monaco_image_path')
            ->get();
        return view('university.iic.iic', compact('news'));
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
        $news = News::where('status', 1)
            ->where('organised_by', 'NSS Wing')
            ->select('event_title', 'event_date', 'ti_path', 'ei1_path', 'n_slug', 'monaco_image_path')
            ->get();

        // Convert all dates to a standard format (YYYY-MM-DD) and handle trailing data
        $news = $news->map(function ($item) {
            // Trim the event_date to remove any unwanted characters
            $eventDate = trim($item->event_date);

            // Initialize the formatted date
            $formattedDate = null;

            // Try to parse as YYYY-MM-DD first
            try {
                $formattedDate = Carbon::createFromFormat('Y-m-d', $eventDate)->format('Y-m-d');
            } catch (\Exception $e) {
                // If the above fails, try DD-MM-YYYY
                try {
                    $formattedDate = Carbon::createFromFormat('d-m-Y', $eventDate)->format('Y-m-d');
                } catch (\Exception $e) {
                    // Optionally, log the error or handle invalid dates
                    $formattedDate = null;  // Handle invalid date formats
                }
            }

            // Set the formatted date if successful, otherwise default to null
            $item->formatted_event_date = $formattedDate;

            return $item;
        });

        // Now sort by the unified date
        $sortedNews = $news->filter(function ($item) {
            return $item->formatted_event_date !== null;  // Filter out invalid dates
        })->sortByDesc('formatted_event_date');

        return view('university.nss.nss_events', compact('sortedNews'));
    }

    public function nss_contactus()
    {
        return view('university.nss.nss_contactus');
    }
    public function nss_coordinator()
    {
        return view('university.nss.nss_our_coordinator');
    }

    public function adopted_village()
    {
        return view('university.nss.adopted_village');
    }

    public function nss_commitee()
    {
        return view('university.nss.nss_commitee');
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

    public function ctld_home()
    {
        return view('university.ctld.ctld_home');
    }

    public function ctld_about()
    {
        return view('university.ctld.about_ctld');
    }
    public function ctld_benefits()
    {
        return view('university.ctld.benefits');
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
        $employees = Employees::orderBy('designation_id', 'ASC')->where('department_id', 22)->where('status', 'Y')->get();
        return view('university.ctld.ctld_team', compact('employees'));
    }

    public function ctld_students_testimonials()
    {
        $testimonials = Testimonials::where('display_ctld_department', 'Y')
            ->where('status', 'Y')
            ->get();
        return view('university.ctld.students_testimonials_ctld', compact('testimonials'));
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

    public function alumni_feedback_form()
    {
        return view('university.iqac.alumni_feedback_form');
    }

    public function teachers_feedback_form()
    {
        return view('university.iqac.teachers_feedback_form');
    }

    public function employer_feedback_form()
    {
        return view('university.iqac.employer_feedback_form');
    }
    public function iqac_feedback_report()
    {
        return view('university.iqac.iqac_feedback_report');
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

    // public function infrastructure()
    // {
    //     return view('university.quick_links.infrastructure');
    // }

    public function industry_academic_alliances()
    {
        return view('university.quick_links.industry_academic_alliances');
    }

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
    public function campus_view()
    {
        return view('university.quick_links.campus_view');
    }
    public function contact()
    {
        return view('university.quick_links.contact');
    }

    public function library()
    {
        return view('university.quick_links.library');
    }

    public function tmu_hospital()
    {
        return view('university.quick_links.tmu_hospital');
    }

    public function how_to_apply()
    {
        return view('university.quick_links.how_to_apply');
    }

    public function application_form()
    {
        return view('university.quick_links.application_form');
    }

    public function gym()
    {
        return view('university.quick_links.gym');
    }

    public function hostel()
    {
        return view('university.quick_links.hostel');
    }

    public function sports()
    {
        return view('university.quick_links.sports');
    }

    public function auditorium()
    {
        return view('university.quick_links.auditorium');
    }

    public function jinalaya()
    {
        return view('university.quick_links.jinalaya');
    }

    public function yoga_and_meditation()
    {
        return view('university.quick_links.yoga_and_meditation');
    }

    public function music_and_dance_room()
    {
        return view('university.quick_links.music_and_dance_room');
    }

    public function banking_facility()
    {
        return view('university.quick_links.banking_facility');
    }

    public function faculty_accomodation()
    {
        return view('university.quick_links.faculty_accomodation');
    }

    public function guest_house()
    {
        return view('university.quick_links.guest_house');
    }
    public function tmu_faqs()
    {
        return view('university.quick_links.tmu_faqs');
    }
    public function admission_rules()
    {
        return view('university.quick_links.admission_rules');
    }
    public function prominent_guests_comment()
    {
        return view('university.quick_links.prominent_guests_comment');
    }

    public function tmu_convocation()
    {
        // Apply all conditions and orderBy methods before calling get()
        $convocation_newses = News::where('cd_id', 1)
            ->where('status', '1')
            ->where('event_title', 'LIKE', '%Convocation%') // Check if event_title contains "Convocation"
            ->orderBy('event_date', 'DESC')
            ->orderBy('id', 'DESC')
            ->get();


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
        foreach ($convocation_newses as $convocation_news) {
            // Format the event date
            $day = getOrdinalSuffix($convocation_news->event_day);
            $month = $convocation_news->event_month_name;
            $year = $convocation_news->event_year;


            // Add formatted date to each lecture object
            $convocation_news->formatted_date = "{$day} {$month} , {$year}";
        }

        // Pass the data to the view
        return view('university.quick_links.convocation', compact('convocation_newses'));
    }


    public function tmu_disclaimer()
    {
        return view('university.quick_links.tmu_disclaimer');
    }
    public function tmu_privacy_policy()
    {
        return view('university.quick_links.tmu_privacy_policy');
    }

    public function media_cover()
    {
        return view('university.quick_links.media_cover');
    }

    public function tmu_publication()
    {
        return view('university.quick_links.journal');
    }
    public function tmu_transport()
    {
        return view('university.quick_links.transport');
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
        $news = News::where('status', 1)
            ->where('category', 'Conference-Seminar')
            ->select('event_title', 'event_full_description', 'event_date', 'ti_path', 'n_slug', 'monaco_image_path')
            ->orderBy('id', 'desc')
            ->get();

        return view('university.research.conferences', compact('news'));
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

    public function syllabi_for_discipline()
    {
        return view('university.research.syllabi_for_discipline');
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

    // Pupil-academic-achievements

    public function pupil_academic_achievements()
    {
        return view('university.quick_links.pupil_academic_achievements');
    }

    // student-awards-achievements

    public function student_awards_achievements()
    {
        return view('university.quick_links.student_awards_achievements');
    }

    // campus-gallery

    public function campus_gallery()
    {
        return view('university.quick_links.campus_gallery');
    }

    // Seed Money 

    public function seed_money_grant_scheme()
    {
        return view('university.quick_links.seed_money_grant_scheme');
    }



    // 
    public function research_statistical_database()
    {
        return view('university.quick_links.research_statistical_database');
    }


    // tmu_moot_court
    public function tmu_moot_court()
    {
        return view('university.quick_links.tmu_moot_court');
    }










    // Engineering


    // CCSIT College



    // Fine arts






    // Dental



    // Physiotherapy




    // Pharmacy



    // Paramedical



    // Education



    // Agriculoture



    // Nursing



    // Physical Education








    // CRC Placement

    public function crc_home()
    {
        return view('university.crc.crc_home');
    }

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
        $employees = Employees::orderBy('designation_id', 'ASC')->where('department_id', 21)->where('status', 'Y')->get();

        return view('university.crc.crc_team', compact('employees'));
    }

    public function our_recruiters()
    {
        return view('university.crc.our_recruiters');
    }
    public function crc_industry_visits()
    {
        return view('university.crc.crc_industry_visits');
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
        $testimonials = Testimonials::where('display_crc_department', 'Y')
            ->where('status', 'Y')
            ->get();
        return view('university.crc.crc_student_testi', compact('testimonials'));
    }



    // alumni  
    public function alumni_home()
    {
        $news = News::where('status', 1)
            ->where('category', 'Alumni')
            ->whereNotNull('monaco_image_path')
            ->where('monaco_image_path', '!=', '')
            ->select('event_title', 'event_description', 'event_date', 'ti_path', 'n_slug', 'monaco_image_path')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $activeBlogs = Blogs::where('status', 1)
            ->orderBy('posted_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->take(6)
            ->get();

        // Format the date and pass blogs to the view
        foreach ($activeBlogs as $blog) {
            $blog->formatted_date = \Carbon\Carbon::parse($blog->posted_at)->format('D, M d'); // Format date as Mon, Feb 12
        }
        return view('university.alumni.alumni', compact('news', 'activeBlogs'));
    }
    public function alumni_overview()
    {
        return view('university.alumni.alumni_about');
    }
    public function alumni_president_message()
    {
        return view('university.alumni.alumni_president');
    }
    public function alumni_association()
    {
        return view('university.alumni.alumni_association');
    }
    public function alumni_coordination()
    {
        return view('university.alumni.alumni_coordination');
    }
    public function alumni_event_calendar()
    {
        return view('university.alumni.alumni_event_calendar');
    }
    public function alumni_donation()
    {
        return view('university.alumni.alumni_donation');
    }
    public function alumni_gallery()
    {
        return view('university.alumni.alumni_gallery');
    }
    public function alumni_faq()
    {
        return view('university.alumni.alumni_faq');
    }
    public function alumni_contactus()
    {
        return view('university.alumni.alumni_contact_us');
    }


    // Teaching Facilities 

    public function teaching_facility()
    {
        return view('university.teaching_facility.teaching_facility');
    }
    public function central_instrument_facility()
    {
        return view('university.teaching_facility.central_instrument_facility');
    }
    public function simulation_lab()
    {
        return view('university.teaching_facility.simulation_lab');
    }
    public function skill_lab()
    {
        return view('university.teaching_facility.skill_lab');
    }
    public function media_laboratory_studio()
    {
        return view('university.teaching_facility.media_laboratory_studio');
    }
    public function museum()
    {
        return view('university.teaching_facility.museum');
    }
    public function business_lab()
    {
        return view('university.teaching_facility.business_lab');
    }
    public function animal_house()
    {
        return view('university.teaching_facility.animal_house');
    }
    public function eresources_studio_lab()
    {
        return view('university.teaching_facility.eresources_studio_lab');
    }
    public function tmimt_business_lab()
    {
        return view('university.teaching_facility.tmimt_business_lab');
    }
    public function dst_nanotechnology_lab()
    {
        return view('university.teaching_facility.dst_nanotechnology_lab');
    }

    public function class_room_medical()
    {
        return view('university.teaching_facility.classroom_medical');
    }
    public function class_room_nursing()
    {
        return view('university.teaching_facility.classroom_nursing');
    }

    public function class_room_paramedical()
    {
        return view('university.teaching_facility.classroom_paramedical');
    }

    public function class_room_physicaleducation()
    {
        return view('university.teaching_facility.classroom_physicaleducation');
    }

    public function class_room_physiotherapy()
    {
        return view('university.teaching_facility.classroom_physiotherapy');
    }

    public function class_room_pharmacy()
    {
        return view('university.teaching_facility.classroom_pharmacy');
    }

    public function class_room_education()
    {
        return view('university.teaching_facility.classroom_education');
    }

    public function class_room_agriculture()
    {
        return view('university.teaching_facility.classroom_agriculture');
    }

    public function class_room_finearts()
    {
        return view('university.teaching_facility.classroom_finearts');
    }

    public function class_room_management()
    {
        return view('university.teaching_facility.classroom_management');
    }

    public function class_room_ccsit()
    {
        return view('university.teaching_facility.classroom_ccsit');
    }

    public function class_room_engineering()
    {
        return view('university.teaching_facility.classroom_engineering');
    }

    public function class_room_dental()
    {
        return view('university.teaching_facility.classroom_dental');
    }

    public function class_room_law()
    {
        return view('university.teaching_facility.classroom_law');
    }



    // PHD Programmes

    public function phd_programmes_offered()
    {
        return view('university.programme.phd_programmes_offered');
    }

    // MAster Programmes

    public function master_programme_page()
    {
        // Fetch active colleges that offer programmes
        $colleges = Colleges::where('for_programmes', 'Y')
            ->where('status', '1')
            ->orderBy('short_name', 'ASC')
            ->get()
            ->reject(function ($college) {
                return $college->cd_id == 17;  // Excluding a specific college, if needed
            });

        // Fetch programs that have a status of 'Y' and are associated with a college
        $programs = Programmes::whereNotNull('cd_id')
            ->where('status', 'Y')  // Filter to include only programs with 'Y' status
            ->get();

        // Group the programs by their college ID (cd_id)
        $groupedPrograms = $programs->groupBy('cd_id');

        // Debugging: Check if programs exist for College ID 16
        if (isset($groupedPrograms[16])) {
            Log::debug("Programs for College ID 16: ", $groupedPrograms[16]->toArray());
        } else {
            Log::debug("No programs found for College ID 16.");
        }

        // Pass colleges and grouped programs to the view
        return view('university.programme.master_programme_page', compact('colleges', 'groupedPrograms'));
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
