<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobappliqualification extends Model
{
    use HasFactory;
    protected $table = 'job_appli_qualification';

    protected $fillable = [
        'id',
        'application_id',
        'mode_type',
        'exam_degree',
        'board_university',
        'year_of_passing',
        'percentage',
        'qualification_specialization'
    ];

}
