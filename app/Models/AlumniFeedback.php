<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumniFeedback extends Model
{
    use HasFactory;

    protected $table = 'alumni_feedback';

    protected $fillable = [

        'name',
        'current_organization',
        'current_designation',
        'cd_id',
        'prog_studied_in_tmu',
        'prog_passout_year',
        'cd_enroll_no',
        'email',
        'contact_no',
        'academic_year',
        'overall_rating',
        'syllabus_modification',
        'suggestions',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
    ];
}
