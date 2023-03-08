<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Role_user;
use App\Models\Permission_role;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function dashboard()
    {
        $user = \Auth::user(); //note the user that logs in

        if ($user->isAbleTo('can-view-dashboard')){
            return view('dashboard');
           }
        else{
             return redirect('/');
        }
    }



}
