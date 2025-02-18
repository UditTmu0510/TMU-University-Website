<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NaacCriterions;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NaacCriterionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::User()->id;
        $profileData = User::find($user_id);
        $criterions = NaacCriterions::orderBy('criterion_name','ASC')->get();
        return view('admin.backend.pages.naac-criterion.all_criterions',compact('profileData','criterions'));

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
                // Validate the incoming data
                $validateData = $request->validate([
                    'criterion_name' => 'required|string|max:255',
                    'criterion_description' => 'required|string|max:500',
                    'criterion_status' => 'required',
                    'criterion_priority' => 'required|integer',  // Ensure it's an integer
                ]);
    
                // Retrieve validated data
                $criterion_name = $validateData['criterion_name'];
                $criterion_description = $validateData['criterion_description'];
                $criterion_status = $validateData['criterion_status'];
                $criterion_priority = $validateData['criterion_priority'];  // No need for casting
    
                // Prepare the data for insertion
                $naaccriterionData = [
                    'criterion_name' => $criterion_name,
                    'criterion_description' => $criterion_description,
                    'criterion_status' => $criterion_status,
                    'criterion_priority' => $criterion_priority,
                ];
    
                // Create the new Naac Criterion
                $result = NaacCriterions::create($naaccriterionData);
    
                // Check if the result is successful
                if ($result) {
                    Session::flash('success', 'Naac Criterion Added Successfully');
                    return redirect()->route('all_naac_criterions');
                } else {
                    Session::flash('error', 'Error in Adding Naac Criterions');
                    return redirect()->route('all_naac_criterions');
                }
    
            } catch (ValidationException $ve) {
                Session::flash('error', 'Validation Error in Adding Naac Criterions: ' . $ve->getMessage());
                return redirect()->route('all_naac_criterions');
    
            } catch (Exception $e) {
                Session::flash('error', 'Error in Adding Naac Criterions: ' . $e->getMessage());
                return redirect()->route('all_naac_criterions');
            }
    
        } else {
            // Logic for displaying the form with a calculated priority
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
    
            // Calculate the next available priority (based on the highest existing priority)
            $priority = NaacCriterions::max('criterion_priority') + 1;
    
            // Return the view with the profile and priority
            return view('admin.backend.pages.naac-criterion.add_criterion', compact('profileData', 'priority'));
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
                // Validate input data
                $validatedData = $request->validate([
                    'criterion_name' => 'required|string|max:255',
                    'criterion_description' => 'required|string|max:500',
                    'criterion_status' => 'required',
                    'criterion_priority' => 'required',
                ]);
    
                // Extract validated data
                $criterion_name = $validatedData['criterion_name'];
                $criterion_description = $validatedData['criterion_description'];
                $criterion_status = $validatedData['criterion_status'];
                $criterion_priority = (int)$validatedData['criterion_priority'];
    
                // Find the criterion by ID
                $criterion_id = $id;
                $criterion = NaacCriterions::where('criterion_id',$criterion_id);
    
                // If the criterion doesn't exist, return an error
                if (!$criterion) {
                    Session::flash('error', 'Naac Criterion not found.');
                    return redirect()->route('all_naac_criterions');
                }
    
                // Prepare the data for updating
                $criterionData = [
                    'criterion_name' => $criterion_name,
                    'criterion_description' => $criterion_description,
                    'criterion_status' => $criterion_status,
                    'criterion_priority' => $criterion_priority
                ];
    
                // Update the criterion
                $result = $criterion->update($criterionData);
    
                // Return the result with flash messages
                if ($result) {
                    Session::flash('success', 'Naac Criterion Updated Successfully');
                    return redirect()->route('all_naac_criterions');
                } else {
                    Session::flash('error', 'Error in updating Naac criterion');
                    return redirect()->route('all_naac_criterions');
                }
    
            } catch (ValidationException $e) {
                // Handle validation errors
                Session::flash('error', 'Validation error in updating Naac criterion: ' . $e->getMessage());
                return redirect()->route('all_naac_criterions');
    
            } catch (Exception $e) {
                // Handle general errors
                Session::flash('error', 'Error in updating Naac criterion: ' . $e->getMessage());
                return redirect()->route('all_naac_criterions');
            }
    
        } else {
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);  // If needed, otherwise remove
            $criterion = NaacCriterions::where('criterion_id', $id)->first();
    
            // Return the edit view with the criterion data
            return view('admin.backend.pages.naac-criterion.edit_criterion', compact('criterion','profileData'));
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       try{
            $criterion = NaacCriterions::where('criterion_id',$id);
            $criterion->delete();
            Session::flash('success','Criterion Deleted Successfully');

       }catch(ModelNotFoundException $e){
        Session::flash('error','Naac Criterion Not Found'.$e->getMessage());

       }catch(\Exception $e){

        Session::flash('error','Naac Criterion Not Found'.$e->getMessage());
       }
return redirect()->route('all_naac_criterions');

    }
}
