<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddOrderRequest;
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
      $user = Auth::user();

      if($user['type'] == 1){
        $school = School::where('status', '=', 1)
                          ->lists('name', 'id');

        $mpackage = MealPackage::where('status', '=', 1)
                                ->lists('name', 'id');
        return view('user.order', compact('user', 'school', 'mpackage'));
      }
      else{
        return redirect()->action('AdminController@index');
      }
    }

    public function addOrder(AddOrderRequest $request)
    {
      $user = Auth::user();
      if($user['type'] == 1){
        $order = Order::create([
          'userid' => $user['id'],
          'mpid'   => $request->mpackage,
          'schoolid' => trim($request->school),
          'childname' => trim($request->childname),
          'startdate' => $request->startdate,
          'status' => 1,
        ]);

        return redirect()->action('UserController@viewOrders');
      }
      else{
        return redirect()->action('AdminController@index');
      }
    }

    public function viewOrders()
    {
      $user = Auth::user();

      if($user['type'] == 1){
        $orders = Order::with('mealpackages')->where('userid', '=', $user['id'])->get();

        return view('user.viewOrders', compact('user', 'orders'));
      }
      else{
        return redirect()->action('AdminController@index');
      }
    }

    public function getMealPackage()
    {
      $user = Auth::user();

      if($user['type'] == 1){
        $mpackage = MealPackage::where('status', '=', 1)->get();

        return view('user.home', compact('user', 'mpackage'));
      }
      else{
        return redirect()->action('AdminController@index');
      }
    }

    public function getSpecificPackage($id)
    {
      $user = Auth::user();

      if($user['type'] == 1){
        $mpackage = MealPackage::where('id', '=', $id)->where('status', '=', 1)->get();

        return view('user.package', compact('user', 'mpackage'));
      }
      else{
        return redirect()->action('AdminController@index');
      }
    }
}
