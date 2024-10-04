<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];
    protected $fillable = ['employee_id','first_name','last_name','email','phone','designation_id','department_id','cd_id','employee_image_path','status','is_head','head_message','priority'];
    public function college_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');
    }

    public function department_name(){
        return $this->belongsTo(Departments::class,'department_id','department_id');
    }

    public function designation_name(){
        return $this->belongsTo(Designations::class,'designation_id','designation_id');
    }

}
