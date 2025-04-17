<?php

// app/Models/WebsiteFeedback.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteFeedback extends Model
{
    // Define the table name explicitly (if needed, as it will default to 'website_feedback')
    protected $table = 'website_feedback';

    // Define the fields that can be mass-assigned
    protected $fillable = ['name', 'phone', 'feedback', 'image_1', 'image_2'];

    // If you're using timestamps (created_at and updated_at), you can keep this property
    public $timestamps = true;
}
