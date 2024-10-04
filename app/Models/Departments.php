<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $guarded = [];
    protected $fillable = ['department_id','department_name','cd_id','status','priority'];
   
    public function college_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');
    }
}
