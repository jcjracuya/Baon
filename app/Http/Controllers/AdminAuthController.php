<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;

use App\Admin;

class AdminAuthController extends Controller
{
    public function adminRegister(AdminRequest $request){
    	Admin::create([
    		'fname' => trim($request->fname),
    		'lname' => trim($request->lname),
    		'status' => 1,
    		'username' => trim($request->username),
    		'email' => trim($request->email),
    		'password' => trim(bcrypt($request->password)),
		]);

		return redirect()->action('PagesController@test');
    }
}
