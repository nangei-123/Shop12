<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payment_transaction extends Controller
{
    public function payment_transaction()
    {
    	return view('payment/transaction');
    }
}
