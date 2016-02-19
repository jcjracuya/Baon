<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Order;

class UserController extends Controller
{
    public function home()
    {
      return view('user.home');
    }

    public function order()
    {
      return view('user.order');
    }

    public function addOrder()
    {
      
    }
}
