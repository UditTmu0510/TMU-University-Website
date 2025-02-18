<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamsQualified extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'job_exams_qualified';
    protected $fillable = ['exam_qualified_id ', 'exam_qualified_name', 'exam_qualified_passing_year', 'exam_qualified_subject', 'application_id'];
}
