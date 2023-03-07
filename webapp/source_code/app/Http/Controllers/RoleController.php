<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Role_user;
use App\Models\Permission_role;
use DB;
use Alert;
use Auth;
use App\Models\Permission_user;
use App\Models\vw_user_details;
use App\Models\vw_user_roleuser_role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');

    }

public function manage_roles(Request $request)
    {
     $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

  if($user->hasRole('super_admin'))
        {
//        $roles = Role::orderBy('id', 'DESC')->paginate(100);
        $roles = Role::orderBy('id', 'desc')->get();
        return view('roles.manage_roles', compact('roles'))->with('i');
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }




    public function create_role()
    {
     $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

    if($user->hasRole('super_admin'))
      {
        $permission = Permission::get();

        return view('roles.create_role', compact('permission'));
         }
      else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }



    public function store_role(Request $request)
    {
//   dd($request->all());
       $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

     if($user->hasRole('super_admin'))
         {
         //  dd($request->all());
        $this->validate($request, [
            'name'         => 'required|unique:roles,name',
            'display_name' => 'required',
            'description'  => 'required',
            'permission'   => 'required',
        ]);

        $role = new Role();
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect('manage_roles')->with('success', 'Role created successfully');
         }
      else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }



    public function view_role($id)
         {
           $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

  if($user->hasRole('super_admin'))
     {

        $role = Role::find($id);
        $rolePermissions = Permission::join('permission_role', 'permission_role.permission_id', '=', 'permissions.id')
            ->where('permission_role.role_id', $id)
            ->get();
     $check_role_user = Role_user::where('role_id', $id)->exists();  //check if the role has been assigned to users

        return view('roles.view_role', compact('role', 'rolePermissions', 'check_role_user'));
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }



    public function edit_role($id)
        {

    $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

        $role = Role::find($id);

    if(($user->hasRole('super_admin')) && ($role->default_role==0))
        {
        $permission = Permission::get();
        $rolePermissions = DB::table('permission_role')->where('permission_role.role_id', $id)
            ->pluck('permission_role.permission_id', 'permission_role.permission_id')->toArray();

        return view('roles.edit_role', compact('role', 'permission', 'rolePermissions'));
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }



    public function store_updated_role(Request $request, $id)
            {

     $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

        $this->validate($request, [
            'name'         => 'required',
            'display_name' => 'required',
            'description'  => 'required',
            'permission'   => 'required',
        ]);

        $role = Role::find($id);
    if(($user->hasRole('super_admin')) && ($role->default_role==0))
        {
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        DB::table('permission_role')->where('permission_role.role_id', $id)
            ->delete();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect('view_role/'.$id)->with('success', 'Role updated successfully');
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }


    public function delete_role($id)
    {
     $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

    $role = Role::find($id);

  $check_role_user = Role_user::where('role_id', $id)->exists();  //check if the role has been assigned to users

     if(($user->hasRole('super_admin')) && ($role->default_role==0) &&  ($check_role_user === false))
        {
        DB::table('permission_role')->where('permission_role.role_id', $id)
            ->delete();
        DB::table('roles')->where('id', $id)->delete();

        Alert::success('Successfully Deleted')->autoclose(3000);
        return redirect('manage_roles')->with('success', 'Role deleted successfully');
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }


///////////////////////////////GIVING SOME USERS SPECIAL PERMISSIONS///////////////////////////////////////////////////////
 public function assign_permissions_to_user($id)
        {

    $user = \Auth::user(); //note the user that logs in
    $loggedin_user_id = Auth::user()->id;

    if($user->hasRole('super_admin'))
              {
        $user_details =vw_user_roleuser_role::where('user_id', $id)->first();

        $main_role_id= $user_details->role_id;

        $role = Role::find($main_role_id);

        $rolePermissions = Permission::join('permission_role', 'permission_role.permission_id', '=', 'permissions.id')
        ->where('permission_role.role_id', $main_role_id)
        ->get();

        $userPermissions = Permission::join('permission_user', 'permission_user.permission_id', '=', 'permissions.id')
        ->where('permission_user.user_id', $id)
        ->get();


        $permission = Permission::get();
        $PermissionsUser = DB::table('permission_user')->where('permission_user.user_id', $id)
            ->pluck('permission_user.permission_id', 'permission_user.permission_id')->toArray();

        return view('roles.assign_permissions_to_user', compact('user_details', 'permission', 'PermissionsUser', 'role', 'rolePermissions', 'userPermissions'));
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }



    public function store_assign_permissions_to_user(Request $request, $id)
            {
     $user = \Auth::user(); //note the user that logs in
     $loggedin_user_id = Auth::user()->id;

    if($user->hasRole('super_admin'))
      {

    DB::table('permission_user')->where('permission_user.user_id', $id)
    ->delete();

if ($request->has('permission')){ //check if any permission checkbox is checked
        $get_permissions = $request->permission; //get all the newly assigned permissions
        foreach ($get_permissions as $get_permission) {
        $assign_permissions_to_user =  new Permission_user();
        $assign_permissions_to_user->user_id = $id;
        $assign_permissions_to_user->permission_id = $get_permission;
        $assign_permissions_to_user->user_type = 'App\Models\User';
        $assign_permissions_to_user->save();
        }
    }
        return redirect('assign_permissions_to_user/'.$id)->with('success', 'User Permissions updated successfully');
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }


 public function users_with_special_permissions()
        {

    $user = \Auth::user(); //note the user that logs in
    $loggedin_user_id = Auth::user()->id;

    if($user->hasRole('super_admin'))
              {
        $users =  DB::table('vw_permission_user')
           ->select('id', 'name', 'email')
            ->groupBy('id')
            ->groupBy('name')
            ->groupBy('email')
            ->orderBy('name', 'asc')
            ->get();

        return view('users.users_with_special_permissions', compact('users'));
         }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }


//////END//////////////////////////////////////////////////
}
