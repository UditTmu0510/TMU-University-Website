<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'blogs_category';
    protected $fillable = ['id','category_name','category_status','updated_at','category_slug'];
}
