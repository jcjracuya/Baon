<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;

use App\Admin;
use Auth;

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

		return redirect()->action('AdminController@index');
    }

    public function adminLogin(Request $request){
    	if (!Auth::guard('admin')->check()) {
    		if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'status', 1])) {
    			return redirect()->action('AdminController@index');
    		}
    	}
    }
}
