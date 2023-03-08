<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Role_user;
use App\Models\Permission_role;
use Auth;
use DB;
use App\Profile_image;
use Alert;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function manage_permissions(Request $request)
    {
          $user = \Auth::user(); //note the user that logs in
          $loggedin_user_id = Auth::user()->id;

        if($user->hasRole('super_admin'))
        {
         $permissions = Permission::orderBy('id', 'desc')->get();

        return view('permissions.manage_permissions', compact('permissions'))->with('i');
            }
       else{
           abort(403, 'User does not have any of the necessary access rights.');
        }
    }


    public function create_permission()
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

          if($user->hasRole('super_admin'))
        {
        return view('permissions.create_permission');
            }
       else{
          abort(403, 'User does not have any of the necessary access rights.');
        }
    }

    public function store_permission(Request $request)
    {
             $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

     if($user->hasRole('super_admin'))
         {
        $this->validate($request, [
            'name'         => 'required|unique:permissions,name',
            'display_name' => 'required',
            'description'  => 'required',
        ]);

        $permission = new Permission();
        $permission->name = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        $permission->save();

        return redirect('manage_permissions')->with('success', 'Permission created successfully');
             }
       else{
          abort(403, 'User does not have any of the necessary access rights.');
        }
    }

    public function view_permission($id)
    {
          $user = \Auth::user(); //note the user that logs in
         $loggedin_user_id = Auth::user()->id;

  if($user->hasRole('super_admin'))
         {
        $permission = Permission::findOrFail($id);
        $check_permission_role = Permission_role::where('permission_id', $id)->exists();  //check if the role has been assigned to users

        $rolePermissions = Role::join('permission_role', 'permission_role.role_id', '=', 'roles.id')
                                ->where('permission_role.permission_id', $id)
                                ->get();

        return view('permissions.view_permission', compact('permission', 'check_permission_role', 'rolePermissions'));
             }
       else{
           abort(403, 'User does not have any of the necessary access rights.');
        }
    }

    public function edit_permission($id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

        $permission = Permission::find($id);
  if($user->hasRole('super_admin'))
         {
        return view('permissions.edit_permission', compact('permission'));
             }
       else{
            abort(403, 'User does not have any of the necessary access rights.');
        }
    }

    public function store_updated_permission(Request $request, $id)
    {
        $user = \Auth::user(); //note the user that logs in
         $loggedin_user_id = Auth::user()->id;

         if($user->hasRole('super_admin'))
         {
        $this->validate($request, [
            'display_name' => 'required',
            'description'  => 'required',
        ]);

        $permission = Permission::find($id);
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        $permission->save();

        return redirect('view_permission/'.$id)->with('success', 'Permission updated successfully');
               }
       else{
           abort(403, 'User does not have any of the necessary access rights.');
        }
    }

    public function delete_permission($id)
    {
         $user = \Auth::user(); //note the user that logs in
         $loggedin_user_id = Auth::user()->id;

         if($user->hasRole('super_admin'))
         {
         $check_permission_role = Permission_role::where('permission_id', $id)->exists();
        DB::table('permissions')->where('id', $id)->delete();
        Alert::success('Successfully Deleted')->autoclose(3000);
        return redirect('manage_permissions')->with('success', 'Permission deleted successfully');
         }
       else{
            abort(403, 'User does not have any of the necessary access rights.');
        }
    }


  ////////END////////////////////////////////////////////////////////////
}
