<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException; // Corrected namespace
use Exception;
use App\Models\Jobapplication;
use App\Models\Jobappliqualification;
use App\Models\ExamsQualified;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Mail\JobApplicationMail;
use Illuminate\Support\Facades\Mail;

class JobformController extends Controller
{
    // Show the form (GET request)
    public function careers_form()
    {

        $colleges = DB::table('cd_name')->select('cd_id', 'cd_name')->where('status', 1)->get(); // Fetch colleges
        $faculties = DB::table('faculties')->select('fy_id', 'fy_name')->where('status', 'Y')->orderBy('priority', 'ASC')->get(); // Fetch active faculties


        return view('university.university_glimpse.careers_form', compact('colleges', 'faculties'));
    }

    // Store method
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            try {
                DB::beginTransaction();

                $name = $request->name;
                $mobile_no = $request->mobile_no;
                $email = $request->email;
                $pan = $request->pan;
                $aadhar = $request->aadhar;
                $religion = $request->religion;
                $marital_status = $request->marital_status;
                $dob = $request->dob;
                $category = $request->category;
                $present_address = $request->present_address;
                $permanent_address = $request->permanent_address;
                $mode_type = $request->mode_type;
                $exam_degree = $request->exam_degree;
                $board_university = $request->board_university;
                $year_of_passing = $request->year_of_passing;
                $percentage = $request->percentage;
                $passing_year = $request->passing_year;
                $total_experience  = $request->total_experience;
                $academic_experience = $request->academic_experience;
                $industrial_experience = $request->industrial_experience;
                $current_salary = $request->current_salary;
                $expected_salary = $request->expected_salary;
                $curent_comp_name = $request->curent_comp_name;
                $current_comp_category = $request->current_comp_category;
                $current_comp_appointment = $request->current_comp_category;
                $current_comp_designation = $request->current_comp_designation;
                $current_comp_date_of_joining = $request->current_comp_date_of_joining;
                $current_comp_date_of_leaving = $request->current_comp_date_of_leaving;
                $current_comp_date_of_leaving_reason =  $request->current_comp_date_of_leaving_reason;
                $maxId = Jobapplication::max('id');

                // If there are no records yet, set $maxId to 0
                $nextId = $maxId ? $maxId + 1 : 1;

                // Additional validation: If "Dean (Faculty)" is selected, faculty is required
                if ($request->designations == 59) { // Check by ID instead of text
                    $request->validate([
                        'faculty' => 'required|exists:faculties,fy_id'
                    ]);
                }
                
                // Now you can use $nextId as the new ID or for any logic
                // For example, creating a new application with a custom ID logic
                $applicationId = 'TMUHR-' . $nextId;
                // Validate the form input
                $request->validate([
                    'colleges' => 'required|exists:cd_name,cd_id', // Validate that the selected college exists in the `cd_name` table
                    'departments' => 'required|exists:departments,department_id', // Validate that the selected department exists in the `departments` table
                    'designations' => 'required|exists:designations,designation_id', // Validate that the selected designation exists in the `designations` table
                    'name' => 'required|string',
                    'mobile_no' => 'required',
                    'email' => 'required|email',
                    'pan' => 'required',
                    'aadhar' => 'required',
                    'religion' => 'required',
                    'marital_status' => 'required',
                    'dob' => 'required|date',
                    'category' => 'required',
                    'present_address' => 'required',
                    'permanent_address' => 'required',
                    'mode_type' => 'required',
                    'exam_degree' => 'required',
                    'board_university' => 'required',
                    'year_of_passing' => 'required',
                    'percentage' => 'required',
                    'total_experience'  => 'required',
                    'academic_experience' => 'required',
                    'industrial_experience' => 'required',
                    'current_salary' => 'required',
                    'expected_salary' => 'required',
                    'curent_comp_name' => 'required',
                    'current_comp_category' => 'required',
                    'current_comp_appointment' => 'required',
                    'current_comp_designation' => 'required',
                    'current_comp_date_of_joining' => 'required',
                    'current_comp_date_of_leaving' => 'required',
                    'current_comp_date_of_leaving_reason' => 'required'
                ]);

                // Collect personal data
                $personalData = [
                    'application_id' => $applicationId,
                    'cd_id' => $request->colleges, // Store college ID
                    'department_id' => $request->departments, // Store department ID
                    'designation_id' => $request->designations,
                    'faculty' => $request->designations === "Dean (Faculty)" ? 'required|exists:faculties,fy_id' : '',
                    'name' => $name,
                    'mobile_no' => $mobile_no,
                    'application_id' => $applicationId,
                    'email' => $email,
                    'pan' => $pan,
                    'aadhar' => $aadhar,
                    'religion' => $religion,
                    'marital_status' => $marital_status,
                    'dob' => $dob,
                    'category' => $category,
                    'present_address' => $present_address,
                    'permanent_address' => $permanent_address,
                    'mode_type' => $mode_type,
                    'exam_degree' => $exam_degree,
                    'board_university' => $board_university,
                    'year_of_passing' => $year_of_passing,
                    'percentage' => $percentage,
                    'passing_year' => $passing_year,
                    'total_experience'  => $total_experience,
                    'academic_experience' => $academic_experience,
                    'industrial_experience' => $industrial_experience,
                    'current_salary' => $current_salary,
                    'expected_salary' => $expected_salary,
                    'curent_comp_name' => $curent_comp_name,
                    'current_comp_category' => $current_comp_category,
                    'current_comp_appointment' => $current_comp_appointment,
                    'current_comp_designation' => $current_comp_designation,
                    'current_comp_date_of_joining' => $current_comp_date_of_joining,
                    'current_comp_date_of_leaving' => $current_comp_date_of_leaving,
                    'current_comp_date_of_leaving_reason' => $current_comp_date_of_leaving_reason
                ];

                if ($request->designations == 59) { // Check by ID
                    $personalData['fy_id'] = $request->faculty;
                }

                // File uploads (if present)
                $filePaths = [];
                $field_names = ['applicant_resume_path' => 'uploads/job_resumes/'];

                foreach ($field_names as $field => $file_path) {
                    if ($request->hasFile($field)) {
                        $file = $request->file($field);
                        $timestamp = now()->timestamp;
                        $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                        $filePaths[$field] = $file->storeAs($file_path, $filename);
                    }
                }

                // Create personal details record
                $personal_details = Jobapplication::create($personalData + $filePaths);

                // Store qualifications
                if ($personal_details) {
                    $mode_types = $request->input('mode_type', []);
                    $exam_degrees = $request->input('exam_degree', []);
                    $board_universities = $request->input('board_university', []);
                    $qualification_specialization = $request->input('qualification_specialization', []);
                    $years_of_passing = $request->input('year_of_passing', []);
                    $percentages = $request->input('percentage', []);

                    foreach ($mode_types as $key => $mode_type) {
                        $qualificationData = [
                            'application_id' => $personal_details->id,
                            'mode_type' => $mode_type,
                            'exam_degree' => $exam_degrees[$key],
                            'board_university' => $board_universities[$key],
                            'qualification_specialization' => $qualification_specialization[$key],
                            'year_of_passing' => $years_of_passing[$key],
                            'percentage' => $percentages[$key]
                        ];
                        Jobappliqualification::create($qualificationData);
                    }

                    // Store exams qualified
                    $exams_qualified_name = $request->input('exam_qualified_name', []);
                    $exam_qualified_passing_year = $request->input('exam_qualified_passing_year', []);
                    $exam_qualified_subject = $request->input('exam_qualified_subject', []);
                    
                    // Check if there is any valid input
                    if (!empty($exams_qualified_name) && is_array($exams_qualified_name)) {
                        foreach ($exams_qualified_name as $key => $exam_qualified_name) {
                            if (!empty($exam_qualified_name)) { // Ensure the name is not empty
                                $examqualifiedData = [
                                    'application_id' => $personal_details->id,
                                    'exam_qualified_name' => $exam_qualified_name,
                                    'exam_qualified_passing_year' => $exam_qualified_passing_year[$key] ?? null,
                                    'exam_qualified_subject' => $exam_qualified_subject[$key] ?? null
                                ];
                                ExamsQualified::create($examqualifiedData);
                            }
                        }
                    }
                    

                    DB::commit();
                    // $emailData = [
                    //     'name' => $personal_details->name,
                    //     'application_id' => $applicationId,
                    //     'email' => $personal_details->email
                    // ];


                    // // Send confirmation email
                    // Mail::to($personal_details->email)->send(new JobApplicationMail($emailData));
                    Session::flash('success', 'Application Submitted Successfully');
                    Session::flash('application_id', $applicationId);
                    return redirect()->route('job.form');
                } else {
                    DB::rollBack();
                    Session::flash('error', 'Personal Details Error');
                    return redirect()->route('job.form');
                }
            } catch (ValidationException $e) {
                DB::rollBack();
                Session::flash('error', 'Validation error in form submission' . $e->getMessage());
                return redirect()->route('job.form');
            } catch (Exception $e) {
                DB::rollBack();
                Session::flash('error', 'Error in form submission' . $e->getMessage());
                return redirect()->route('job.form');
            }
        }
    }
    public function getDepartments(Request $request)
    {
        $collegeId = $request->college_id;

        // Fetch departments linked to the selected college
        $departments = DB::table('departments')
            ->where('cd_id', $collegeId)
            ->select('department_id', 'department_name')
            ->get();

        return response()->json($departments);
    }

    // Fetch designations dynamically based on selected department
    public function getDesignations(Request $request)
    {
        $departmentId = $request->department_id;

        // Fetch designations linked to the selected department
        $designations = DB::table('department_designation')
            ->join('designations', 'department_designation.designation_id', '=', 'designations.designation_id')
            ->where('department_designation.department_id', $departmentId)
            ->select('designations.designation_id', 'designations.designation_name')
            ->get();

        return response()->json($designations);
    }

    public function getFaculties()
    {
        $faculties = DB::table('faculties')
            ->select('fy_id', 'fy_name')
            ->where('status', 'Y')
            ->orderBy('priority', 'ASC')
            ->get();

        return response()->json($faculties);
    }
}
