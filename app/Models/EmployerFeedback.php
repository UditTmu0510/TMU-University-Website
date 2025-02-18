<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerFeedback extends Model
{
    use HasFactory;

    protected $table = 'alumni_feedback';

    protected $fillable = [

        'name',
        'current_designation',
        'current_organization',
        'contact_no',
        'email',
        'cd_id',
        'academic_year',
        'q1',
        'q2',
        'q3',
        'overall_rating',
        'improve_syllabus',
        'new_content_existing_syllabus',
        'topics_to_delete',
        'addition_of_new_course',
        'any_emerging_trend',
        
    ];
}
