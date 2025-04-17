<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertFeedback extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'expert_feedback';

    // Define the primary key (if different from 'id')
    protected $primaryKey = 'id';

    // Disable auto-increment for 'id' if needed (optional)
    public $incrementing = true;

    // Define the data types for attributes (optional but recommended for large datasets)
    protected $keyType = 'int';

    // Define the attributes that are mass assignable
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
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'overall_rating',
        'improve_syllabus',
        'new_content_existing_syllabus',
        'topics_to_delete',
        'addition_of_new_course',
        'any_emerging_trend',
    ];

    // Define the dates for timestamps (Laravel will automatically handle 'created_at' and 'updated_at')
    protected $dates = ['created_at', 'updated_at'];
    
}
