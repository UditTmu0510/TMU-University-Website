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
use App\Models\Departments;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;


class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $colleges = Colleges::orderBy('cd_id', 'desc')->get();
        $departments = Departments::orderBy('department_name', 'asc')->get();
        return view('admin.backend.pages.departments.all_departments', compact('profileData', 'departments','colleges'));
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
        if($request->isMethod('post')) { 
            try{ 
                $cd_id = $request->input('cd_id'); 
                $department_name = $request->input('department_name'); 
                $status = $request->input('status'); 
                $priority = $request->input('priority'); 
                $request->validate([ 
                    'cd_id' => 'required', 
                    'department_name' => 'required', 
                    'status' => 'required', 
                    'priority' => 'required' 
                ]); 
                date_default_timezone_set('Asia/Kolkata');
                 $departmentData = [ 
                    'cd_id' => $cd_id, 
                    'department_name' => $department_name, 
                    'status' => $status, 
                    'priority' => $priority 
                ]; 
                $departments = Departments::create($departmentData); 
                if($departments) { 
                    Session::flash('success', 'Department Added Successfully !'); 
                } 
            }catch(ValidationException $e) { 
                Session::flash('error','Validation Error in Adding Department'.$e->getMessage()); 
            }catch(Exception $e) { 
                Session::flash('error','Error in Adding Department'.$e->getMessage()); 
            } 
            return redirect()->route('all.departments'); 
        }else{ 
            $id = Auth::user()->id; 
            $profileData = User::find($id); 
            $colleges = Colleges::orderBy('cd_name','ASC')->get(); 
            $max_id = Departments::max('department_id');
            $priority = $max_id + 1;
            return view('admin.backend.pages.departments.add_department',compact('profileData','colleges','priority')); 
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
    $cd_id = $request->input('cd_id'); 
    $department_name = $request->input('department_name'); 
    $status = $request->input('status'); 
    $priority = $request->input('priority'); 
    $request->validate([ 
        'cd_id' => 'required', 
        'department_name' => 'required', 
        'status' => 'required', 
        'priority' => 'required' 
    ]); 
    date_default_timezone_set('Asia/Kolkata');
     $departmentData = [ 
        'cd_id' => $cd_id, 
        'department_name' => $department_name, 
        'status' => $status, 
        'priority' => $priority 
    ]; 
    $department_object = Departments::where('department_id',$id);
    $department = $department_object->update($departmentData);
    if($department)
    {
        Session::flash('success','Department Updated Successfully');
    }

}catch(ValidationException $e)
{

    Session::flash('error','Validation Error in Updating Department'.$e->getMessage());

}catch(Exception $e){
    Session::flash('error','Error in Updating Department'.$e->getMessage());

}

return redirect()->route('all.departments');

}else{
try{
$department = Departments::where('department_id',$id)->first();
$colleges = Colleges::orderBy('cd_name','ASC')->get();
$user_id = Auth::user()->id;
$profileData = User::find($user_id);
return view('admin.backend.pages.departments.edit_department',compact('department','colleges','profileData'));

}catch(ModelNotFoundExcption $e){
    Session::flash('error','Department Id not found'.$e->getMessage());
}catch(Ecxeption $e){
    Session::flash('error','Error in opening department Page'.$e->getMessage());

}


        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
$department = Departments::where('department_id',$id);
$department->delete();
Session::flash('success','Department Deleted Successfully');

        }catch(ModelNotFoundException $e){
Session::flash('error','Department Id not Found'.$e->getMessage());

        }catch(\Exception $e){
            Session::flash('error','Error in deleting department'.$e->getMessage());

        }
        return redirect()->route('all.departments');
    }
}
