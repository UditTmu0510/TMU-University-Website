<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmes extends Model
{
    use HasFactory;
    protected $table = 'programme_master_new';
    protected $guarded = [];
    protected $fillable = ['cd_id','slno','prog_name','prog_code','prog_duration_type','prog_duration_with_intersnhip','prog_duration_without_intersnhip','intake','medium','eligibility','criteria_merit','programme_level','about_prog','prog_specific_outcomes','prog_outcomes','scope','additional_information','programme_by_qualification','programme_by_discipline','programme_by_category','study_material_flag','syllabus_flag','scholarship_scheme','usp_section_flag','success_stories_section_flag','our_recruiters_section_flag','fee_structure_section_flag','scholarship_section_flag','eligibility_section_flag','faq_section_flag','programme_image_path','programme_banner_path','programme_brochure_path','page_slug','usp_section_code','video_section_flag','apply_now_button_flag', 'apply_now_button_color', 'video_url','display_on_home_page','display_on_college_page','branch_id','status'];
    public function college_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');
    }
}
