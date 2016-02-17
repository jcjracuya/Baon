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

    public function landingpage()
    {
      return view('pages.landingpage');
    }
}
