<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgrammeSpecialization extends Model
{
    use HasFactory;

    protected $table = 'programme_specializations';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'prog_id',
        'name',
        'short_description',
        'page_link',
        'icon_path',
        'status',
        'priority',
    ];

    /**
     * Get the programme this specialization belongs to.
     */
    public function programme()
    {
        return $this->belongsTo(Programmes::class, 'prog_id', 'prog_id');
    }
}
