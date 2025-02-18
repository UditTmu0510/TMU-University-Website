<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERPUniversity extends Model
{

        use HasFactory;
    protected $table = 'erp_university_meta';
    protected $guarded = [];
    protected $fillable = ['universitymetaid ','university_shortname','university_desc','established_year','ugc_approval_no','location','postaladdress','createdby','status','ipaddress'];
}
