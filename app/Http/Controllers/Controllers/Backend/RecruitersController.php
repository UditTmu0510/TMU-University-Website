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
use App\Models\Recruiters;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class RecruitersController extends Controller
{
    public function AllRecruiters()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $college = Colleges::orderBy('cd_id','desc')->get();
        $recruiters = Recruiters::orderBy('recruiter_id','desc')->get();
        return view('admin.backend.pages.recruiters.all_recruiters',compact('profileData','college','recruiters'));
    }

    public function AddRecruiter(Request $request)
    {
if($request->isMethod('post'))
{
    try{

        $prog_id = $request->input('prog_id');
        $alt_tag = $request->input('alt_tag');
        $cd_id = $request->input('cd_id');
        $recruiter_name = $request->input('recruiter_name');
        $display_university_main = $request->input('display_university_main');
        $display_college_main = $request->input('display_college_main');
        $display_programme_main = $request->input('display_programme_main');
        $status = $request->input('status');

        $request->validate([
            'cd_id' => 'required',
            'prog_id' => 'required',
            'recruiter_name' => 'required',
            'display_university_main' => 'required',
            'display_college_main' => 'required',
            'display_programme_main' => 'required',
            'status' => 'required',
            'alt_tag' => 'required'
        ]);
        date_default_timezone_set('Asia/Kolkata');
         $filePaths = [];
         $field_names = array('recruiter_image_path'=>'uploads/recruiter_images');
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

         $recruitersData = [
            'cd_id' => $request->cd_id,
            'prog_id' => $request->prog_id,
            'recruiter_name' => $request->recruiter_name,
            'display_university_main' => $request->display_university_main,
            'display_college_main' => $request->display_college_main,
            'display_programme_main' => $request->display_programme_main,
            'status' => $request->status,
            'alt_tag' => $alt_tag
         ];

         $recruiters = Recruiters::create($recruitersData + $filePaths);
if($recruiters)
{

        Session::flash('success', 'Recruiter Added Successfully !');
}

    }catch(ValidationException $e)
    {

        Session::flash('error','Validation Error in Adding Recruiter'.$e->getMessage());
    }catch(Exception $e)
    {
        Session::flash('error','Error in Adding Recruiter'.$e->getMessage());

    }
    return redirect()->route('all.recruiters');

}else{
    $id = Auth::user()->id;
    $profileData = User::find($id);
    $colleges = Colleges::orderBy('cd_name','ASC')->get();
    return view('admin.backend.pages.recruiters.add_recruiter',compact('profileData','colleges'));

}
}

public function DeleteRecruiter($recruiter_id)
{
try{
$recruiter = Recruiters::where('recruiter_id',$recruiter_id);
$recruiter->delete();
Session::flash('success','Recruiter deleted successfully');

}catch(ModelNotFoundException $e){
    Session::flash('error','Testimonial not found'.$e->getMessage());

}catch(\Exception $e){

    Session::flash('error','Error in deleting Recruiter'.$e->getMessage());
}
return redirect()->route('all.recruiters');
}

public function EditRecruiter(Request $request,$id)
{
if($request->isMethod('post'))
{
    try{
        $recruiter_object = Recruiters::where('recruiter_id',$id);
        $prog_id = $request->input('prog_id');
        $alt_tag = $request->input('alt_tag');
        $cd_id = $request->input('cd_id');
        $recruiter_name = $request->input('recruiter_name');
        $display_university_main = $request->input('display_university_main');
        $display_college_main = $request->input('display_college_main');
        $display_programme_main = $request->input('display_programme_main');
        $status = $request->input('status');

        $request->validate([
            'cd_id' => 'required',
            'prog_id' => 'required',
            'recruiter_name' => 'required',
            'display_university_main' => 'required',
            'display_college_main' => 'required',
            'display_programme_main' => 'required',
            'status' => 'required',
            'alt_tag' => 'required'
        ]);
        date_default_timezone_set('Asia/Kolkata');
         $filePaths = [];
         $field_names = array('recruiter_image_path'=>'uploads/recruiter_images');
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

         $recruitersData = [
            'cd_id' => $request->cd_id,
            'prog_id' => $request->prog_id,
            'recruiter_name' => $request->recruiter_name,
            'display_university_main' => $request->display_university_main,
            'display_college_main' => $request->display_college_main,
            'display_programme_main' => $request->display_programme_main,
            'status' => $request->status,
            'alt_tag' => $alt_tag
         ];

         $recruiters = $recruiter_object->update($recruitersData + $filePaths);

if($recruiters)
{

        Session::flash('success', 'Recruiter Updated Successfully !');
}

    }catch(ValidationException $e)
    {

        Session::flash('error','Validation Error in Updating Recruiter'.$e->getMessage());
    }catch(Exception $e)
    {
        Session::flash('error','Error in Updating Recruiter'.$e->getMessage());

    }
    return redirect()->route('all.recruiters');

}else{
 
    $user_id = Auth::user()->id;
    $profileData = User::find($user_id);
    $colleges = Colleges::all();
    $recruiter = Recruiters::where('recruiter_id',$id)->first();
    if (!$recruiter) {
        Session::flash('error', 'Error in Finding Recruiter Id');
        return redirect()->route('all.recruiters');
    }
    return view('admin.backend.pages.recruiters.edit_recruiter', compact('profileData', 'colleges', 'recruiter'));

}

}

}
