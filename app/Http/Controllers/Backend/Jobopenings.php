<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\BlogsCategory;
use Illuminate\Validation\ValidationException;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\JobOpening;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class Jobopenings extends Controller
{
    /**
     * Display a listing of the resources on the job openings page.
     */
    public function index()
    {
        $jobopenings = JobOpening::orderBy('id', 'desc')->get();
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        return view('admin.backend.pages.job-openings.all_job_opening', compact('jobopenings', 'profileData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $priority = JobOpening::max('priority') + 1;
        return view('admin.backend.pages.job-openings.add_job_opening', compact('profileData', 'priority'));
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    if($request->isMethod('post')){
        try{
            $validateData = $request->validate([
                'title' => 'required',
                'category' => 'required',
                'description' => 'required',
                'responsibilities' => 'required',
                'requirements' => 'required',
                'status' => 'required',
                'priority' => 'required'
                ]);

                $title = $validateData['title'];
                $category = $validateData['category'];
                $description = $validateData['description'];
                $responsibilities = $validateData['responsibilities'];
                $requirements = $validateData['requirements'];
                $status = $validateData['status'];
                $priority = $validateData['priority'];

                $result = JobOpening::create([
                    'title' => $title,
                    'category' => $category,
                    'description' => $description,
                    'responsibilities' => $responsibilities,
                    'requirements' => $requirements,
                    'status' => $status,
                    'priority' => $priority
                ]);
                if($result){
                Session::flash('success','Job Opening added successfully');
                }else{
                    Session::flash('error','Job Opening not added due to some error');
                }

            }catch(ValidationException $e){
                Session::flash('error', 'Validation Error in Creating Job Opening: ' . $e->getMessage());
            }catch(Exception $e){
                Session::flash('error','Error in Creating Job Opening' . $e->getMessage());
            }

            return redirect()->route('all.jobopenings');

        }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobopening = JobOpening::find($id);
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        return view('admin.backend.pages.job-openings.edit_job_opening', compact('jobopening', 'profileData'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if($request->isMethod('post')){
            try{
                
                $validateData = $request->validate([
                    'title' => 'required',
                    'category' => 'required',
                    'description' => 'required',
                    'responsibilities' => 'required',
                    'requirements' => 'required',
                    'status' => 'required',
                    'priority' => 'required'
                    ]);

                    $title = $validateData['title'];
                    $category = $validateData['category'];
                    $description = $validateData['description'];
                    $responsibilities = $validateData['responsibilities'];
                    $requirements = $validateData['requirements'];
                    $status = $validateData['status'];
                    $priority = $validateData['priority'];

                    $jobopening = JobOpening::find($id);
                    $jobopening->title = $title;
                    $jobopening->category = $category;
                    $jobopening->description = $description;
                    $jobopening->responsibilities = $responsibilities;
                    $jobopening->requirements = $requirements;
                    $jobopening->status = $status;
                    $jobopening->priority = $priority;

                    $result = $jobopening->save();
                    if($result){
                    Session::flash('success','Job Opening updated successfully');
                    }else{
                        Session::flash('error','Job Opening not updated due to some error');
                    }

                }catch(ValidationException $e){
                    Session::flash('error', 'Validation Error in Updating Job Opening: ' . $e->getMessage());
                }catch(Exception $e){
                    Session::flash('error','Error in Updating Job Opening' . $e->getMessage());
                }

                return redirect()->route('all.jobopenings');

            }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $jobopening = JobOpening::find($id);
            $result = $jobopening->delete();
            if($result){
                Session::flash('success','Job Opening deleted successfully');
            }else{
                Session::flash('error','Job Opening not deleted due to some error');
            }   
        }catch(Exception $e){
            Session::flash('error','Error in deleting Job Opening' . $e->getMessage());
        }
        return redirect()->route('all.jobopenings');
        
    }
}
