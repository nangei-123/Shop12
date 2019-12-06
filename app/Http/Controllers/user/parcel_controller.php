<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class parcel_controller extends Controller
{
	public function parcel_create()
	{
		$result=DB::table("category")->get();
		$townships=DB::table('townships')->get();
		return view('users/parcel/create',['result'=>$result,'townships'=>$townships]);
		// dd($result);
	}
    public function parcel_index(Request $request)
    {
    	return view('users/parcel/index');
    }
}
