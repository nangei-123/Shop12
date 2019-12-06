<?php

namespace App\Http\Controllers;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
      
        return redirect('/');
    }
    public function dashboard()
    {
        $user_type=Auth::user()->type;
        if($user_type==1){
            return view('postman/dashboard');
        }else{
        return view('/dashboard');    
        }
        
    }
}
