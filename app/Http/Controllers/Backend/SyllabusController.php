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
use App\Models\Syllabus;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $syllabuses = Syllabus::latest()->get();
        return view('admin/backend/pages/syllabus/all_syllabus',compact('profileData','syllabuses'));
    }


    public function getAcademicYears(Request $request)
    {
        $prog_id = $request->progID;
    
        // Fetch records based on prog_id and status '1'
        $response = Syllabus::where('prog_id', $prog_id)
                            ->where('status', 1)
                            ->select('acad_year') // If you only need the acad_year
                            ->distinct() // In case you have multiple entries for the same year
                            ->get();
    
        // Check if any records are found
        if ($response->isEmpty()) {
            return response()->json(['error' => 'No academic years found for the given program ID'], 404);
        }
    
        // Return the JSON response
        return response()->json($response);
    }
    

    public function getSyllabuses(Request $request)
    {
        Log::info('Received Program ID: ' . $request->progID);
        Log::info('Received Academic Year: ' . $request->Acadyear);
        
        $prog_id = $request->progID;
        $academic_year = $request->Acadyear;
        
        // Debugging line to check the query being run
        Log::info('Query: ', [
            'prog_id' => $prog_id,
            'acad_year' => $academic_year,
            'status' => 1
        ]);
        
        $response = Syllabus::where('prog_id', $prog_id)
                            ->where('acad_year', $academic_year)
                            ->where('status', 1)
                            ->select('file_path')
                            ->get();
        
        // Check if any records are found
        if ($response->isEmpty()) {
            return response()->json(['error' => 'No syllabus found for the given program ID and academic year'], 404);
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
        if($request->isMethod('post'))
        {
try{
    $validatedData = $request->validate([
        'cd_id' => 'required',
        'prog_id' => 'required',
        'acad_year' => 'required',
        'status' => 'required',
        'file_path' => 'nullable|file|mimes:pdf|max:5120',
    ]);

    $cd_id = $validatedData['cd_id'];
    $prog_id = $validatedData['prog_id'];
    $acad_year = $validatedData['acad_year'];
    $status = $validatedData['status'];

    $prog_name = Programmes::select('prog_code')->where('prog_id',$prog_id)->where('status','Y')->first();
    $prog_code = $prog_name['prog_code'];


    $filePath = null;
    if ($request->hasFile('file_path')) {
        $file = $request->file('file_path');
        $filename = $prog_code . '_' . time() .'.' . $file->getClientOriginalExtension();
       $directoryPath = '/home/u580097594/domains/tmuhospital.com/public_html/public/pdf/syllabus/' . $acad_year; 
        
        if (!\Storage::exists($directoryPath)) {
    \Storage::makeDirectory($directoryPath);
    // Set the directory permissions to 755
    chmod(storage_path($directoryPath), 0755);
}
        $filePath = $file->storeAs('pdf/syllabus/' . $acad_year, $filename);
        
        
    }

    $syllabusdata = [
        'prog_id' => $prog_id,
        'cd_id' => $cd_id,
        'acad_year' => $acad_year,
        'status' => $status,
        'file_path' => $filePath,
    ];

    $result = Syllabus::create($syllabusdata);
if($result)
{
    Session::flash('success','Syllabus Added Successfully');
}else{
    Session::flash('error','Error is adding the syllabus');
}



}catch(ValidationException $e)
{

$error = $e->getMessage();
Session::flash('error','Validation Error in Adding Syllabus = '.$error);

}catch(Exception $e)
{

    $error = $e->getMessage();
    Session::flash('error','Error in Adding Syllabus = '.$error);
}

return redirect()->route('all.syllabus');

        }else{
$id_profile = Auth::user()->id;
$profileData = User::find($id_profile);
$colleges = Colleges::orderBy('cd_name','ASC')->where('status',1)->where('for_programmes','Y')->select('cd_name','cd_id')->get();
return view('admin/backend/pages/syllabus/add_syllabus',compact('profileData','colleges'));

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

                $syllabus = Syllabus::find($id);

                if (!$syllabus) {
                    Session::flash('error', 'Syllabus not found');
                    return redirect()->route('all.syllabus');
                }
                $validatedData = $request->validate([
                    'cd_id' => 'required',
                    'prog_id' => 'required',
                    'acad_year' => 'required',
                    'status' => 'required'
                ]);
            
                $cd_id = $validatedData['cd_id'];
                $prog_id = $validatedData['prog_id'];
                $acad_year = $validatedData['acad_year'];
                $status = $validatedData['status'];
            
            
        
            
            
                $filePath = null;
                $syllabusdata = [];
                if ($request->hasFile('file_path')) {
                    $file = $request->file('file_path');
                    $prog_name = Programmes::select('prog_code')
                    ->where([
                        ['prog_id', $prog_id],
                        ['status', 'Y']
                    ])->first();
                    if (!$prog_name) {
                        Session::flash('error', 'Program code not found or inactive');
                        return redirect()->route('all.syllabus');
                    }
                    
                    $prog_code = $prog_name['prog_code'];
                    $filename = $prog_code . '_' . time() .'.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('pdf/syllabus/' . $acad_year, $filename);
                    $syllabusdata = [
                        'prog_id' => $prog_id,
                        'cd_id' => $cd_id,
                        'acad_year' => $acad_year,
                        'status' => $status,
                        'file_path' => $filePath
                    ];
                }else{

                    $syllabusdata = [
                        'prog_id' => $prog_id,
                        'cd_id' => $cd_id,
                        'acad_year' => $acad_year,
                        'status' => $status
                    ];

                }
            
            
            
                $result = $syllabus->update($syllabusdata);
            if($result)
            {
                Session::flash('success','Syllabus Updated Successfully');
            }else{
                Session::flash('error','Error in Updating the syllabus');
            }
            
            
            
            }catch(ValidationException $e)
            {
            
            $error = $e->getMessage();
            Session::flash('error','Validation Error in Updating Syllabus = '.$error);
            
            }catch(Exception $e)
            {
            
                $error = $e->getMessage();
                Session::flash('error','Error in Updating Syllabus = '.$error);
            }
            
            return redirect()->route('all.syllabus');


        }else{
            $user_id = Auth::user()->id;
            $profileData = User::find($user_id);
            $colleges = Colleges::orderBy('cd_name','ASC')->where('status',1)->get();
            $syllabus = Syllabus::find($id);
            if(!$syllabus)
            {
                Session::flash('error','Error in Finding the syllabus');
                return redirect()->route('all.syllabus');
            }

            return view('admin.backend.pages.syllabus.edit_syllabus',compact('profileData','colleges','syllabus'));

        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
        $syllabus = Syllabus::where('id',$id);
        $syllabus->delete();
        Session::flash('success','Syllabus Deleted Successfully');
        }catch(ModelNotFoundException $e)
        {
            Session::flash('error','Error in deleting the syllabus'.$e->getmessage());
        }catch(\Exception $e)
        {
            Session::flash('error','Error in deleting the syllabus'.$e->getmessage());

        }

        return redirect()->route('all.syllabus');
    }
}
