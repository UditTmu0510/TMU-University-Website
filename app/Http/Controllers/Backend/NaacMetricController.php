<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NaacCriterions;
use App\Models\NaacKeyIndicators;
use App\Models\NaacMetrics;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;


class NaacMetricController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function getkeyIndicator(Request $request): JsonResponse
     {
         // Validate the request input
         $request->validate([
             'criterionID' => 'required|integer',
         ]);
     
         $criterion_id = $request->input('criterionID');
     
         // Fetch data from the database
         $response = NaacKeyIndicators::where('criterion_id', $criterion_id)->get();
     
         // Log the query result for debugging
         \Log::info('Query Result:', $response->toArray());
     
         // Handle empty response
         if ($response->isEmpty()) {
             return response()->json(['error' => 'No records found for the given criterion_id'], 404);
         }
     
         // Return JSON response
         return response()->json($response);
     }
     
     
    public function index()
    {
       
        $metrics = NaacMetrics::orderBy('metric_name','ASC')->get();
        $user_id = Auth::user()->id;
        $profileData = User::find($user_id);
        return view('admin.backend.pages.naac-metric.all_metrics',compact('user_id','profileData','metrics'));
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
        if($request->isMethod('post'))
        {
            try{
          $validateData = $request->validate([
            'metric_name' => 'required',
            'key_indicator_id' => 'required',
            'criterion_id' => 'required',
            'metric_description' => 'required',
            'metric_status' => 'required',
            'metric_priority' => 'required'
          ]);

          $criterion_id = $validateData['criterion_id'];
          $key_indicator_id = $validateData['key_indicator_id'];
          $metric_name = $validateData['metric_name'];
          $metric_description = $validateData['metric_description'];
          $metric_status = $validateData['metric_status'];
          $metric_priority = $validateData['metric_priority'];

          $naacmetricData = [
            'criterion_id' => $criterion_id,
            'key_indicator_id' => $key_indicator_id,
            'metric_name' => $metric_name,
            'metric_description' => $metric_description,
            'metric_status' => $metric_status,
            'metric_priority' => $metric_priority
          ];

          $result = NaacMetrics::create($naacmetricData);

          if($result)
          {
            Session::flash('success', 'Naac Metrics Added Successfully');
            return redirect()->route('all_naac_metric');

          }else{

            Session::flash('error', 'error in adding naac metrics');
            return redirect()->route('all_naac_metric');
          }
        }catch(ValidationException $e){
            Session::flash('error', 'Validation error in adding naac metrics'.$e->getmessage());
            return redirect()->route('all_naac_metric');

        }catch(Exception $e)
        {
            Session::flash('error', 'Error in adding naac metrics'.$e->getmessage());
            return redirect()->route('all_naac_metric');

        }

        }else{


            $criterions = NaacCriterions::orderBy('criterion_name','ASC')->where('criterion_status','Y')->get();
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            $priority = NaacMetrics::max('metric_priority') + 1;
            return view('admin.backend.pages.naac-metric.add_metric',compact('user_id','profileData','criterions','priority'));
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

                $naac_metric_object = NaacMetrics::find($id);
            $validateData = $request->validate([
                'metric_name' => 'required',
                'key_indicator_id' => 'required',
                'criterion_id' => 'required',
                'metric_description' => 'required',
                'metric_status' => 'required',
                'metric_priority' => 'required'
              ]);
    
              $criterion_id = $validateData['criterion_id'];
              $key_indicator_id = $validateData['key_indicator_id'];
              $metric_name = $validateData['metric_name'];
              $metric_description = $validateData['metric_description'];
              $metric_status = $validateData['metric_status'];
              $metric_priority = $validateData['metric_priority'];
    
              $naacmetricData = [
                'criterion_id' => $criterion_id,
                'key_indicator_id' => $key_indicator_id,
                'metric_name' => $metric_name,
                'metric_description' => $metric_description,
                'metric_status' => $metric_status,
                'metric_priority' => $metric_priority
              ];
    
              $result = $naac_metric_object->update($naacmetricData);
    
              if($result)
              {
                Session::flash('success', 'Naac Metrics updated Successfully');
                return redirect()->route('all_naac_metric');
    
              }else{
    
                Session::flash('error', 'error in updating naac metrics');
                return redirect()->route('all_naac_metric');
              }

            }catch(ValidationException $e)
            {
                Session::flash('error', 'Validation error in updating naac metrics'.$e->getmessage());
                return redirect()->route('all_naac_metric');

            }catch(Exception $e){

                Session::flash('error', 'Error in updating naac metrics'.$e->getmessage());
                return redirect()->route('all_naac_metric');
            }

        }else{

            $criterions = NaacCriterions::orderBy('criterion_priority','ASC')->where('criterion_status','Y')->get();
            $metric = NaacMetrics::where('metric_id',$id)->first();
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            return view('admin.backend.pages.naac-metric.edit_metric',compact('user_id','profileData','metric','criterions'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       try{
    $naac_metric_object = NaacMetrics::find($id);
    $result = $naac_metric_object->delete();
    if($result){
        Session::flash('success','NAAC metric deleted successfully');
        return redirect()->route('all_naac_metric');
    }else{
        Session::flash('error','error in naac metric deletion');
        return redirect()->route('all_naac_metric');

    }

       }catch(ModelNotFoundException $e){

        Session::flash('error','error in naac metric deletion'.$e->getMessage());
        return redirect()->route('all_naac_metric');

       }catch(\Exception $e){
        
        Session::flash('error','error in naac metric deletion'.$e->getMessage());
        return redirect()->route('all_naac_metric');

       }
    }
}
