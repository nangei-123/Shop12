<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class order_controller extends Controller
{
  public function index()
  {
  	return view('product/order_history');
  }
  public function order_product_list()
  {
  	return view('product/order_product_list');
  }
  public function order_list()
  {
  	return view('product/order_list');
  }
}
