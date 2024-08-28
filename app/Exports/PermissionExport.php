<?php

namespace App\Exports;

use Spatie\Permission\Models\Permission;
use Maatwebsite\Excel\Concerns\FromCollection;

class PermissionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Permission::all(); this for returning all the fields of the table
        return Permission::select('name','group_name')->get(); // Now if you want to get only name and Group Name in the excel.
        
    }
}
