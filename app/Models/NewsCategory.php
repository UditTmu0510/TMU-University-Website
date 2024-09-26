<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
  use HasFactory;
    protected $guarded = [];
    protected $table = 'news_categories';
    protected $fillable = ['id','category_name','category_slug','category_status','created_at','updated_at'];
}
