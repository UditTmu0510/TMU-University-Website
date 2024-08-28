<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colleges extends Model
{
    use HasFactory;
    protected $table = 'cd_name'; 
    protected $fillable = ['cd_name','sl_no','cd_code','contact_no_II','contact_no_mob','extension_no','email_id','status','college_title_image_path','img_alt','c_slug','e_content_link','updated_at'];
   

    public function programmes()
    {
        return $this->hasMany(Programmes::class, 'cd_id', 'cd_id')->where('status', 'Y');
    }
    

}


