<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class NavbarJsonController extends Controller
{
    protected $jsonFilePath;
    protected $innerFilePath;

    public function __construct()
    {
        // Path to the JSON file
        $this->jsonFilePath = public_path('assets/json/navbarData.json');
        $this->innerFilePath = public_path('assets/json/menubarData.json');
    }

    
    // Public method to fetch Outer navbar items
    public function getNavbarItems(Request $request)
    {
        $collegeName = trim($request->input('collegeName'));

        if($collegeName === 'menubarData'){
            return $this->getNavbarDataFromFile("assets/json/navbarData.json");
        }
        // Call the private method to handle the logic
        return $this->getNavbarDataFromFile("assets/json/college_outer_navbar/{$collegeName}_outer.json");
    }

    // Public method to fetch navbar inner items
    public function getNavbarInnerItems(Request $request)
    {
        $collegeName = $request->input('collegeName');

        if($collegeName === 'menubarData')
            return $this->getNavbarDataFromFile("assets/json/menubarData.json");

        // Call the private method to handle the logic
        return $this->getNavbarDataFromFile("assets/json/{$collegeName}.json");
    }

    // Private method to handle common logic for fetching navbar data
    private function getNavbarDataFromFile($filePath)
    {
        // Check if 'collegeName' is provided
        if (!$filePath) {
            return response()->json(['error' => 'College name is required.'], 400);
        }

        // Construct the full file path
        $fullPath = public_path($filePath);

        // Check if the file exists
        if (!File::exists($fullPath)) {
            return response()->json(['error' => "Navbar data not found for this path: {$filePath}"], 404);
        }

        // Read the content of the JSON file
        $navbarData = json_decode(File::get($fullPath), true);

        // Check if the JSON is valid
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Failed to parse navbar JSON data.'], 500);
        }

        // Return the JSON data as a response
        return response()->json($navbarData);
    }

    // Handle the update of navbar data
    public function update(Request $request)
    {

        $collegeName = $request->input('collegeName'); 
        $navbarData = $request->input('navbarData');

         // Create a dynamic file path based on the collegeName
        if($collegeName === 'menubarData' )
        {
            $filePath = public_path("assets/json/navbarData.json");
        }
        else{
        $filePath = public_path("assets/json/college_outer_navbar/{$collegeName}_outer.json");
    }
        // Save the modified navbar data to the JSON file
        $this->saveNavbarData($navbarData, $filePath);

        return response()->json(['message' => "{$filePath}"]);
    }

    // Helper method to save navbar data back to the JSON file
    protected function saveNavbarData($data, $jsonFilePath)
    {
        // Ensure that the directory exists and is writable
        if (!is_writable(dirname($jsonFilePath))) {
            return response()->json(['message' => 'File is not writable'], 500);
        }

        // Save the modified data to the JSON file
        file_put_contents($jsonFilePath, json_encode($data, JSON_PRETTY_PRINT));

        return true;
    }



    // ------------------------------------------------------
    //     Controllers for inner json 
    // ------------------------------------------------------

   
    /**
     * Update the university menu structure.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateInner(Request $request)
    {
        // Validate that navbarData is present and an array
        $validated = $request->validate([
            'navbarData' => 'required|array', // Ensure navbarData is an array
            'collegeName' => 'required|string'
        ]);

        if($validated['collegeName'] === 'menubarData' )
        {
            $filePath = public_path("assets/json/menubarData.json");
        }
        else{
             // Create a dynamic file path based on the collegeName
         $filePath = public_path("assets/json/{$validated['collegeName']}.json");

        }
        
        // Save the modified navbar data to the JSON file
        $this->saveNavbarData($validated['navbarData'], $filePath);

        return response()->json(['message' => 'Navbar data updated successfully']);
    }
}
