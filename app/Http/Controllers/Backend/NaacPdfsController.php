<?php

namespace App\Http\Controllers\backend;
require_once app_path('Helpers/LogHelper.php');

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NaacCriterions;
use App\Models\NaacKeyIndicators;
use App\Models\NaacMetrics;
use App\Models\NaacPdfs;
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
use App\Exports\NaacPdfDataExport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;



class NaacPdfsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function getkeyindicatorPdf(Request $request): JsonResponse
     {
         // Validate the request input
         $request->validate([
             'criterionID' => 'required|integer',
         ]);
     
         $criterion_id = $request->input('criterionID');
     
         // Fetch data from the database
         $response = NaacKeyIndicators::where('criterion_id', $criterion_id)->get();
     
         // Log the query result for debugging
        //  \Log::info('Query Result:', $response->toArray());
     
         // Handle empty response
         if ($response->isEmpty()) {
             return response()->json(['error' => 'No records found for the given criterion_id'], 404);
         }
     
         // Return JSON response
         return response()->json($response);
     }


     public function getmetricsPdf(Request $request): JsonResponse
     {
         // Validate the request input
         $request->validate([
             'keyindicatorID' => 'required|integer',
         ]);
     
         $KeyIndicatorID = $request->input('keyindicatorID');
     
         // Fetch data from the database
         $response = NaacMetrics::where('key_indicator_id',$KeyIndicatorID)->where('metric_status','Y')->get();
     
         // Log the query result for debugging
         \Log::info('Query Result:', $response->toArray());
     
         // Handle empty response
         if ($response->isEmpty()) {
             return response()->json(['error' => 'No records found for the given key indicator id'], 404);
         }
     
         // Return JSON response
         return response()->json($response);
     }

    public function index()
    {
        ini_set('max_execution_time', 300);
        ini_set('memory_limit', '512M');
        $criteria = [
            'Criterion-I-Coordinator' => 8,
            'Criterion-II-Coordinator' => 9,
            'Criterion-III-Coordinator' => 10,
            'Criterion-IV-Coordinator' => 11,
            'Criterion-V-Coordinator' => 12,
            'Criterion-VI-Coordinator' => 13,
            'Criterion-VII-Coordinator' => 14,
        ];
    
       
        $allowedCriteria = [];
    
 
        foreach ($criteria as $permission => $id) {
            if (Auth::user()->can($permission)) {
                $allowedCriteria[] = $id;
            }
        }
    
      
        $pdfs = [];
        if (!empty($allowedCriteria)) {
            $pdfs = NaacPdfs::whereIn('criterion_id', $allowedCriteria)
                            ->orderBy('criterion_id', 'DESC')
                            ->orderBy('key_indicator_id', 'DESC')
                            ->paginate(10);
        }
       
        $user_id = Auth::user()->id;
        $profileData = User::find($user_id);
        return view('admin.backend.pages.naac-pdfs.all_pdfs',compact('user_id','profileData','pdfs'));
    }



    public function search(Request $request)
{

    $user_id = Auth::user()->id;
    $profileData = User::find($user_id);
    $query = $request->input('search'); // Capture the search query

    $pdfs = NaacPdfs::with(['criterion_name', 'key_indicator_name', 'metric_name'])
        ->when($query, function ($q) use ($query) {
            $q->where('pdf_description', 'LIKE', "%$query%")
                ->orWhere('file_name', 'LIKE', "%$query%")
                ->orWhereHas('criterion_name', function ($subQuery) use ($query) {
                    $subQuery->where('criterion_name', 'LIKE', "%$query%");
                })
                ->orWhereHas('key_indicator_name', function ($subQuery) use ($query) {
                    $subQuery->where('key_indicator_name', 'LIKE', "%$query%");
                })
                ->orWhereHas('metric_name', function ($subQuery) use ($query) {
                    $subQuery->where('metric_name', 'LIKE', "%$query%");
                });
        })
        ->paginate(10); // Paginate results (10 per page)

    return view('admin.backend.pages.naac-pdfs.all_pdfs', compact('pdfs', 'query','user_id','profileData'));
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
       if($request->isMethod('post')){
       try{

        $validatedData = $request->validate([
            'criterion_id' => 'required',
            'key_indicator_id' => 'required',
            'metric_id' => 'required',
            'pdf_description' => 'required',
            'pdf_status' => 'required',
            'pdf_priority' => 'required',
            'file_path' => 'required|file|max:5120', // max file size is 5MB
        ]);

        $criterion_id = $validatedData['criterion_id'];
        $criterion_name = NaacCriterions::select('criterion_name')->where('criterion_id', $criterion_id)->first()?->criterion_name;
        $key_indicator_id = $validatedData['key_indicator_id'];
        $key_indicator_name = NaacKeyIndicators::select('key_indicator_name')->where('key_indicator_id', $key_indicator_id)->first()?->key_indicator_name;
        $metric_id = $validatedData['metric_id'];
        $metric_name = NaacMetrics::select('metric_name')->where('metric_id', $metric_id)->first()?->metric_name;
        $pdf_description = $validatedData['pdf_description'];
        $pdf_status = $validatedData['pdf_status'];
        $pdf_priority = $validatedData['pdf_priority'];
        $max_pdf_id = NaacPdfs::max('pdf_id') +1;
        $filePath = null;

        if ($request->hasFile('file_path')) {

            $file = $request->file('file_path');

            $filename = Str::slug($pdf_description) . '-' . time() . '.' . $file->getClientOriginalExtension();

            $directory_path = public_path('assets/data/naac-data/' . $criterion_name . '/' . $key_indicator_name . '/' . $metric_name);

            if (!is_dir($directory_path)) {
                mkdir($directory_path, 0755, true);
            }

            $filePath = 'assets/data/naac-data/' . $criterion_name . '/' . $key_indicator_name . '/' . $metric_name . '/' . $filename;
            $file->move($directory_path, $filename);
        }

         $pdfData = [
               'criterion_id' => $criterion_id,
               'key_indicator_id' => $key_indicator_id,
               'metric_id' => $metric_id,
               'pdf_description' => $pdf_description,
               'pdf_status' => $pdf_status,
               'pdf_priority' => $pdf_priority,
               'file_path' => $filePath,
               'file_name' => $filename,
               'directory_path' => $directory_path
         ];

         $result = NaacPdfs::create($pdfData);
         if($result)
{

    $performedBy = Auth::user()->id;
        logFileAction('CREATE', $filePath, $criterion_id, $key_indicator_id, $metric_id,$max_pdf_id ,$performedBy);

    Session::flash('success','Naac PDF Added Successfully');
}else{
    Session::flash('error','Error is adding Naac PDF');
}
    

       }catch(ValidationException $e){
        Session::flash('error','Validation Error in Adding Naac Pdf'.$e->getMessage());
       

       }catch(Exception $e){
        Session::flash('error','Error in Adding Naac Pdf'.$e->getMessage());
       }
       return redirect()->route('all_naac_pdfs');

       }else{
            $criterions = NaacCriterions::where('criterion_status','Y')->get();
            $priority = NaacPdfs::max('pdf_priority') + 1;
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            return view('admin.backend.pages.naac-pdfs.add_pdf',compact('user_id','profileData','criterions','priority'));


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

          try{

            $naac_pdf_object = NaacPdfs::find($id);

            $validatedData = $request->validate([
                'pdf_id' => 'required',
                'criterion_id' => 'required',
                'key_indicator_id' => 'required',
                'metric_id' => 'required',
                'pdf_description' => 'required',
                'pdf_status' => 'required',
                'pdf_priority' => 'required',
                'directory_path_value' => 'required',
                'file_name_value' => 'required',
                'file_path_value' => 'required'
            ]);

            $criterion_id = $validatedData['criterion_id'];
            $pdf_id = $validatedData['pdf_id'];
        $criterion_name = NaacCriterions::select('criterion_name')->where('criterion_id', $criterion_id)->first()?->criterion_name;
        $key_indicator_id = $validatedData['key_indicator_id'];
        $key_indicator_name = NaacKeyIndicators::select('key_indicator_name')->where('key_indicator_id', $key_indicator_id)->first()?->key_indicator_name;
        $metric_id = $validatedData['metric_id'];
        $metric_name = NaacMetrics::select('metric_name')->where('metric_id', $metric_id)->first()?->metric_name;
        $pdf_description = $validatedData['pdf_description'];
        $pdf_status = $validatedData['pdf_status'];
        $pdf_priority = $validatedData['pdf_priority'];
        $file_path_value = $validatedData['file_path_value'];
        $file_name_value = $validatedData['file_name_value'];
        $directory_path_value = $validatedData['directory_path_value'];
        
        $filePath = null;
        $pdfData= [];
         if($request->hasFile('file_path'))
         {
            $file = $request->file('file_path');
            if (Storage::disk('public')->exists($file_path_value)) {
                Storage::disk('public')->delete($file_path_value);
            }
            $filePath = $file->move($directory_path_value,$file_name_value);
           

            $pdfData = [
                'criterion_id' => $criterion_id,
                'key_indicator_id' => $key_indicator_id,
                'metric_id' => $metric_id,
                'pdf_description' => $pdf_description,
                'pdf_status' => $pdf_status,
                'pdf_priority' => $pdf_priority,
                'file_path' => $file_path_value
          ];


         }else{

         $pdfData = [
            'criterion_id' => $criterion_id,
            'key_indicator_id' => $key_indicator_id,
            'metric_id' => $metric_id,
            'pdf_description' => $pdf_description,
            'pdf_status' => $pdf_status,
            'pdf_priority' => $pdf_priority
      ];

    }

       

         $result = $naac_pdf_object->update($pdfData);  

         if($result)
         {
            $performedBy = Auth::user()->id;
            logFileAction('UPDATE', $file_path_value, $criterion_id, $key_indicator_id, $metric_id, $pdf_id, $performedBy);
            
             Session::flash('success','PDF Updated Successfully');
         }else{
             Session::flash('error','Error is updating the pdf');
         }

          }catch(ValidationException $e){

            $error = $e->getMessage();
            Session::flash('error','Validation Error in Adding PDF = '.$error);

          }catch(Exception $e){

            $error = $e->getMessage();
            Session::flash('error','Error in Adding PDF= '.$error);

          }

          return redirect()->route('all_naac_pdfs');

        }else{
            
            $criterions = NaacCriterions::where('criterion_status','Y')->get();
            $naac_pdf = NaacPdfs::where('pdf_id',$id)->first();
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            return view('admin.backend.pages.naac-pdfs.edit_pdf',compact('profileData','criterions','naac_pdf'));

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $pdf_id = $id;
             $pdf_object = NaacPdfs::find($id);
             $file_path_value = $pdf_object->file_path;
             $criterion_id = $pdf_object->criterion_id;
             $key_indicator_id = $pdf_object->key_indicator_id;
             $metric_id = $pdf_object->metric_id;
             if (Storage::disk('public')->exists($file_path_value)) {
                Storage::disk('public')->delete($file_path_value);
            }
             $result = $pdf_object->delete();
 
             if($result){
                $performedBy = Auth::user()->id;
                logFileAction('DELETE', $file_path_value, $criterion_id, $key_indicator_id, $metric_id, $pdf_id, $performedBy);
                Session::flash('success','PDF deleted Succesfully');

             }else{
                Session::flash('error','Error in deleting PDF');
             }

        }catch(ModelNotFoundException $e){
            $error = $e->getMessage();
            Session::flash('error','Error in deleting PDF'.$error);

        }catch(Exception $e){

            $error = $e->getMessage();
            Session::flash('error','Error in deleting PDF'.$error);
        }

        return redirect()->route('all_naac_pdfs');
    }

    public function export()
    {
        return Excel::download(new NaacPdfDataExport, 'naac_pdfs.xlsx');
    }
}