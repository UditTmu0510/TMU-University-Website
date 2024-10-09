<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersFeedback extends Model
{
    use HasFactory;

    protected $table = 'teachers_feedback';

    protected $fillable = [
        'faculty_name',
        'designation',
        'employee_code',
        'cd_id',
        'academic_year',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'overall_rating',
        'topics_beyond_syllabus',
        'topics_to_delete',
        'suggestions'
    ];
}