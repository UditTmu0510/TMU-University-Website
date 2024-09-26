<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;
    protected $table = 'syllabus';
    protected $guarded = [];
    protected $fillable = ['id','cd_id','prog_id','alt_tag','prog_id','prog_code','acad_year','file_name','file_path','status'];   
}
