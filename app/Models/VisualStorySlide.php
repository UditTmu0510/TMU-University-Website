<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisualStorySlide extends Model
{
    use HasFactory;

    protected $table = 'visual_story_slides';

    protected $fillable = [
        'story_id',
        'slide_order',
        'image_url',
        'title',
        'description',
        'duration',
        'status',
    ];

    // Relationship
    public function story()
    {
        return $this->belongsTo(VisualStory::class, 'story_id');
    }
}
