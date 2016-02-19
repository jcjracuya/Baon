<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Auth;
use App\User;
use App\Order;

class UserController extends Controller
{
    public function home()
    {
      $user = Auth::user();

      if($user['type'] == 1){
        return view('user.home');
      }
      else{
        return redirect()->action('AdminController@index');
      }

    }

    public function order()
    {
      return view('user.order');
    }

    public function addOrder()
    {

    }
}
