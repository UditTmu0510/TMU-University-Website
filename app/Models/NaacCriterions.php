<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacCriterions extends Model
{
    use HasFactory;
    protected $table = 'naac_criterion';
    protected $guarded = [];
    protected $fillable = ['criterion_id','criterion_name','criterion_description','criterion_status','criterion_priority'];
}
