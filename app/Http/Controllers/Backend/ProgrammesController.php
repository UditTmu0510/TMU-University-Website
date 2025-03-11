<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Colleges;
use App\Models\Programmes;
use App\Models\ProgrameeFee;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class ProgrammesController extends Controller
{
    public function AllProgrammes()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $college = Colleges::orderBy('cd_id', 'desc')->get();
        $programmes = Programmes::orderBy('prog_id', 'desc')->get();
        return view('admin.backend.pages.programmes.all_programmes', compact('profileData', 'programmes','college'));
    }


 
    


    public function AddProgramme(Request $request)
    {
    if($request->isMethod('post'))
    {

        try{
            DB::beginTransaction();
          $branchId = $request->input('branch_id');
        $cdId = $request->input('cd_id');
        $progName = $request->input('prog_name');
        $progCode = $request->input('prog_code');
        $programmeLevel = $request->input('programme_level');
        $progDurationWithInternship = $request->input('prog_duration_with_intersnhip');
        $progDurationWithoutInternship = $request->input('prog_duration_without_intersnhip');
        $progDurationTypeWithoutInternship = $request->input('prog_duration_type_without_internship');
        $progDurationTypeWithInternship = $request->input('prog_duration_type_with_internship');
        $intake = $request->input('intake');
        $medium = $request->input('medium');
        $eligibility = $request->input('eligibility');
        $criteriaMerit = $request->input('criteria_merit');
        $aboutProg = $request->input('area', 'N/A');
        $scope = $request->input('scope', 'N/A');
        $additionalInformation = $request->input('additional_information', 'N/A');
        $pageSlug = $request->input('page_slug', Str::slug($progName));
        $videoUrl = $request->input('video_url', 'N/A');
        $uspSectionCode = $request->input('usp_section_code');
        $videoSectionFlag = $request->input('video_section_flag');
        $successStoriesSectionFlag = $request->input('success_stories_section_flag');
        $ourRecruitersSectionFlag = $request->input('our_recruiters_section_flag');
        $feeStructureSectionFlag = $request->input('fee_structure_section_flag');
        $scholarshipSectionFlag = $request->input('scholarship_section_flag');
        $eligibilitySectionFlag = $request->input('eligibility_section_flag');
        $faqSectionFlag = $request->input('faq_section_flag');
        $scholarshipScheme = $request->input('scholarship_scheme');
        $programmeByQualification = $request->input('programme_by_qualification');
        $programmeByDiscipline = $request->input('programme_by_discipline');
        $programmeByCategory = $request->input('programme_by_category');
        $studyMaterialFlag = $request->input('study_material_flag');
        $apply_now_button_flag = $request->input('apply_now_button_flag');
        $syllabusFlag = $request->input('syllabus_flag');
        $usp_section_flag = $request->input('usp_section_flag');
        // All the values received through the post method End

        $status = 'Y';

        // Form Validation Conditions Start
        $request->validate([
            'cd_id' => 'required',
            'prog_name' => 'required',
            'prog_code' => 'required',
            'programme_level' => 'required',
            'prog_duration_with_intersnhip' => 'required',
            'prog_duration_without_intersnhip' => 'required',
            'intake' => 'required',
            'medium' => 'required',
            'eligibility' => 'required',
            'criteria_merit' => 'required',
            'usp_section_code' => 'required',
            'usp_section_flag' => 'required',
            'video_section_flag' => 'required',
            'success_stories_section_flag' => 'required',
            'our_recruiters_section_flag' => 'required',
            'fee_structure_section_flag' => 'required',
            'scholarship_section_flag' => 'required',
            'eligibility_section_flag' => 'required',
            'faq_section_flag' => 'required',
            'programme_by_qualification' => 'required',
            'programme_by_discipline' => 'required',
            'programme_by_category' => 'required',
            'study_material_flag' => 'required',
            'syllabus_flag' => 'required',
            'apply_now_button_flag' => 'required'
        ]);
        date_default_timezone_set('Asia/Kolkata');

        $filePaths = [];
        $field_names = array('programme_image_path'=>'uploads/programme_images/','programme_banner_path' => 'uploads/programme_banners/','programme_brochure_path'=>'uploads/programme_brochures/');
        // Image Uploading part is pending.

        foreach($field_names as $field => $file_path)
        {
           if($request->hasFile($field))
           {
            $file = $request->file($field);
            $timestamp = now()->timestamp;
            $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $filePaths[$field] = $file->storeAs($file_path, $filename);
           }

        }
       
        $programmeData = [
            'cd_id' => $cdId,
            'branch_id' => $branchId,
            'prog_name' => $progName,
            'prog_code' => $progCode,
            'programme_level' => $programmeLevel,
            'prog_duration_with_intersnhip' => $progDurationWithInternship,
            'prog_duration_without_intersnhip' => $progDurationWithoutInternship,
            'prog_duration_type_without_internship' => $progDurationTypeWithoutInternship,
            'prog_duration_type_with_internship' => $progDurationTypeWithInternship,
            'intake' => $intake,
            'medium' => $medium,
            'eligibility' => $eligibility,
            'criteria_merit' => $criteriaMerit,
            'about_prog' => $aboutProg,
            'scope' => $scope,
            'additional_information' => $additionalInformation,
            'page_slug' => $pageSlug,
            'video_url' => $videoUrl,
            'usp_section_code' => $uspSectionCode,
            'usp_section_flag' => $usp_section_flag,
            'video_section_flag' => $videoSectionFlag,
            'success_stories_section_flag' => $successStoriesSectionFlag,
            'our_recruiters_section_flag' => $ourRecruitersSectionFlag,
            'fee_structure_section_flag' => $feeStructureSectionFlag,
            'scholarship_section_flag' => $scholarshipSectionFlag,
            'eligibility_section_flag' => $eligibilitySectionFlag,
            'faq_section_flag' => $faqSectionFlag,
            'scholarship_scheme' => $scholarshipScheme,
            'programme_by_qualification' => $programmeByQualification,
            'programme_by_discipline' => $programmeByDiscipline,
            'programme_by_category' => $programmeByCategory,
            'study_material_flag' => $studyMaterialFlag,
            'syllabus_flag' => $syllabusFlag,
            'status' => $status,
            'apply_now_button_flag' => $apply_now_button_flag
        ];

        $programme = Programmes::create($programmeData + $filePaths);

        if ($programme) {
            // Programme inserted successfully
            // Insertion of fees related values
            $feeDescriptions = $request->input('fee_description', []);
            $feePaymentSchedules = $request->input('fee_payment_schedule', []);
            $feeAmounts = $request->input('fee_amount', []);
            $feeStatuses = $request->input('fee_status', []);

            foreach ($feeDescriptions as $key => $feeDescription) {
                $feeData = [
                    'prog_id' => $programme->id,
                    'fee_description' => $feeDescription,
                    'fee_payment_schedule' => $feePaymentSchedules[$key],
                    'fee_amount' => $feeAmounts[$key],
                    'status' => $feeStatuses[$key],
                ];

                ProgrameeFee::create($feeData);
            }
            DB::commit();
            Session::flash('success', 'Programme Added Successfully Successfully !');
        

        }


        
    }catch(ValidationException $e)
    {
        DB::rollBack();
        Session::flash('error','Validation Error in Adding Programmee'.$e->getMessage());

    }catch(Exception $e)
    {
        DB::rollBack();
        Session::flash('error','Error in Adding Programmee'.$e->getMessage());

    }

    return redirect()->route('all.programmes');

    }else{
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $colleges = Colleges::orderBy('cd_name','ASC')->get();
        return view('admin.backend.pages.programmes.add_programme',compact('profileData','colleges'));
    }

    }



    public function EditProgramme(Request $request,$id)
    {
if($request->isMethod('post'))
{
try{

    DB::beginTransaction();
    $programme_object = Programmes::where('prog_id', $id);
    $programmeId = $request->input('prog_id');
    $branchId = $request->input('branch_id');
    $cdId = $request->input('cd_id');
    $progName = $request->input('prog_name');
    $progCode = $request->input('prog_code');
    $programmeLevel = $request->input('programme_level');
    $progDurationWithInternship = $request->input('prog_duration_with_intersnhip');
    $progDurationWithoutInternship = $request->input('prog_duration_without_intersnhip');
    $progDurationTypeWithoutInternship = $request->input('prog_duration_type_without_internship');
    $progDurationTypeWithInternship = $request->input('prog_duration_type_with_internship');
    $intake = $request->input('intake');
    $medium = $request->input('medium');
    $eligibility = $request->input('eligibility');
    $criteriaMerit = $request->input('criteria_merit');
    $aboutProg = $request->input('area', 'N/A');
    $scope = $request->input('scope', 'N/A');
    $additionalInformation = $request->input('additional_information', 'N/A');
    $pageSlug = $request->input('page_slug', Str::slug($progName));
    $videoUrl = $request->input('video_url', 'N/A');
    $uspSectionCode = $request->input('usp_section_code');
       $usp_section_flag = $request->input('usp_section_flag');
    $videoSectionFlag = $request->input('video_section_flag');
    $successStoriesSectionFlag = $request->input('success_stories_section_flag');
    $ourRecruitersSectionFlag = $request->input('our_recruiters_section_flag');
    $feeStructureSectionFlag = $request->input('fee_structure_section_flag');
    $scholarshipSectionFlag = $request->input('scholarship_section_flag');
    $eligibilitySectionFlag = $request->input('eligibility_section_flag');
    $faqSectionFlag = $request->input('faq_section_flag');
    $scholarshipScheme = $request->input('scholarship_scheme');
    $programmeByQualification = $request->input('programme_by_qualification');
    $programmeByDiscipline = $request->input('programme_by_discipline');
    $programmeByCategory = $request->input('programme_by_category');
    $studyMaterialFlag = $request->input('study_material_flag');
    $apply_now_button_flag = $request->input('apply_now_button_flag');
    $syllabusFlag = $request->input('syllabus_flag');
    // All the values received through the post method End
    $status  = $request->input('status');


    // Form Validation Conditions Start
    $request->validate([
        'cd_id' => 'required',
        'prog_id' => 'required',
        'branch_id' => 'required',
        'prog_name' => 'required',
        'prog_code' => 'required',
        'programme_level' => 'required',
        'prog_duration_with_intersnhip' => 'required',
        'prog_duration_without_intersnhip' => 'required',
        'prog_duration_type' => 'required',
        'intake' => 'required',
        'medium' => 'required',
        'eligibility' => 'required',
        'criteria_merit' => 'required',
        'usp_section_code' => 'required',
        'usp_section_flag' => 'required',
        'video_section_flag' => 'required',
        'success_stories_section_flag' => 'required',
        'our_recruiters_section_flag' => 'required',
        'fee_structure_section_flag' => 'required',
        'scholarship_section_flag' => 'required',
        'eligibility_section_flag' => 'required',
        'faq_section_flag' => 'required',
        'programme_by_qualification' => 'required',
        'programme_by_discipline' => 'required',
        'programme_by_category' => 'required',
        'study_material_flag' => 'required',
        'syllabus_flag' => 'required',
        'apply_now_button_flag' => 'required',
        'status' => 'required'
    ]);
    date_default_timezone_set('Asia/Kolkata');

    $filePaths = [];
    $field_names = array('programme_image_path'=>'uploads/programme_images/','programme_banner_path' => 'uploads/programme_banners/','programme_brochure_path'=>'uploads/programme_brochures/');
    // Image Uploading part is pending.

    foreach($field_names as $field => $file_path)
    {
       if($request->hasFile($field))
       {
        $file = $request->file($field);
        $timestamp = now()->timestamp;
        $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $filePaths[$field] = $file->storeAs($file_path, $filename);
       }

    }
   
    $programmeData = [
        'cd_id' => $cdId,
        'branch_id' => $branchId,
        'prog_name' => $progName,
        'prog_code' => $progCode,
        'programme_level' => $programmeLevel,
        'prog_duration_with_intersnhip' => $progDurationWithInternship,
        'prog_duration_without_intersnhip' => $progDurationWithoutInternship,
        'prog_duration_type_without_internship' => $progDurationTypeWithoutInternship,
        'prog_duration_type_with_internship' => $progDurationTypeWithInternship,
        'intake' => $intake,
        'medium' => $medium,
        'eligibility' => $eligibility,
        'criteria_merit' => $criteriaMerit,
        'about_prog' => $aboutProg,
        'scope' => $scope,
        'additional_information' => $additionalInformation,
        'page_slug' => $pageSlug,
        'video_url' => $videoUrl,
        'usp_section_code' => $uspSectionCode,
        'usp_section_flag' => $usp_section_flag,
        'video_section_flag' => $videoSectionFlag,
        'success_stories_section_flag' => $successStoriesSectionFlag,
        'our_recruiters_section_flag' => $ourRecruitersSectionFlag,
        'fee_structure_section_flag' => $feeStructureSectionFlag,
        'scholarship_section_flag' => $scholarshipSectionFlag,
        'eligibility_section_flag' => $eligibilitySectionFlag,
        'faq_section_flag' => $faqSectionFlag,
        'scholarship_scheme' => $scholarshipScheme,
        'programme_by_qualification' => $programmeByQualification,
        'programme_by_discipline' => $programmeByDiscipline,
        'programme_by_category' => $programmeByCategory,
        'study_material_flag' => $studyMaterialFlag,
        'syllabus_flag' => $syllabusFlag,
        'status' => $status,
        'apply_now_button_flag' => $apply_now_button_flag
    ];

   $programme_result=  $programme_object->update($programmeData + $filePaths);
   if($programme_result)
   {
    $fee_id = $request->input('fee_id', []);
    $fee_description = $request->input('fee_description', []);
    $fee_payment_schedule = $request->input('fee_payment_schedule', []);
    $fee_amount = $request->input('fee_amount', []);
    $fee_status = $request->input('fee_status', []);
$fees_data = ProgrameeFee::where('prog_id',$programmeId)->get(); 
$fee_ids_fetched = $fees_data->pluck('fee_id')->toArray();
$nonCommonValuesNew = array_diff($fee_id, $fee_ids_fetched);
$nonCommonValuesOld_tobe_deleted = array_diff($fee_ids_fetched, $fee_id);


// Code for the deletion of the non-common values starts here

if(!empty($nonCommonValuesOld_tobe_deleted))
{
    DB::table('programee_fee')->whereIn('fee_id', $nonCommonValuesOld_tobe_deleted)->delete();
}

// Code for the deletion of the non-common values ends here


// Code for the updation of the old values starts here

for($i =0;$i < count($fee_description);$i++)
{
$current_fee_id = $fee_id[$i];
if(!(in_array($current_fee_id,$nonCommonValuesNew)))
{
$data_fee =[
    'prog_id' => $programmeId,
    'fee_description' => $fee_description[$i],
                    'fee_payment_schedule' => $fee_payment_schedule[$i],
                    'fee_amount' => $fee_amount[$i],
                    'status' => $fee_status[$i]
];

DB::table('programee_fee')->where('fee_id',$current_fee_id)->update($data_fee);


}

}

// Code for the updation of the old values ends here



// Code for the insertion of the new values starts here

if(!empty($nonCommonValuesNew))
{

for($i = 0 ;$i < count($fee_description) ;$i++)
{
     $current_fee_id = $fee_id[$i];
    if(in_array($current_fee_id,$nonCommonValuesNew))
    {
        $data_fee = [
            'prog_id' => $programmeId,
            'fee_description' => $fee_description[$i],
            'fee_payment_schedule' => $fee_payment_schedule[$i],
            'fee_amount' => $fee_amount[$i],
            'status' => $fee_status[$i]
        ];

        DB::table('programee_fee')->insert($data_fee);
    }
}

}


// Code for the insertion of the new values ends here




}else{

    DB::rollBack();
    Session::flash('error','Error in updating the programme');

   }

DB::commit();
Session::flash('success','Programme Updated Successfully');

    

}catch(ValidationException $e)
{

DB::rollBack();
Session::flash('error','Validation Error in updating the programme'.$e->getMessage());

}catch(Exception $e)
{
DB::rollBack();
Session::flash('error','Error in updating the programme'.$e->getMessage());


}
return redirect()->route('all.programmes');

}else{

            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            $colleges = Colleges::orderBy('cd_name','ASC')->get();
            $fees = ProgrameeFee::where('prog_id',$id)->get(); 
            $programme = Programmes::where('prog_id', $id)->first();
            if (!$programme) {
                return redirect()->route('all.programmes');
                Session::flash('error','Error in Finding Programmee Id');
            }
            return view('admin.backend.pages.programmes.edit_programme',compact('profileData','colleges','programme','fees'));
        }


    }


    public function DeleteProgramme($prog_id)
{
    try {
        // Delete related programme_fee records first
        DB::table('programee_fee')->where('prog_id', $prog_id)->delete();
        
        // Delete the program
        $programme = Programmes::where('prog_id',$prog_id);
        $programme->delete();

        Session::flash('success', 'Programme Deleted Successfully');
    } catch (ModelNotFoundException $e) {
        Session::flash('error', 'Programme not found');
    } catch (\Exception $e) {
        Session::flash('error', 'Error in deleting Programme: ' . $e->getMessage());
    }

    return redirect()->route('all.programmes');
}

    

    public function getMasterProgramme(Request $request)
    {
        $cd_id = $request->cdID;
    
        // Search for the records with the given cd_id and status 'Y'
        $response = Programmes::where('cd_id', $cd_id)
                               ->get();
    
        // Check if any records are found
        if ($response->isEmpty()) {
            return response()->json(['error' => 'No records found for the given cd_id'], 404);
        }
    
        // Return the JSON response
        return response()->json($response);
    }
    
    


}
