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
use App\Models\Faqs;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class FaqsController extends Controller
{

    public function AllFaqs()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $college = Colleges::orderBy('cd_id','desc')->get();
        $faqs = Faqs::orderBy('faq_id','desc')->get();
        return view('admin.backend.pages.faqs.view_all_faqs',compact('profileData','college','faqs'));
    }

    
    public function AddFaq(Request $request)
    {
if($request->isMethod('post'))
{
    try{

        $prog_id = $request->input('prog_id');
        $faq_question = $request->input('faq_question');
        $cd_id = $request->input('cd_id');
        $faq_answer = $request->input('area');
        $display_university_main = $request->input('display_university_main');
        $display_college_main = $request->input('display_college_main');
        $display_programme_page = $request->input('display_programme_page');
        $status = $request->input('status');

        $request->validate([
            'cd_id' => 'required',
            'prog_id' => 'required',
            'faq_question' => 'required',
            'display_university_main' => 'required',
            'display_college_main' => 'required',
            'display_programme_page' => 'required',
            'status' => 'required',
            'area' => 'required'
        ]);
        date_default_timezone_set('Asia/Kolkata');

         $FaqsData = [
            'cd_id' => $cd_id,
            'prog_id' => $prog_id,
            'faq_question' => $faq_question,
            'display_university_main' => $display_university_main,
            'display_college_main' => $display_college_main,
            'display_programme_page' => $display_programme_page,
            'status' => $status,
            'faq_answer' => $faq_answer
         ];

         $faqs = Faqs::create($FaqsData);
if($faqs)
{

        Session::flash('success', 'Faq Added Successfully !');
}

    }catch(ValidationException $e)
    {

        Session::flash('error','Validation Error in Adding Faqs'.$e->getMessage());
    }catch(Exception $e)
    {
        Session::flash('error','Error in Adding Faq'.$e->getMessage());

    }
    return redirect()->route('all.faqs');
}else{
    $id = Auth::user()->id;
    $profileData = User::find($id);
    $colleges = Colleges::orderBy('cd_name','ASC')->get();
    return view('admin.backend.pages.faqs.add_faq',compact('profileData','colleges'));
}
    }

    public function EditFaq(Request $request,$id)
{
if($request->isMethod('post'))
{
    try{
        $faq_object = Faqs::where('faq_id',$id);
        $prog_id = $request->input('prog_id');
        $faq_question = $request->input('faq_question');
        $cd_id = $request->input('cd_id');
        $faq_answer = $request->input('area');
        $display_university_main = $request->input('display_university_main');
        $display_college_main = $request->input('display_college_main');
        $display_programme_page = $request->input('display_programme_page');
        $status = $request->input('status');

        $request->validate([
            'cd_id' => 'required',
            'prog_id' => 'required',
            'faq_question' => 'required',
            'display_university_main' => 'required',
            'display_college_main' => 'required',
            'display_programme_page' => 'required',
            'status' => 'required',
            'area' => 'required'
        ]);
        date_default_timezone_set('Asia/Kolkata');

         $FaqsData = [
            'cd_id' => $cd_id,
            'prog_id' => $prog_id,
            'faq_question' => $faq_question,
            'display_university_main' => $display_university_main,
            'display_college_main' => $display_college_main,
            'display_programme_page' => $display_programme_page,
            'status' => $status,
            'faq_answer' => $faq_answer
         ];

         $faqs = $faq_object->update($FaqsData);
if($faqs)
{

        Session::flash('success', 'Faq Updated Successfully !');
}

    }catch(ValidationException $e)
    {

        Session::flash('error','Validation Error in Updating Faqs'.$e->getMessage());
    }catch(Exception $e)
    {
        Session::flash('error','Error in Updating Faq'.$e->getMessage());

    }
    return redirect()->route('all.faqs');

}else{
 
    $user_id = Auth::user()->id;
    $profileData = User::find($user_id);
    $colleges = Colleges::all();
    $faq = Faqs::where('faq_id',$id)->first();
    if (!$faq) {
        Session::flash('error', 'Error in Finding Faq Id');
        return redirect()->route('all.recruiters');
    }
    return view('admin.backend.pages.faqs.edit_faq',compact('profileData', 'colleges', 'faq'));

}

}


public function DeleteFaq($faq_id)
{
try{
$faq = Faqs::where('faq_id',$faq_id);
$faq->delete();
Session::flash('success','Faq deleted successfully');

}catch(ModelNotFoundException $e){
    Session::flash('error','Faq not found'.$e->getMessage());

}catch(\Exception $e){

    Session::flash('error','Error in deleting Faq'.$e->getMessage());
}
return redirect()->route('all.faqs');
}
}