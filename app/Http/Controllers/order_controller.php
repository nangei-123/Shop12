<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class order_controller extends Controller
{
    public function index()
    {
    	return view('product/order_history');
    }
    public function order_list()
    {
    	return view('merchant/order_product_list');
    }
    public function voucher()
    {
    	return view('merchant/order_list');
    }
}
