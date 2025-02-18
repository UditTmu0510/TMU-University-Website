<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;
    protected $table = 'syllabus';
    protected $guarded = [];
    protected $fillable = ['id','cd_id','prog_id','alt_tag','prog_code','acad_year','file_name','file_path','status'];
    
    public function cd_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');

    }

    public function prog_name(){
        return $this->belongsTo(Programmes::class,'prog_id','prog_id');
    }

}
