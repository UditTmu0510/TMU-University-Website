<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];
    protected $fillable = ['employee_id', 'first_name', 'last_name', 'email', 'phone', 'designation_id', 'department_id', 'cd_id', 'employee_image_path', 'status', 'is_head', 'head_message', 'priority'];
    public function college_name()
    {
        return $this->belongsTo(Colleges::class, 'cd_id', 'cd_id');
    }

    public function department_name()
    {
        return $this->belongsTo(Departments::class, 'department_id', 'department_id');
    }

    public function designation_name()
    {
        return $this->belongsTo(Designations::class, 'designation_id', 'designation_id');
    }
    
    public function faculty()
    {
        return $this->hasOneThrough(
            Faculties::class, // Final target model
            Colleges::class,  // Intermediate model
            'cd_id',          // Foreign key in Colleges that links to Employees
            'fy_id',          // Foreign key in Faculties that links to Colleges
            'cd_id',          // Local key in Employees that links to Colleges
            'faculty_id'      // Local key in Colleges that links to Faculties
        );
    }
}
