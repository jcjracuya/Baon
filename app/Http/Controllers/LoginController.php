<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
Use Session;
Use Auth;
Use App\User;

class LoginController extends Controller
{
  public function login(Request $request)
  {

    if(!Auth::check())
    {
        echo "Hi";
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'status' => 1]))
        {
          $user = User::where('email', $request['email'])->first();
          $type = $user->type;
          $status = $user->status;

            if($type == '0'){
                // dd($user);
                // return redirect('/admin');
                return redirect()->action('AdminController@index');
            }
            else{
              return redirect()->action('UserController@home');
                // return redirect('/user/home');
            }


        }
        else
        {
            $user = User::where('email', $request['email'])->first();
            if(!empty($user)){
              $status = $user->status;

              if ($status == '0') {
                return redirect('/login');
              }
              else {
                return redirect('/login');
              }
            }
        }
    }
    else
    {
        return redirect('UserController@home');
    }
  }
}
