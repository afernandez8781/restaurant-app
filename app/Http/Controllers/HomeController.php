<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    public function index() {
    	$home = DB::table('homes')->first();

    	return view('welcome',compact('home'));
    }
}
