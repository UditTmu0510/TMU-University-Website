<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Recruiters;
use App\Models\Programmes;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class PhysicaleducationController extends Controller
{

    public function index()
    {
        
        $testimonials = Testimonials::where('cd_id', 18)
            ->where('display_college_main', 'Y')
            ->where('status', 'Y')
            ->orderBy('story_id', 'ASC')
            ->get();
                  $recruiters = Recruiters::where('cd_id', 18)
    ->where('display_college_main', 'Y')
    ->where('status', 'Y')
    ->orderBy('recruiter_id', 'desc')
    ->select('recruiter_image_path', 'alt_tag') // Select specific fields
    ->get();

        return view('university.colleges.physical_education.physical_education_home',compact('testimonials','recruiters'));
    }
    
public function physical_education_about_us()
{
    return view('university.colleges.physical_education.physical_education_about_us');
}

public function physical_education_academic_calendar()
{
    return view('university.colleges.physical_education.physical_education_academic_calendar');
}
public function physical_education_anti_ragging()
{
    return view('university.colleges.physical_education.physical_education_anti_ragging');
}

public function physical_education_college_highlight()
{
    return view('university.colleges.physical_education.physical_education_college_highlight');
}

public function physical_education_contact_us()
{
    return view('university.colleges.physical_education.physical_education_contact_us');
}

public function physical_education_gallery()
{
    return view('university.colleges.physical_education.physical_education_gallery');
}

public function physical_education_guest_lecture()
{
    return view('university.colleges.physical_education.physical_education_guest_lecture');
}

public function physical_education_iqac()
{
    return view('university.colleges.physical_education.physical_education_iqac');
}

public function physical_education_syllabus()
{
        $programmes = Programmes::where('cd_id',18)->where('status','Y')->get();
    return view('university.colleges.physical_education.physical_education_syllabus',compact('programmes'));
}

public function physical_education_principal()
{
    return view('university.colleges.physical_education.physical_education_principal');
}

public function physical_education_timetable()
{
    return view('university.colleges.physical_education.physical_education_timetable');
}



}
