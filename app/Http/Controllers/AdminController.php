<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddSchoolRequest;
use App\Http\Requests\AddMPRequest;
use App\Http\Requests\EditMPRequest;
use App\Http\Requests\EditSchoolRequest;
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
                        ->orderBy('name')
                        ->get();
    	return view('admin.view-schools', compact('schools'));
    }

    public function viewMP(){

      $mp = MealPackage::where('status', 1)
                          ->orderBy('name')
                          ->get();
    	return view('admin.view-mp', compact('mp'));
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
        return redirect()->action('AdminController@viewMP');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function editMP($id){
      $user = Auth::user();

      if($user['type'] == 0){
        $mp = MealPackage::where('id',$id)->first();
        return view('admin.edit-mp', compact('mp'));
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function updateMP( $id, EditMPRequest $request){
      $user = Auth::user();

      if($user['type'] == 0){
        $mp = MealPackage::where('id',$id)->first();

        $mp->name = trim($request->name);
        $mp->details = trim($request->details);
        $mp->price = trim($request->price);

        $mp->save();
        return redirect()->action('AdminController@viewMP');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function deleteMP($id){
      $user = Auth::user();

      if($user['type'] == 0){
        $mp = MealPackage::where('id',$id)->first();

        $mp->status = 0;

        $mp->save();
        return redirect()->action('AdminController@viewMP');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function editSchool($id){
      $user = Auth::user();

      if($user['type'] == 0){
        $school = School::where('id',$id)->first();
        return view('admin.edit-school', compact('school'));
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function updateSchool( $id, EditSchoolRequest $request){
      $user = Auth::user();

      if($user['type'] == 0){
        $school = School::where('id',$id)->first();

        $school->name = trim($request->name);
        $school->addr = trim($request->addr);
        $school->contactno = trim($request->contactno);

        $school->save();
        return redirect()->action('AdminController@viewSchools');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }

    public function deleteSchool($id){
      $user = Auth::user();

      if($user['type'] == 0){
        $s = School::where('id',$id)->first();

        $s->status = 0;

        $s->save();
        return redirect()->action('AdminController@viewSchools');
      }
      else{
        return redirect()->action('UserController@home');
      }

    }
}
