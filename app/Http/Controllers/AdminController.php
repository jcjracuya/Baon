<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddSchoolRequest;
use App\Http\Requests\AddMPRequest;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\School;
use App\MealPackage;

class AdminController extends Controller
{
    public function index(){
      $user = Auth::user();

      if($user['type'] == 0){
        return view('admin.index');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function viewSchools(){

      $schools = School::where('status', '1')
                        ->orderBy('name', 'desc')
                        ->get();
    	return view('admin.view-schools', compact('schools'));
    }

    public function viewMP(){
    	return view('admin.view-mp');
    }

    public function addSchool(){
      $user = Auth::user();

      if($user['type'] == 0){
        return view('admin.add-school');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function storeSchool(AddSchoolRequest $request){
      $user = Auth::user();

      if($user['type'] == 0){

        School::create([
          'name' => trim($request->name),
          'addr' => trim($request->addr),
          'contactno' => trim($request->contactno),
          'status' => 1,
        ]);

        return redirect()->action('AdminController@viewSchools');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function addMP(){
      $user = Auth::user();

      if($user['type'] == 0){

        return view('admin.add-mp');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function storeMP(AddMPRequest $request){
      $user = Auth::user();

      if($user['type'] == 0){

        MealPackage::create([
          'name' => trim($request->name),
          'details' => trim($request->details),
          'price' => trim($request->price),
          'status' => 1,
        ]);
        return view('admin.add-mp');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }
}
