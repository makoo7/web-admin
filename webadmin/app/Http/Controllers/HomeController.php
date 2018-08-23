<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Testmonial;
use Redirect;

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
        return view('admin.home');
    }

    public function profile(Request $request){

        if(count($request->all()) > 0){
            $request = $request->all();
            
            $user = Auth::user();
            $user->name = $request['name'];
            $user->save();
            if($user){
                return view('admin.profile');
            }
        }else{
            return view('admin.profile');
        }        
    }

    public function Testmonials(Request $request){
        return view('admin.testmonial.index');
    }
    public function AddTestmonials(Request $request){
        
        if(count($request->all()) > 0){
            $request = $request->all();
            $save = Testmonial::create($request);
            
            if($save){
                return Redirect::back()->with('response',1);
                // return view('admin.testmonial.add',['response' => 1]);
            }else{
                // return view('admin.testmonial.add',['response' => 0]);
                return Redirect::back()->with('response',0);
            }

        } 
        return view('admin.testmonial.add');
    }
}
