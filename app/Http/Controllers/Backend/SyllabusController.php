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
        //
    }


    public function getAcademicYears(Request $request)
    {
        $prog_id = $request->progID;
    
        // Fetch records based on prog_id and status '1'
        $response = Syllabus::where('prog_id', $prog_id)
                            ->where('status', 1)
                            ->select('acad_year') // If you only need the acad_year
                            ->distinct() // In case you have multiple entries for the same year
                            ->orderBy('acad_year', 'desc')
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
