<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class product_controller extends Controller
{
     public function product_detail()
    {
    	return view('product/product_detail');
    }
    public function invoice()
    {
    	return view('product/invoice');
    }
    public function product_list()
    {
    	return view('product/index');
    }
    public function invetory()
    {
        return view('product/invetory');
    }
}
