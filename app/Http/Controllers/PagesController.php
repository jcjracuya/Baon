<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function test()
    {
      return view('pages.test');
    }

    public function adminlogin()
    {
      return view('pages.admin-login');
    }

    public function adminsignup()
    {
      return view('pages.admin-signup');
    }

    public function editor()
    {
      return view('admin.editor');
    }

    public function landingpage()
    {
      return view('pages.landingpage');
    }
}
