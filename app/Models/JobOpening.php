<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'responsibilities',
        'requirements',
        'status',
        'priority'
    ];

}
