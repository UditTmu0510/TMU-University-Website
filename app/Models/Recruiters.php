<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiters extends Model
{
    use HasFactory;
    protected $table = 'recruiters';
    protected $guarded = [];
    protected $fillable = ['recruiter_id','recruiter_name','recruiter_image_path','alt_tag','prog_id','cd_id','display_university_main','display_college_main','display_programme_main','status'];
   
    public function programme_name(){
        return $this->belongsTo(Programmes::class,'prog_id','prog_id');
    }

    
    public function college_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');
    }
}
