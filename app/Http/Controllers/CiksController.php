<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CiksController extends Controller
{

    public function ciks_aboutus()
    {
        return view('university.ciks.about_us');
    }

    public function ciks_patrons()
    {
        return view('university.ciks.patrons');
    }

    public function ciks_team()
    {
        return view('university.ciks.team');
    }

    public function ciks_events()
    {
        return view('university.ciks.events');
    }

    public function ciks_gallery()
    {
        return view('university.ciks.gallery');
    }

    public function ciks_media_coverage()
    {
        return view('university.ciks.media_coverage');
    }

    public function ciks_activities()
    {
        return view('university.ciks.activities');
    }

    public function ciks_execution()
    {
        return view('university.ciks.execution');
    }
    public function ciks_upcoming_events()
    {
        return view('university.ciks.upcoming_event');
    }

}
