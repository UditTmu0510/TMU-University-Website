<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
       use HasFactory;
    protected $table = "news";
    protected $guarded = [];
    protected $fillable = ['id','cd_id','event_date','event_title','event_short_title','event_description','event_full_description','title_image','title_image_tag','ti_path','ti_full_path','event_image1','event_image1_tag','ei1_path','ei1_full_path','event_image2','event_image2_tag','ei2_path','ei2_full_path','event_image3','event_image3_tag','ei3_path','ei3_full_path','event_image4','event_image4_tag','ei4_path','ei4_full_path','event_image5','event_image5_tag','ei5_path','ei5_full_path','event_image6','event_image6_tag','ei6_path','ei6_full_path','category','event_day','event_month','event_month_name','event_year','display_main','status','posted_at','n_slug','meta_title','meta_description','organised_by','monaco_image_path','monaco_image_alt_tag','created_at','updated_at'];

    
     public function news_category(){
        return $this->belongsTo(NewsCategory::class,'category','id');
    }
    
}
