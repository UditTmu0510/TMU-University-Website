<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metas;
use Exception;
use Illuminate\Support\Facades\Log;

class MetasController extends Controller
{
    public function search(Request $request)
    {
        try {
            if ($request->ajax() && $request->filled('query')) {
                $query = $request->input('query');
                Log::info("Search query: $query");
                $metas = Metas::search($query)->get();
                Log::info("Search results: ", $metas->toArray());
                return response()->json($metas);
            }
             return response()->json(['error' => 'Query parameter is required'], 400);
        } catch (Exception $e) {
            // Log the error message
  Log::error('Search Error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong!'], 500);
        }

        return response()->json([]);
    }
}