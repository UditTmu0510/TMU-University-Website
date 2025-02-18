<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Designations;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Colleges;
use App\Models\Employees;
use App\Models\DepartmentDesignation;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class DepartmentDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $college = Colleges::orderBy('cd_id', 'desc')->get();
        $depatmentdesignation = DepartmentDesignation::orderBy('id', 'desc')->get();
        return view('admin.backend.pages.departmentdesignation.all_department_designation', compact('profileData', 'depatmentdesignation','college'));
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
    if ($request->isMethod('post')) {
        try {
            $request->validate([
                'cd_id' => 'required',
                'department_id' => 'required',
                'designation_id' => 'required'
            ]);

            $departmentdesignation = DepartmentDesignation::create($request->all());

            if ($departmentdesignation) {
                Session::flash('success', 'Department Designation Added Successfully');
                return redirect()->route('all.departments.designations');
            }

        } catch (ValidationException $e) {
            Session::flash('error', 'Validation Error: ' . $e->getMessage());
            return redirect()->route('all.departments.designations')->withInput();

        } catch (Exception $e) {
            Session::flash('error', 'Error in Adding Department Designation: ' . $e->getMessage());
            return redirect()->route('all.departments.designations')->withInput();
        }

    } else {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $colleges = Colleges::orderBy('cd_name', 'ASC')->where('status', 1)->get();
        $designations = Designations::orderBy('designation_name', 'ASC')->where('status', 'Y')->get();
        $max_id = Employees::max('employee_id');
        $priority = $max_id + 1;

        return view('admin.backend.pages.departmentdesignation.add_department_designation', compact('profileData', 'colleges', 'designations', 'priority'));
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
        if ($request->isMethod('post')) {
            try {
                $request->validate([
                    'cd_id' => 'required',
                    'department_id' => 'required',
                    'designation_id' => 'required'
                ]);
                $departmentdesignation_object = DepartmentDesignation::where('id',$id);
                
                $cd_id = $request->cd_id;
                $department_id = $request->department_id;
                $designation_id = $request->designation_id;
                $departmentdesignationData = [
                    'cd_id' => $cd_id,
                    'department_id' => $department_id,
                    'designation_id' => $designation_id
                ];
                $departmentdesignation = $departmentdesignation_object->update($departmentdesignationData);
    
                if ($departmentdesignation) {
                    Session::flash('success', 'Department Designation Added Successfully');
                    return redirect()->route('all.departments.designations');
                }
    
            } catch (ValidationException $e) {
                Session::flash('error', 'Validation Error: ' . $e->getMessage());
                return redirect()->route('all.departments.designations')->withInput();
    
            } catch (Exception $e) {
                Session::flash('error', 'Error in Adding Department Designation: ' . $e->getMessage());
                return redirect()->route('all.departments.designations')->withInput();
            }
    
        } else {
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            $colleges = Colleges::orderBy('cd_name','ASC')->where('status',1)->get();
            $designations = Designations::orderBy('designation_name','ASC')->where('status','Y')->get();
            $departmentdesignation = DepartmentDesignation::where('id', $id)->first();
            return view('admin.backend.pages.departmentdesignation.edit_department_designation', compact('profileData','colleges','designations','departmentdesignation'));
;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     try{
            $departmentdesignation = DepartmentDesignation::where('id',$id);
            $departmentdesignation->delete();
            Session::flash('success','Department Designation deleted successfully');

     }catch(ModelNotFoundException $e){
            Session::flash('error','Error in deleting department designation'.$e->getMessage());
     }catch(\Exception $e){
        Session::flash('error','Error in deleting department designation'.$e->getMessage());
        }
        return redirect()->route('all.departments.designations');
    }
}
