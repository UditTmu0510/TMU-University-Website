<?php

namespace App\Http\Controllers;
use App\Models\Testimonials;

use Illuminate\Http\Request;

class JainStudiesController extends Controller
{

 

    public function jain_studies_home()
    {
        $testimonials = Testimonials::where('cd_id', 2)
        ->where('display_college_main', 'Y')
        ->where('status', 'Y')
        ->orderBy('story_id', 'ASC')
        ->get();
    return view('university.colleges.jain_studies.jain_studies_home',compact('testimonials'));
    }

    
    
}
