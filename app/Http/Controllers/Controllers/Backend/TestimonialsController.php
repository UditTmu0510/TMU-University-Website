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
use App\Models\Testimonials;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class TestimonialsController extends Controller
{
    
    public function AllTestimonials()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $college = Colleges::orderBy('cd_id','desc')->get();
        $testimonials = Testimonials::orderBy('story_id','desc')->get();
        return view('admin.backend.pages.testimonials.all_testimonials',compact('profileData','college','testimonials'));


    }

    public function AddTestimonial(Request $request)
    {
    if($request->isMethod('post'))
    {

        try{
            DB::beginTransaction();
          $prog_id = $request->input('prog_id');
        $cd_id = $request->input('cd_id');
        $story_type = $request->input('story_type');
        $testimonial_format_type = $request->input('testimonial_format_type');
        $student_name = $request->input('student_name');
        $admitted_year = $request->input('admitted_year');
        $passout_year = $request->input('passout_year');
        $currently_working_at = $request->input('currently_working_at');
        $display_university_main = $request->input('display_university_main');
        $display_college_main = $request->input('display_college_main');
        $display_programme_page = $request->input('display_programme_page');
                $display_ctld_department = $request->input('display_ctld_department');
        $display_crc_department = $request->input('display_crc_department');
        $display_alumni_department = $request->input('display_alumni_department');
        $status = $request->input('status');
        $LinkedIn = $request->input('linkedin_url');
        $testimonial_text = $request->input('area', 'na');
        $video_path = $request->input('video_path', 'na');
        
        // Form Validation Conditions Start
        $request->validate([
            'cd_id' => 'required',
            'prog_id' => 'required',
            'story_type' => 'required',
            'testimonial_format_type' => 'required',
            'student_name' => 'required',
            'admitted_year' => 'required',
            'passout_year' => 'required',
            'display_university_main' => 'required',
            'display_college_main' => 'required',
            'display_programme_page' => 'required',
            'status' => 'required',
            'linkedin_url' => 'required',
                        'display_ctld_department' => 'required',
            'display_crc_department' => 'required',
            'display_alumni_department' => 'required'
        ]);
        date_default_timezone_set('Asia/Kolkata');

        $filePaths = [];
        $field_names = array('thumbnail_path'=>'uploads/testimonial_images');
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
        $testimonialData = array();
       if($testimonial_format_type == "VIT")
       {
        $testimonialData = [
            'cd_id' => $cd_id,
            'prog_id' => $prog_id,
            'story_type' => $story_type,
            'testimonial_format_type' => $testimonial_format_type,
            'student_name' => $student_name,
            'admitted_year' => $admitted_year,
            'passout_year' => $passout_year,
            'currently_working_at' => $currently_working_at,
            'display_university_main' => $display_university_main,
            'display_college_main' => $display_college_main,
            'display_programme_page' => $display_programme_page,
                        'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
            'status' => $status,
            'linkedin_url' => $LinkedIn,
            'video_path' => $video_path,
            'testimonial_text' => $testimonial_text

        ];
    }elseif($testimonial_format_type == "VT")
    {

        $testimonialData = [
            'cd_id' => $cd_id,
            'prog_id' => $prog_id,
            'story_type' => $story_type,
            'testimonial_format_type' => $testimonial_format_type,
            'student_name' => $student_name,
            'admitted_year' => $admitted_year,
            'passout_year' => $passout_year,
            'currently_working_at' => $currently_working_at,
            'display_university_main' => $display_university_main,
            'display_college_main' => $display_college_main,
            'display_programme_page' => $display_programme_page,
                        'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
            'status' => $status,
            'linkedin_url' => $LinkedIn,
            'video_path' => $video_path,
            'testimonial_text' => $testimonial_text
        ];
    }elseif($testimonial_format_type == "IT")
    {

        $testimonialData = [
            'cd_id' => $cd_id,
            'prog_id' => $prog_id,
            'story_type' => $story_type,
            'testimonial_format_type' => $testimonial_format_type,
            'student_name' => $student_name,
            'admitted_year' => $admitted_year,
            'passout_year' => $passout_year,
            'currently_working_at' => $currently_working_at,
            'display_university_main' => $display_university_main,
            'display_college_main' => $display_college_main,
            'display_programme_page' => $display_programme_page,
                        'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
            'status' => $status,
            'linkedin_url' => $LinkedIn,
            'testimonial_text' => $testimonial_text
        ];
    }elseif($testimonial_format_type == "VI")
    {

        $testimonialData = [
            'cd_id' => $cd_id,
            'prog_id' => $prog_id,
            'story_type' => $story_type,
            'testimonial_format_type' => $testimonial_format_type,
            'student_name' => $student_name,
            'admitted_year' => $admitted_year,
            'passout_year' => $passout_year,
            'currently_working_at' => $currently_working_at,
            'display_university_main' => $display_university_main,
            'display_college_main' => $display_college_main,
            'display_programme_page' => $display_programme_page,
                        'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
            'status' => $status,
            'linkedin_url' => $LinkedIn,
            'video_path' => $video_path
        ];
    }

        $testimonial = Testimonials::create($testimonialData + $filePaths);
if($testimonial)
{
        DB::commit();
        Session::flash('success', 'Testimonial Added Successfully !');
}

    }catch(ValidationException $e)
    {
        DB::rollBack();
        Session::flash('error','Validation Error in Adding Testimonial'.$e->getMessage());

    }catch(Exception $e)
    {
        DB::rollBack();
        Session::flash('error','Error in Adding Testimonial'.$e->getMessage());

    }

    return redirect()->route('all.testimonials');

    }else{
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $colleges = Colleges::orderBy('cd_name','ASC')->get();
        return view('admin.backend.pages.testimonials.add_testimonial',compact('profileData','colleges'));
    }

    }



public function EditTestimonial(Request $request,$id)
{
    
if ($request->isMethod('post')) {
// Handle POST request logic here (if needed)
try{
    DB::beginTransaction();
    $testimonial_object = Testimonials::where('story_id', $id);
    $prog_id = $request->input('prog_id');
    $cd_id = $request->input('cd_id');
    $story_type = $request->input('story_type');
    $testimonial_format_type = $request->input('testimonial_format_type');
    $student_name = $request->input('student_name');
    $admitted_year = $request->input('admitted_year');
    $passout_year = $request->input('passout_year');
    $currently_working_at = $request->input('currently_working_at');
    $display_university_main = $request->input('display_university_main');
    $display_college_main = $request->input('display_college_main');
    $display_programme_page = $request->input('display_programme_page');
                    $display_ctld_department = $request->input('display_ctld_department');
        $display_crc_department = $request->input('display_crc_department');
        $display_alumni_department = $request->input('display_alumni_department');
    $status = $request->input('status');
    $LinkedIn = $request->input('linkedin_url');
    $testimonial_text = $request->input('area', 'na');
    $video_path = $request->input('video_path', 'na');

    $request->validate([
        'cd_id' => 'required',
        'prog_id' => 'required',
        'story_type' => 'required',
        'testimonial_format_type' => 'required',
        'student_name' => 'required',
        'admitted_year' => 'required',
        'passout_year' => 'required',
        'display_university_main' => 'required',
        'display_college_main' => 'required',
        'display_programme_page' => 'required',
                            'display_ctld_department' => 'required',
            'display_crc_department' => 'required',
            'display_alumni_department' => 'required',
        'status' => 'required',
        'linkedin_url' => 'required'
    ]);
    date_default_timezone_set('Asia/Kolkata');

    $filePaths = [];
    $field_names = array('thumbnail_path'=>'uploads/testimonial_images');
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
        $testimonialData = array();
        if($testimonial_format_type == "VIT")
        {
         $testimonialData = [
             'cd_id' => $cd_id,
             'prog_id' => $prog_id,
             'story_type' => $story_type,
             'testimonial_format_type' => $testimonial_format_type,
             'student_name' => $student_name,
             'admitted_year' => $admitted_year,
             'passout_year' => $passout_year,
             'currently_working_at' => $currently_working_at,
             'display_university_main' => $display_university_main,
             'display_college_main' => $display_college_main,
             'display_programme_page' => $display_programme_page,
                                     'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
             'status' => $status,
             'linkedin_url' => $LinkedIn,
             'video_path' => $video_path,
             'testimonial_text' => $testimonial_text
 
         ];
     }elseif($testimonial_format_type == "VT")
     {
 
         $testimonialData = [
             'cd_id' => $cd_id,
             'prog_id' => $prog_id,
             'story_type' => $story_type,
             'testimonial_format_type' => $testimonial_format_type,
             'student_name' => $student_name,
             'admitted_year' => $admitted_year,
             'passout_year' => $passout_year,
             'currently_working_at' => $currently_working_at,
             'display_university_main' => $display_university_main,
             'display_college_main' => $display_college_main,
             'display_programme_page' => $display_programme_page,
                                     'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
             'status' => $status,
             'linkedin_url' => $LinkedIn,
             'video_path' => $video_path,
             'testimonial_text' => $testimonial_text
         ];
     }elseif($testimonial_format_type == "IT")
     {
 
         $testimonialData = [
             'cd_id' => $cd_id,
             'prog_id' => $prog_id,
             'story_type' => $story_type,
             'testimonial_format_type' => $testimonial_format_type,
             'student_name' => $student_name,
             'admitted_year' => $admitted_year,
             'passout_year' => $passout_year,
             'currently_working_at' => $currently_working_at,
             'display_university_main' => $display_university_main,
             'display_college_main' => $display_college_main,
             'display_programme_page' => $display_programme_page,
                                     'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
             'status' => $status,
             'linkedin_url' => $LinkedIn,
             'testimonial_text' => $testimonial_text
         ];
     }elseif($testimonial_format_type == "VI")
     {
 
         $testimonialData = [
             'cd_id' => $cd_id,
             'prog_id' => $prog_id,
             'story_type' => $story_type,
             'testimonial_format_type' => $testimonial_format_type,
             'student_name' => $student_name,
             'admitted_year' => $admitted_year,
             'passout_year' => $passout_year,
             'currently_working_at' => $currently_working_at,
             'display_university_main' => $display_university_main,
             'display_college_main' => $display_college_main,
             'display_programme_page' => $display_programme_page,
                                     'display_ctld_department' => $display_ctld_department,
            'display_crc_department' => $display_crc_department,
            'display_alumni_department' => $display_alumni_department,
             'status' => $status,
             'linkedin_url' => $LinkedIn,
             'video_path' => $video_path
         ];
     }
 
         $testimonial = $testimonial_object->update($testimonialData + $filePaths);
         if($testimonial)
         {
                 DB::commit();
                 Session::flash('success', 'Testimonial Updated Successfully !');
         }


    }catch(ValidationException $e)
    {
        DB::rollBack();
        Session::flash('error','Validation Error in Updating Testimonial'.$e->getMessage());

    }catch(Exception $e)
    {
        DB::rollBack();
        Session::flash('error','Error in Updating Testimonial'.$e->getMessage());

    }
    return redirect()->route('all.testimonials');

    } else {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to continue.');
        }
        
        $user_id = $user->id;
        $profileData = User::find($user_id);
        $colleges = Colleges::all();
        
        // Fetch testimonials as an associative array
        $testimonial = Testimonials::where('story_id',$id)->first();

        if (!$testimonial) {
            Session::flash('error', 'Error in Finding Testimonial Id');
            return redirect()->route('all.testimonials');
        }


        return view('admin.backend.pages.testimonials.edit_testimonial', compact('profileData', 'colleges', 'testimonial'));
    }
}


public function DeleteTestimonial($story_id)
{
try{
$testimonial = Testimonials::where('story_id',$story_id);
$testimonial->delete();
Session::flash('success','Testimonial deleted successfully');
}catch(ModelNotFoundException $e)
{
Session::flash('error','Testimonial not found');
}catch(\Exception $e)
{
Session::flash('error','Error in deleting testimonial');
}
return redirect()->route('all.testimonials');
}
    

}
