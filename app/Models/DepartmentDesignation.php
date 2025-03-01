<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentDesignation extends Model
{
    use HasFactory;
    protected $table = 'department_designation';
    protected $guarded = [];
    protected $fillable = ['department_id', 'designation_id', 'cd_id'];
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

