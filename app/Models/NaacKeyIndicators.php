<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacKeyIndicators extends Model
{
    use HasFactory;
    protected $primaryKey = 'key_indicator_id';
    protected $table = "naac_key_indicators";
    protected $guarded = [];
    protected $fillable = ['key_indicator_id','criterion_id','key_indicator_name','key_indicator_description','key_indicator_status','key_indicator_priority'];

public function criterion_name(){

    return $this->belongsTo(NaacCriterions::class,'criterion_id','criterion_id');
}

}
