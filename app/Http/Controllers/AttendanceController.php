<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('university.colleges.medical.medical_aebas_attendance'); // Blade template
    }

    public function getActiveDates(Request $request)
    {
        $year = $request->query('year');
        $month = $request->query('month');

        $activeDates = DB::table('aebas_attendance')
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->select('id', 'date') // Include id in the response
            ->get();

        return response()->json($activeDates);
    }


    public function downloadPdf($id)
    {
        // Fetch the record from the database
        $record = DB::table('aebas_attendance')->find($id);

        if (!$record) {
            abort(404, 'Record not found');
        }

        // Build the full path to the file
        $filePath = public_path($record->pdf_path);

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'PDF not found');
        }

        // Return the file for download
        return response()->download($filePath);
    }
}
