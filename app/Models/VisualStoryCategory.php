<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisualStoryCategory extends Model
{
    use HasFactory;

    protected $table = 'visual_story_categories';

    protected $fillable = [
        'name',
        'slug',
        'icon_class',
        'status',
        'priority',
    ];

    // Optional relationship (if needed)
    public function stories()
    {
        return $this->hasMany(VisualStory::class, 'category_id');
    }
}
