<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use Illuminate\Support\Facades\DB;
use Exception;

class RoleController extends Controller
{
    public function AllPermission()
    {
        
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $permissions = Permission::all();
        return view('admin.backend.pages.permission.all_permission', compact('permissions', 'profileData'));
    }


    public function AllRoles()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $roles = Role::all();
        return view('admin.backend.pages.roles.all_roles',compact('roles','profileData'));
    }

    public function AddPermission()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);
        $permissions = Permission::all();
        return view('admin.backend.pages.permission.add_permission',compact('permissions','profileData'));
    }


    public function AddRoles()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $roles = Role::all();
        return view('admin.backend.pages.roles.add_role',compact('roles','profileData'));
    }




    public function StorePermission(Request $request)
{
    try {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'group_name' => 'required|max:255'
        ]);
        
        Permission::create([
            'name' => $validateData['name'],
            'group_name' => $validateData['group_name']
        ]);

        Session::flash('success', 'Permission added successfully.');
    } catch (ValidationException $e) {
        Session::flash('error', 'Validation failed: ' . $e->getMessage());
    } catch (Exception $e) {
        Session::flash('error', 'Failed to add permission: ' . $e->getMessage());
    }

    return redirect()->route('add.permission');
}


public function StoreRole(Request $request){

    try{
        $validateData = $request->validate([
'name' => 'required|max:255'
        ]);

        Role::create([
          'name'=>$validateData['name']  
        ]);
        Session::flash('success','Role Added Successfully');

    }catch (ValidationException $e)
    {
        Session::flash('error','Validation Failed :'.$e->getMessage());

    }catch(Exception $e)
    {
        Session::flash('error','Failed to Add Role :'.$e->getMessage());
    }

    return redirect()->route('add.roles');
}

public function EditPermission($id)
{
    $id_profile = Auth::user()->id;
    $profileData = User::find($id_profile);
$permission = Permission::find($id);
return view('admin.backend.pages.permission.edit_permission',compact('permission','profileData'));
}


public function EditRole($id)
{
    $id_profile = Auth::user()->id;
    $profileData = User::find($id_profile);
$role = Role::find($id);
return view('admin.backend.pages.roles.edit_role',compact('role','profileData'));
}




public function UpdatePermission(Request $request)
{
    try{
        $per_id = $request->id;
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'group_name' => 'required|max:255'
        ]);
        Permission::find($per_id)->update([
            'name' => $validateData['name'],
            'group_name' => $validateData['group_name']

        ]);
      


        Session::flash('success', 'Permission updated successfully.');
    }catch(ValidationException $e)
    {
        Session::flash('error','Validation Failed:'.$e->getMessage());

    }catch(Exception $e)
    {
        Session::flash('error','Failed to Update Permission :'.$e->getMessage());
    }

    return redirect()->route('all.permission');

}


public function UpdateRole(Request $request)
{
try{
    $role_id = $request->id;
    $validateData = $request->validate([
        'name' => 'required|max:255'
    ]);

    Role::find($role_id)->update([
        'name' => $validateData['name']
    ]);
    Session::flash('success', 'Role updated successfully.');

}catch(ValidationException $e)
{

    Session::flash('error', 'Validation Failed :'.$e->getMessage());

}catch(Exception $e)
{
    Session::flash('error','Failed to Update Role :'.$e->getMessage());
}

return redirect()->route('all.roles');
}

public function DeletePermission($id)
{
    try{
Permission::find($id)->delete();
Session::flash('success', 'Permission deleted successfully.');
    }catch(Exception $e)
    {
        Session::flash('error','Failed to Delete Permission :'.$e->getMessage());
    }

    return redirect()->route('all.permission');
}

public function DeleteRole($id)
{
    try{
        Role::find($id)->delete();
        Session::flash('success','Role Deleted Successfully');
    }catch(Exception $e)
    {
        Session::flash('error','Failed to Delete Role :'.$e->getMessage());
    }
    return redirect()->route('all.roles');
}

public function ImportPermission()
{
    $id = Auth::user()->id;
    $profileData = User::find($id);
    $permissions = Permission::all();
    return view('admin.backend.pages.permission.import_permission',compact('permissions', 'profileData'));

}


public function ExportPermission()
{
    return Excel::download(new PermissionExport, 'permissions.xlsx');
}

public function PermissionImport(Request $request)
{
    try{
        Excel::import(new PermissionImport,$request->file('import_file'));
        Session::flash('success', 'Permission Imported successfully.');
    }catch(Exception $e)
    {
    Session::flash('error','Failed to Import Permission :'.$e->getMessage());
    }
    return redirect()->route('import.permission');
}

public function AddRolesPermission()
{
    $id = Auth::user()->id;
    $profileData = User::find($id);
    $roles = Role::all();
    $permission_groups = User::getPermissionGroups();
    $permissions = Permission::all();
    return view('admin.backend.pages.rolesetup.add_roles_permission',compact('permission_groups','roles','profileData'));
}

public function RolePermissionsStore(Request $request)
{
  
  try{
    $data = array();
  $permissions = $request->permission;
 
  foreach($permissions as $key => $value)
  {
    $data['role_id'] = $request->role_id;
    $data['permission_id'] = $value;
    DB::table('role_has_permissions')->insert($data);
  }

 
  Session::flash('success', 'Permission and Role Mapped successfully');
  }catch(Exception $e)
  {
    Session::flash('error', 'Error in Mapping Role and Permissions'.$e>getMessage());
  }
   return redirect()->route('all.roles.permission');

}

public function AllROlesPermission()
{
    $id = Auth::user()->id;
    $profileData = User::find($id);

    $roles = Role::all();
    return view('admin.backend.pages.rolesetup.all_roles_permission',compact('roles','profileData'));
}


public function AdminEditRoles($id)
{
    $id_profile = Auth::user()->id;
    $profileData = User::find($id_profile);
    $role = Role::find($id);
    $permissions = Permission::all();
    $permission_groups = User::getPermissionGroups();

    return view('admin.backend.pages.rolesetup.edit_roles_permission',compact('role','permissions','permission_groups','profileData'));

}

public function AdminUpdateRoles(Request $request)
{
    try {
        $role_id = $request->role_id;
        $role = Role::find($role_id);
        
        if (!$role) {
            // Handle case where role is not found
            Session::flash('error', 'Role not found.');
            return redirect()->back();
        }
        
        $permissions = $request->input('permission', []);

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
            Session::flash('success', 'Role permissions updated successfully.');
        } else {
            // Handle case where no permissions are provided
            Session::flash('error', 'No permissions selected.');
        }
    } catch (Exception $e) {
   // Log the error message for debugging purposes
   logger()->error($e->getMessage());
        
   // Flash an error message for the user including the exception message
   Session::flash('error', 'Error in updating role permissions. ' . $e->getMessage());
    }

    return redirect()->route('all.roles.permission');
}

public function AdminDeleteRoles($id)
{
    try{
    $role = Role::find($id);
    if(!is_null($role))
    {
        $role->delete();
        Session::flash('success','Role  Deleted Successfully');
    }else{
        Session::flash('error','Role Does not Exists');
    }
}catch(Exception $e)
{
        Session::flash('error','Error in Deleting the Role'.$e->getMessage());
}
return redirect()->route('all.roles.permission');
}

}
