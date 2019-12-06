<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class postman_controller extends Controller
{
    public function postman_list()
    {
    	return view('postman/postman_list');
    }
    public function postman_profile()
    {
    	return view('customer/profile');
    }
}
