<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $table = "success_stories";
    protected $guarded = [];
    protected $fillable = ['story_type','student_name','admitted_year','passout_year','current_year','currently_working_at','thumbnail_name','thumbnail_path','testimonial_text','video_path','alt_tag','cd_id','prog_id','display_university_main','display_college_main','display_programme_page','testimonial_format_type','status','priority','linkedin_url','display_alumni_department','display_ctld_department','display_crc_department'];

    public function programme_name(){
        return $this->belongsTo(Programmes::class,'prog_id','prog_id');
    }

    
    public function college_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');
    }

}
