<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Order;
use App\School;
use App\MealPackage;

class UserController extends Controller
{
    public function home()
    {
      $user = Auth::user();
      // dd($user);
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

    public function getSchools()
    {
      $user = Auth::user();

      if($user['type'] == 1){
        $school = School::where('status', '=', 1)
                          ->lists('name', 'id');

        return view('user.order', compact('user', 'school'));
      }
      else{
        return redirect()->action('AdminController@index');
      }
    }

    public function getMealPackage()
    {
      $user = Auth::user();

      if($user['type'] == 1) {
        $mpackage = MealPackage::where('status', '=', 1)
                                ->lists('name', 'id');

        return view('user.order', compact('user', 'mpackage'));
      }
      else {
        return redirect()->action('AdminController@index');
      }
    }

    public function addOrder()
    {

    }
}
