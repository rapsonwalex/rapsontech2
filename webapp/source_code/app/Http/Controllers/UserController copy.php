<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Role_user;
use App\Models\Permission_role;
use DB;
use Auth;
use Alert;
use Session;
use Storage;
use Hash;
use App\Filetable;
use Redirect;
use Input;
use Validator;
use App\Models\vw_user_roleuser_role;
use Carbon\Carbon;
use App\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

///////////////////////////////6.ADMIN///////////////////////////////////////////
  public function manage_users()
   {
    //    dd('hi');
       $user = \Auth::user(); //note the user that logs in
       $loggedin_user_id = Auth::user()->id;

      if($user->hasRole('super_admin'))
     {
        $role_users = vw_user_roleuser_role::where('end_record','=', 0)->orderBy('name', 'asc')->get();
        return view('users.manage_users', compact('role_users'));
      }
       else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }

  public function view_user_details($user_id)
    {
       $user = \Auth::user(); //note the user that logs in
       $loggedin_user_id = Auth::user()->id;

       if(($user->hasRole('admin_role')) || ($loggedin_user_id==$user_id))
      {
         $admin_details =vw_user_roleuser_role::where('end_record','=', 0)->where('user_id', $user_id)->first();

         return view('users.view_user_details', compact('admin_details'));
      }
       else{
         return view('errors.401');
        }
    }

  public function register_user()
    {

       $user = \Auth::user(); //note the user that logs in
       $loggedin_user_id = Auth::user()->id;

       if($user->hasRole('admin_role'))
     {
         $roles = Role::all()->pluck('display_name','id');

         return view('users.register_user', compact('companies', 'roles'));
      }
       else{
         return view('errors.401', compact('profile_info'));
        }
    }

  public function store_user(Request $request)
    {
       //  dd($request->all());
        $user = \Auth::user(); //note the user that logs in
        if($user->hasRole('admin_role')) {
           $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'phone_number' => 'max:15',
            'password' => 'required|min:8|confirmed',
            'role_id'=> 'required',
        ]);
        $password = $request->password;


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->phone_number = $request->phone_number;
        $user->password = bcrypt($password);
        $user->save();

        $LastInsertId = $user->id;

        $role_user = new role_user();
        $role_user->user_id = $LastInsertId;
        $role_user->role_id = $request->role_id;
        $role_user->user_type = "App\User";
        $role_user->save();

            Alert::success('Record Created Successfully')->autoclose(3000);
            return redirect('manage_users');
      }
       else{
          return view('errors.401', compact('profile_info'));
        }
    }

  public function edit_user($user_id)
    {
       $user = \Auth::user(); //note the user that logs in
       $loggedin_user_id = Auth::user()->id;

      if(($user->hasRole('admin_role')) || ($loggedin_user_id==$user_id))
       {
         $roles = Role::all()->pluck('display_name','id');
         $admin_details =vw_user_roleuser_role::where('end_record','=', 0)->where('user_id', $user_id)->first();

         return view('users.edit_user', compact('admin_details', 'roles'));
        }
       else{
         return view('errors.401', compact('profile_info'));
        }
    }


  public function save_updated_user_record(Request $request, $user_id)
    {

     // dd($request->all());
          $user = \Auth::user(); //note the user that logs in
           $loggedin_user_id = Auth::user()->id;
           if($user->hasRole('admin_role'))
          {

            $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              // 'phone_number' => 'max:15',
              // 'role_id'=> 'required',
            ]);
            $check_role = $request->role_id;


        $user = User::findorfail($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->phone_number = $request->phone_number;

         $user->save();


          $input = $request->all();
          $old_role_id = $request->old_role_id;

          if ( !empty ( $old_role_id ) ) {
           $role_user=role_user::where('user_id' ,'=', $user_id)->where('role_id','=', $old_role_id)->first();
           $role_user->delete();
          }

          $role_id = $request->role_id;
          if ( !empty ( $role_id ) ) {
           $role_usernew = new role_user();
           $role_usernew->user_id = $user_id;
           $role_usernew->role_id = $role_id;
           $role_usernew->user_type = "App\User";
           $role_usernew->save();
          }

          Alert::success('Record Updated Successfully')->autoclose(3000);
           return redirect('view_user_details/'.$user_id);
          }

           elseif ($loggedin_user_id==$user_id)
          {

            $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
            ]);

            $user = User::findorfail($user_id);
            $input = $request->all();
            $user->update($input);

          // Alert::success('Record Updated Successfully')->autoclose(3000);
          Alert::success('Good job!');
          return redirect('view_user_details/'.$user_id);
          }

          else{
            return view('errors.401', compact('profile_info'));
          }
}


////////////////////////////10.USER PROFILE IMAGE///////////////////////////////
  public function update_user_profile_image($user_id)
    {
        $loggedin_user_id = Auth::user()->id;
        $profile_info =Profile_image::where('user_id', $loggedin_user_id)->first();
        $profile_image =vw_user_profile_image::where('end_record','=', 0)->where('user_id', $user_id)->first();
        return view('users.update_user_profile_image', compact('profile_image', 'profile_info'));
    }


  public function save_updated_user_profile_image(Request $request, $user_id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
        $profile_info =Profile_image::where('user_id', $loggedin_user_id)->first();

        if(($user->hasRole('admin_role')) || ($loggedin_user_id==$user_id)) {

          $this->validate($request, [
             'filenam' => 'required|max:10000|mimes:jpeg,png,jpg,pdf'
          ]);

          //  Updating profile image

          $profile_image =Profile_image::where('user_id', $user_id)->first();

          $input = $request->all();

          $file= Input::file('filenam');
          $extension = Input::file('filenam')->getClientOriginalExtension();
         // $filename = rand(11111,99999).'.'.$extension; // renameing image
          $filename = $user_id.'.'.$extension; // renameing image
          $destinationPath = 'user_profile_image';//its refers proj/public/user_profile_image directry

          $input['photo']=$filename;
          $profile_image->update($input);

          $upload_success = $file->move($destinationPath, $filename);
          return back();
        }
        else{
          return view('errors.401', compact('profile_info'));
        }
  }


  public function remove_user_profile_image($user_id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
        $profile_info =Profile_image::where('user_id', $loggedin_user_id)->first();

        if(($user->hasRole('admin_role')) || ($loggedin_user_id==$user_id)) {

            $profile_image =Profile_image::where('user_id', $user_id)->first();
            $photo='userlogo.jpg';
            $profile_image->photo = ($photo);
            $profile_image->update();

            return back();
        }
        else{
            return view('errors.401', compact('profile_info'));
        }
    }

////////////////////////////11.LOGIN CREDENTIALS///////////////////////////////
  public function reset_credentials($user_id)
    {
       $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
       if(($user->hasRole('admin_role')) || ($loggedin_user_id==$user_id)) {

      $user_details =User::where('end_record','=', 0)->where('id', $user_id)->first();

            return view('users.user_password_reset', compact('user_details', 'profile_info'));
        }
        else{
            return view('errors.401', compact('profile_info'));
        }
    }

  public function save_reset_credentials(Request $request, $user_id)
    {
       $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

          $request_data = $request->All();
           if($loggedin_user_id==$user_id) {
            $this->validate($request, [
            'current-password' => 'required',
            'password' => 'required|same:password|min:8',
            'password_confirmation' => 'required|same:password|min:8',
            ]);

          $current_password = Auth::User()->password;
          if(Hash::check($request_data['current-password'], $current_password))
          {
            $user_id = Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->save();
            Auth::logout();
            Session::forget('id');
            Session::flush();
            session_unset();
            \Session::flash('message', 'Password Changed Successfully');
            Alert::success('Password Changed Successfully')->autoclose(3000);
            return redirect('/login');
          }
          else{
            Alert::error('Please enter correct current password', 'Oops!')->autoclose(4000);
            // dd('$theuser_id');
            // $error = array('current-password' => 'Please enter correct current password');
            return back();
            // return response()->json(array('error' => $error), 400);
          }
        }
           if($user->hasRole('admin_role')) {

          $this->validate($request, [
            'password' => 'required|same:password|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!@#$%^&*()]).*$/',
            'password_confirmation' => 'required|same:password|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!@#$%^&*()]).*$/',
            ]);

            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->save();

            Alert::success('Password Changed Successfully')->autoclose(3000);
             return redirect('view_user_details/'.$user_id);
          }

      }




  public function delete_user($user_id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

        if($user->hasRole('admin_role')) {
          $get_user =User::where('end_record','=', 0)->where('id', $user_id)->first();
             // dd( $get_user);
                  if (!empty($get_user)){
                  $user_delete = User::find($user_id);
                  $user_delete->end_record = 1;
                  $user_delete->update();
                  Alert::success('User Deleded Successfully')->autoclose(3000);
                  return redirect('manage_users');
                    }
                    else{
                      return view('errors.401', compact('profile_info'));
                  }
        }
        else{
            return view('errors.401', compact('profile_info'));
        }
    }


//END OF TAG
}
