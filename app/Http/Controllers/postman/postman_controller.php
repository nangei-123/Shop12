<?php

namespace App\Http\Controllers\postman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class postman_controller extends Controller
{
   	public function postman_profile()
   	{
   		return view('postman/profile');
   	}
   	public function merchant_dash_postman_list()
   	{
   		return view('merchant/postman_list');
   	}
}
