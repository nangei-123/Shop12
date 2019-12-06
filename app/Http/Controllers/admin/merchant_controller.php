<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class merchant_controller extends Controller
{
    public function merchant_list()
    {
    	return view('merchant/merchant_list');
    }
}
