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
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $college = Colleges::orderBy('cd_id', 'desc')->get();
        $employees = Employees::orderBy('employee_id', 'desc')->get();
        return view('admin.backend.pages.employees.all_employees', compact('profileData', 'employees','college'));
    }

    public function getEmployeeDepartment(Request $request)
    {
           $cd_id = $request->cdID;
           $response = Departments::orderBy('department_name','ASC')->where('cd_id',$cd_id)->where('status','Y')->get();
           if($response->isEmpty()){
            return response()->json(['error' => 'No response found for the given cd_id'],404);

           }
           return response()->json($response);

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
        try {
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $phone = $request->phone;
            $designation_id = $request->designation_id; // Fixed this
            $department_id = $request->department_id;
            $cd_id = $request->cd_id;
            $is_head = $request->is_head;
            $head_message = $request->area;
            $status = $request->status;
            $priority = $request->priority;

            // Validate request
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'designation_id' => 'required',
                'department_id' => 'required',
                'cd_id' => 'required',
                'is_head' => 'required',
                'status' => 'required',
                'priority' => 'required'
            ]);

            // Set timezone globally if needed, else skip.
            date_default_timezone_set('Asia/Kolkata');

            $filePaths = [];
            $field_names = array('employee_image_path'=>'uploads/employee_images');

            foreach($field_names as $field => $file_path) {
                if($request->hasFile($field)) {
                    $file = $request->file($field);
                    $timestamp = now()->timestamp;
                    $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $filePaths[$field] = $file->storeAs($file_path, $filename);
                }
            }

            $employeeData = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'designation_id' => $designation_id,
                'department_id' => $department_id,
                'cd_id' => $cd_id,
                'is_head' => $is_head,
                'head_message' => $head_message,
                'email' => $email,
                'phone' => $phone,
                'status' => $status,
                'priority' => $priority
            ];

            // Create employee record
            $employee = Employees::create($employeeData + $filePaths);

            if($employee) {
                Session::flash('success','Employee added successfully');
                return redirect()->route('add.employee');
            }

        } catch(Exception $e) {
            Session::flash('error','Error in adding employee: '.$e->getMessage());
            return redirect()->route('add.employee');
        }

    } else {
        // Handle GET request
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $colleges = Colleges::orderBy('cd_name','ASC')->where('status',1)->get();
        $designations = Designations::orderBy('designation_name','ASC')->where('status','Y')->get();
        $max_id = Employees::max('employee_id');
        $priority = $max_id + 1;
        return view('admin.backend.pages.employees.add_employee', compact('profileData','colleges','designations','priority'));
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
        if($request->isMethod('post')){
            try {
                $employee_object = Employees::where('employee_id',$id);
                $first_name = $request->first_name;
                $last_name = $request->last_name;
                $email = $request->email;
                $phone = $request->phone;
                $designation_id = $request->designation_id; // Fixed this
                $department_id = $request->department_id;
                $cd_id = $request->cd_id;
                $is_head = $request->is_head;
                $head_message = $request->area;
                $status = $request->status;
                $priority = $request->priority;
    
                // Validate request
                $request->validate([
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'designation_id' => 'required',
                    'department_id' => 'required',
                    'cd_id' => 'required',
                    'is_head' => 'required',
                    'status' => 'required',
                    'priority' => 'required'
                ]);
    
                // Set timezone globally if needed, else skip.
                date_default_timezone_set('Asia/Kolkata');
    
                $filePaths = [];
                $field_names = array('employee_image_path'=>'uploads/employee_images');
    
                foreach($field_names as $field => $file_path) {
                    if($request->hasFile($field)) {
                        $file = $request->file($field);
                        $timestamp = now()->timestamp;
                        $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                        $filePaths[$field] = $file->storeAs($file_path, $filename);
                    }
                }
    
                $employeeData = [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'designation_id' => $designation_id,
                    'department_id' => $department_id,
                    'cd_id' => $cd_id,
                    'is_head' => $is_head,
                    'head_message' => $head_message,
                       'email' => $email,
                'phone' => $phone,
                    'status' => $status,
                    'priority' => $priority
                ];
    
                // Create employee record
                $employee = $employee_object->update($employeeData + $filePaths);
    
                if($employee) {
                    Session::flash('success','Employee updated successfully');
                    return redirect()->route('all.employees');
                }
    
            } catch(Exception $e) {
                Session::flash('error','Error in updating employee: '.$e->getMessage());
                return redirect()->route('all.employees');
            }
    
        }else {
            // Handle GET request
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            $colleges = Colleges::orderBy('cd_name','ASC')->where('status',1)->get();
            $designations = Designations::orderBy('designation_name','ASC')->where('status','Y')->get();
            $employee = Employees::where('employee_id', $id)->first();
            if (!$employee) {
                return redirect()->route('all.employees');
                Session::flash('error','Error in Finding Employee Id');
            }
            return view('admin.backend.pages.employees.edit_employee', compact('profileData','colleges','designations','employee'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            
            // Delete the program
            $employee = Employees::where('employee_id',$id);
            $employee->delete();
    
            Session::flash('success', 'Employee Deleted Successfully');
        } catch (ModelNotFoundException $e) {
            Session::flash('error', 'Employee not found');
        } catch (\Exception $e) {
            Session::flash('error', 'Error in deleting Employee: ' . $e->getMessage());
        }
    
        return redirect()->route('all.employees');
    }
}
