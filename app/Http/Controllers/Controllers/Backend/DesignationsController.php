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
use App\Models\Designations;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class DesignationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user_id = Auth::user()->id;
       $profileData = User::find($user_id);
       $designations = Designations::orderBy('designation_name','ASC')->get();
       return view('admin.backend.pages.designations.all_designations',compact('profileData','designations'));
    }

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
        if($request->isMethod('post')){
try{
    $designation_name = $request->input('designation_name'); 
    $status = $request->input('status'); 
    $priority = $request->input('priority'); 
    $request->validate([ 
        'designation_name' => 'required', 
        'status' => 'required', 
        'priority' => 'required' 
    ]); 
    date_default_timezone_set('Asia/Kolkata');
     $designationData = [  
        'designation_name' => $designation_name, 
        'status' => $status, 
        'priority' => $priority 
    ]; 
    $designations = Designations::create($designationData); 
    if($designations) { 
        Session::flash('success', 'Designation Added Successfully !'); 
    } 

}catch(ValidationException $e){

    Session::flash('error', 'Validation Error in adding designation'.$e->getMessage());

}catch(Exception $e)
{

    Session::flash('error', 'Error in adding designation'.$e->getMessage());

}
return redirect()->route('all.designations');

        }else{

$user_id = Auth::user()->id;
$profileData = User::find($user_id);
$max_id = Designations::max('designation_id');
$priority = $max_id + 1;
return view('admin.backend.pages.designations.add_designation',compact('profileData','priority'));

        }
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
    
        if($request->isMethod('post'))
        {
            try{
                $designation_object = Designations::where('designation_id',$id);
                $designation_name = $request->input('designation_name'); 
                $status = $request->input('status'); 
                $priority = $request->input('priority'); 
                $request->validate([ 
                    'designation_name' => 'required', 
                    'status' => 'required', 
                    'priority' => 'required' 
                ]); 
                date_default_timezone_set('Asia/Kolkata');
                 $designationData = [  
                    'designation_name' => $designation_name, 
                    'status' => $status, 
                    'priority' => $priority 
                ]; 
                $designations = $designation_object->update($designationData); 
                if($designations) { 
                    Session::flash('success', 'Designation Updated Successfully !'); 
                } 

            }catch(ValidationException $e){

                Session::flash('error', 'Validation Error in Updating Designations'.$e->getMessage());
            }catch(Exception $e)
            {
                Session::flash('error', 'Error in Updating Designations'.$e->getMessage());

            }
return redirect()->route('all.designations');

        }else{

            $designation = Designations::where('designation_id',$id)->first();
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            return view('admin.backend.pages.designations.edit_designation',compact('designation','profileData'));

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $designation = Designations::where('designation_id',$id);
            $designation->delete();
            Session::flash('success','Designation Deleted Successfully');
            
                    }catch(ModelNotFoundException $e){
            Session::flash('error','Designationt Id not Found'.$e->getMessage());
            
                    }catch(\Exception $e){
                        Session::flash('error','Error in deleting designation'.$e->getMessage());
            
                    }
                    return redirect()->route('all.designations');
                }
    
}
