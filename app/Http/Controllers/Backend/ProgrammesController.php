<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Colleges;
use App\Models\Programmes;
use App\Models\ProgrameeFee;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class ProgrammesController extends Controller
{
   
    

    public function getMasterProgramme(Request $request)
    {
        $cd_id = $request->cdID;
    
        // Search for the records with the given cd_id and status 'Y'
        $response = Programmes::where('cd_id', $cd_id)
                               ->get();
    
        // Check if any records are found
        if ($response->isEmpty()) {
            return response()->json(['error' => 'No records found for the given cd_id'], 404);
        }
    
        // Return the JSON response
        return response()->json($response);
    }
    
    


}
