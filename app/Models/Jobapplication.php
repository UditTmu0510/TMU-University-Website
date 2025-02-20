<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapplication extends Model
{
    protected $table = 'job_applications';
    protected $fillable = [
        'application_id',
        'cd_id',
        'department_id',
        'designation_id',
        'fy_id',
        'name',
        'mobile_no',
        'email',
        'pan',
        'aadhar',
        'religion',
        'marital_status',
        'dob',
        'category',
        'present_address',
        'permanent_address',
        'total_experience',
        'academic_experience',
        'industrial_experience',
        'current_salary',
        'expected_salary',
        'applicant_resume_path',
        'curent_comp_name',
        'current_comp_category',
        'current_comp_appointment',
        'current_comp_designation',
        'current_comp_date_of_joining',
        'current_comp_date_of_leaving',
        'current_comp_date_of_leaving_reason'
    ];

}
