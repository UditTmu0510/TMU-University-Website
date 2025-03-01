<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacMetrics extends Model
{
    use HasFactory;
    protected $primaryKey = "metric_id";
    protected $table = "naac_metrics";
    protected $guarded = [];
    protected $fillable = ['metric_id','key_indicator_id','metric_name','metric_description','metric_status','metric_priority','criterion_id'];
    
    public function criterion_name(){

        return $this->belongsTo(NaacCriterions::class,'criterion_id','criterion_id');
    }

    public function key_indicator_name(){

        return $this->belongsTo(NaacKeyIndicators::class,'key_indicator_id','key_indicator_id');
    }
}
