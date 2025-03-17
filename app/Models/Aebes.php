<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aebes extends Model
{
    use HasFactory;

    protected $table = 'aebas_attendance';

    protected $fillable = [
        'date',
        'pdf_path',
    ];

    // Optional, only if you want to be explicit
    public $timestamps = true;
}
