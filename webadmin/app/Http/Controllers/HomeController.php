<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile(Request $request){

        if(count($request->all()) > 0){
            $request = $request->all();
            
            $user = Auth::user();
            $user->name = $request['name'];
            $user->save();
            if($user){
                return view('profile');
            }
        }else{
            return view('profile');
        }        
    }

    public function Testmonials(Request $request){
        return view('testmonial.index');
    }
    public function AddTestmonials(Request $request){
        return view('testmonial.add');
    }
}
