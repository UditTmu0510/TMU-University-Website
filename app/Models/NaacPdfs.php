<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacPdfs extends Model
{
    use HasFactory;
    protected $primaryKey = "pdf_id";
    protected $table = "naac_pdfs";
    protected $guarded = [];
    protected $fillable = ['pdf_id','pdf_description','criterion_id','key_indicator_id','metric_id','file_path','pdf_status','pdf_priority','uploaded_by','updated_at','created_at','file_name','directory_path'];

    public function criterion_name(){

        return $this->belongsTo(NaacCriterions::class,'criterion_id','criterion_id');
    }

    public function key_indicator_name(){

        return $this->belongsTo(NaacKeyIndicators::class,'key_indicator_id','key_indicator_id');
    }

    public function metric_name(){

        return $this->belongsTo(NaacMetrics::class,'metric_id','metric_id');
    }


}
