<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubsController extends Controller
{
    public function student_clubs()
    {
        return view('university.student_club.student_clubs');
    }
    public function advertisement_club()
    {
        return view('university.student_club.advertisement_club');
    }

    public function culture_club()
    {
        return view('university.student_club.culture_club');
    }

    public function dance_club()
    {
        return view('university.student_club.dance_club');
    }

    public function debate_club()
    {
        return view('university.student_club.debate_club');
    }

    public function drawing_club()
    {
        return view('university.student_club.drawing_club');
    }

    public function environment_club()
    {
        return view('university.student_club.environment_club');
    }

    public function fashion_club()
    {
        return view('university.student_club.fashion_club');
    }

    public function music_club()
    {
        return view('university.student_club.music_club');
    }

    public function photography_club()
    {
        return view('university.student_club.photography_club');
    }

    public function poetry_club()
    {
        return view('university.student_club.poetry_club');
    }

    public function public_speaking()
    {
        return view('university.student_club.public_speaking');
    }

    public function quiz_club()
    {
        return view('university.student_club.quiz_club');
    }

    public function reading_club()
    {
        return view('university.student_club.reading_club');
    }

    public function road_safety()
    {
        return view('university.student_club.road_safety');
    }

    public function singing_club()
    {
        return view('university.student_club.singing_club');
    }
    public function sports_club()
    {
        return view('university.student_club.sports_club');
    }

    public function theatre_club()
    {
        return view('university.student_club.theatre_club');
    }

    public function videograpgy_club()
    {
        return view('university.student_club.videography_club');
    }

    public function yoga_club()
    {
        return view('university.student_club.yoga_club');
    }

}
