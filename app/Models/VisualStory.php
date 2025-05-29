<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisualStory extends Model
{
    use HasFactory;

    protected $table = 'visual_stories';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'thumbnail_path',
        'icon',
        'status',
        'priority',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(VisualStoryCategory::class, 'category_id');
    }

    public function slides()
    {
        return $this->hasMany(VisualStorySlide::class, 'story_id')->orderBy('slide_order');
    }
}
