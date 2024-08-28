<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\ValidationException;
use Exception;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function AdminDashboard()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_dashboard',compact('profileData'));
    }


    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function AdminLogin()
    {

        return view('admin.admin_login');
    }


    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }

public function AdminProfileUpdate(Request $request)
{

   $id = Auth::user()->id;
   $data = User::find($id);
   $data->name = $request->name;
   $data->company = $request->company;
   $data->designation = $request->designation;
   $data->address = $request->address;
   $data->email = $request->email;
   $data->phone = $request->phone;

   if ($request->hasFile('photo')) {
      $file = $request->file('photo');
      if(!empty($data->photo))
      {
      @unlink(public_path($data->photo));
      }
      $filename = date('YmdHi') . $file->getClientOriginalName(); // corrected line

      $file->move(public_path('backend/assets/img/'), $filename);
      $data->photo = 'backend/assets/img/' . $filename;
   }

   $data->save();

Session::flash('success', 'Your Profile data updated successfully');

return redirect()->back();
}


public function AdminChangePassword(Request $request){

    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed'
    ], [
        'old_password.required' => 'Please enter your current password.',
        'new_password.required' => 'Please enter a new password.',
        'new_password.confirmed' => 'The new password confirmation does not match.',
    ]);

    if(!Hash::check($request->old_password, auth::user()->password)) {
        return redirect()->back()->withErrors(['old_password' => 'Incorrect current password'])->withInput();
    }

    User::whereId(auth::user()->id)->update([
        'password' => Hash::make($request->new_password)
    ]);

    Session::flash('success', 'Password changed successfully.');
    return redirect()->route('admin.profile');
}


    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function AllAdmin()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $alladmin = User::all();
        return view('admin.backend.pages.admin.all_admin', compact('alladmin','profileData'));
    }


    public function AddAdmin()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $roles = Role::all();
        return view('admin.backend.pages.admin.add_admin',compact('roles','profileData'));
    }


    public function storeAdmin(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'username' => 'required',
                'designation' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|digits:10',
                'address' => 'required',
                'company' => 'required',
                'role' => 'required',
                'password' => 'required', // Add minimum length requirement for password
            ]);
    
            $validatedData['role'] = 'admin'; // Set role here, no need to rely on input
            
            $validatedData['password'] = bcrypt($validatedData['password']); // Hash the password
            
            $user = User::create($validatedData); // Create user
    
            if ($request->has('role')) {
                $user->assignRole($request->role);
            }
    
            Session::flash('success', 'User added successfully.');
        } catch (ValidationException $e) {
            Session::flash('error', 'Validation Error in Adding the User: ' . $e->getMessage());
        } catch (Exception $e) {
            Session::flash('error', 'Error in Adding the User: ' . $e->getMessage());
        }
    
        return redirect()->route('all.admin');
    }


    public function EditAdmin($id)
    {
        try{
        if(is_numeric($id))
        {
            $user_id = Auth::user()->id;
        $profileData = User::find($user_id);
            $roles = Role::all();
        $adminData = User::find($id);
        return view('admin.backend.pages.admin.edit_admin',compact('adminData','roles','profileData'));
        }else{
            Session::flash('error', 'ID not found in Editing the User: ');
        return redirect()->route('all.admin'); 
        }
    }catch(Exception $e)
    {
        Session::flash('error', 'Error in Editing the User: ' . $e->getMessage());
        return redirect()->route('all.admin');

    }

    }

    public function DeleteAdmin($id)
    {
try{
$user = User::find($id);
if(!is_null($user))
{
    $user->delete();
}

Session::flash('success', 'Admin deleted successfully.');
}catch(Exception $e)
{
    Session::flash('error','Failed to Delete Admin:'.$e->getMessage());
}
return redirect()->route('all.admin');
    }


    public function UpdateAdmin(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'username' => 'required',
                'designation' => 'required',
                'email' => 'required',
                'phone' => 'required|digits:10',
                'address' => 'required',
                'company' => 'required',
                'role' => 'required',
            ]);
$password = $request->password;
$user = User::findOrFail($id);
if(!(empty($password)))
{
    $user->update([
        'name' => $validatedData['name'],
        'username' => $validatedData['username'],
        'designation' => $validatedData['designation'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'address' => $validatedData['address'],
        'company' => $validatedData['company'],
        'role' => 'admin',
        'password' => bcrypt($password)
    ]);
}


if(empty($password))
{
    $user->update([
        'name' => $validatedData['name'],
        'username' => $validatedData['username'],
        'designation' => $validatedData['designation'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'address' => $validatedData['address'],
        'company' => $validatedData['company'],
        'role' => 'admin'
    ]);
}
    
           
          
            if ($request->has('role')) {
                $user->syncRoles([$request->role]);
            }
    
            Session::flash('success', 'User Updated Successfully');
        } catch (ValidationException $e) {
            Session::flash('error', 'Error in Validation: ' . $e->getMessage());
        } catch (Exception $e) {
            Session::flash('error', 'Error in Updating the Admin: ' . $e->getMessage());
        }
    
        return redirect()->route('all.admin');
    }
    
    
}
