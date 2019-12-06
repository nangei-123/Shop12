<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    public function index()
    {
    	// echo "fuck";
    	return view('index');
    }
    public function datatable()
    {
    	return view('datatable');
    }
    public function json()
    {
    	// Must insert Image Path
    	$data='{
  "data": [
    {
      "id": "1",
      "p_code": "Item1111",
      "p_name": "Shoe",
      "stock": "Available",
      "image_front": "http://localhost:8000/material/img/faces/avatar.jpg",
      "image_back": "http://localhost:8000/material/img/faces/avatar.jpg",
      "image_overview": "http://localhost:8000/material/img/faces/avatar.jpg",
      "remark": "Edinburgh",
      "description": "product desctiption product desctiption product desctiption product desctiption product desctiption",
      "qty": 12,
      "price": 10000,
      "rating": "5 star"
    }
	  ]
	}';
	return $data;
  }
}
