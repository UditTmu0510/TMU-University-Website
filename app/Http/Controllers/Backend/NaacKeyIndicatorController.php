<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NaacCriterions;
use App\Models\NaacKeyIndicators;
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

class NaacKeyIndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criterions = NaacCriterions::orderBy('criterion_name','ASC')->where('criterion_status','Y')->get();
        $keyindicator = NaacKeyIndicators::orderBy('key_indicator_name','ASC')->get();
        $user_id = Auth::user()->id;
        $profileData = User::find($user_id);
        return view('admin.backend.pages.naac-keyindicator.all_keyindicators',compact('criterions','profileData','keyindicator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('post'))
        {
            try{
                $validateData = $request->validate([
                    'key_indicator_name' => 'required',
                    'criterion_id' => 'required',
                    'key_indicator_description' => 'required',
                    'key_indicator_status' => 'required',
                    'key_indicator_priority' => 'required|integer',
                ]);
    
                $key_indicator_name = $validateData['key_indicator_name'];
                $criterion_id = $validateData['criterion_id'];
                $key_indicator_description = $validateData['key_indicator_description'];
                $key_indicator_status = $validateData['key_indicator_status'];
                $key_indicator_priority = $validateData['key_indicator_priority'];
    
                $naackeyindicatorData = [
                    'key_indicator_name' => $key_indicator_name,
                    'criterion_id' => $criterion_id,
                    'key_indicator_description' => $key_indicator_description,
                    'key_indicator_status' => $key_indicator_status,
                    'key_indicator_priority' => $key_indicator_priority,
                ];
    
                $result = NaacKeyIndicators::create($naackeyindicatorData);
    

            if($result)
            {
                Session::flash('success','KeyIndicator Added Successfully');
                return redirect()->route('all_naac_keyindicator');

            }
            

        }catch(ValidationException $e){
            Session::flash('success','Validation Error in Updating Key Indicator'.$e->getMessage());
            return redirect()->route('all_naac_keyindicator');

        }catch(\Exception $e){
            Session::flash('success','Error in Updating KeyIndicator'.$e->getMessage());
            return redirect()->route('all_naac_keyindicator');
        }
        }else{
 $user_id = Auth::user()->id;
 $profileData = User::find($user_id);
 $criterions = NaacCriterions::orderBy('criterion_name','ASC')->where('criterion_status','Y')->get();
 $priority = NaacKeyIndicators::max('key_indicator_id') + 1;
 return view('admin.backend.pages.naac-keyindicator.add_keyindicator',compact('criterions','profileData','priority'));


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


                $keyindicatorobject = NaacKeyIndicators::find($id);
                $validateData = $request->validate([
                    'key_indicator_name' => 'required',
                    'criterion_id' => 'required',
                    'key_indicator_description' => 'required',
                    'key_indicator_status' => 'required',
                    'key_indicator_priority' => 'required|integer',
                ]);
    
                $key_indicator_name = $validateData['key_indicator_name'];
                $criterion_id = $validateData['criterion_id'];
                $key_indicator_description = $validateData['key_indicator_description'];
                $key_indicator_status = $validateData['key_indicator_status'];
                $key_indicator_priority = $validateData['key_indicator_priority'];
    
                $naackeyindicatorData = [
                    'key_indicator_name' => $key_indicator_name,
                    'criterion_id' => $criterion_id,
                    'key_indicator_description' => $key_indicator_description,
                    'key_indicator_status' => $key_indicator_status,
                    'key_indicator_priority' => $key_indicator_priority,
                ];
    
                $result = $keyindicatorobject->update($naackeyindicatorData);
    

            if($result)
            {
                Session::flash('success','KeyIndicator Updated Successfully');
                return redirect()->route('all_naac_keyindicator');

            }
            

        }catch(ValidationException $e){
            Session::flash('success','Validation Error in Updating Key Indicator'.$e->getMessage());
            return redirect()->route('all_naac_keyindicator');

        }catch(\Exception $e){
            Session::flash('success','Error in Updating KeyIndicator'.$e->getMessage());
            return redirect()->route('all_naac_keyindicator');
        }

        }else{
              $user_id = Auth::user()->id;
              $profileData = User::find($user_id);
              $criterions = NaacCriterions::where('criterion_status','Y')->get();
              $naackeyindicatorData = NaacKeyIndicators::where('key_indicator_id',$id)->first();
              return view('admin..backend.pages.naac-keyindicator.edit_keyindicator',compact('profileData','criterions','naackeyindicatorData'));

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    try{
          $naackeyindicatorObject = NaacKeyIndicators::find($id);
          $naackeyindicatorObject->delete();
          Session::flash('success','KeyIndicator Deleted Successfully');

    }catch(ModelNotFoundException $e){
     
        Session::flash('error','Error in deleting KeyIndicator'.$e->getMessage());
    }catch(\Exception $e)
    {
        Session::flash('error','Error in deleting KeyIndicator'.$e->getMessage());

    }
    return redirect()->route('all_naac_keyindicator');
    }
}
