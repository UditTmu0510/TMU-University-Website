<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    use HasFactory;
    
    protected $table = 'faculties'; 
    protected $primaryKey = 'fy_id'; 
    protected $fillable = ['fy_name', 'fy_short_name', 'status', 'updated_at', 'created_at'];
    
    public function colleges()
    {
        return $this->hasMany(Colleges::class, 'faculty_id', 'fy_id');
    }
}
