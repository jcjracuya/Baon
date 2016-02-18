<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function viewSchools(){
    	return view('admin.view-schools');
    }

    public function viewMP(){
    	return view('admin.view-mp');
    }

    public function addSchool(){
    	return view('admin.add-school');
    }

    public function addMP(){
    	return view('admin.add-mp');
    }
}
