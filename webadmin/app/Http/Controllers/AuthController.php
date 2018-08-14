<?php

namespace App\Http\Controllers;

use App\Admin;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {
    protected $redirectTo = '/admin';
    protected $guard = 'admin';

    public function index(){
        return view('admin.index');
    }

    public function ForgotPassword(Request $request)
    {
        // \Log::info(count($request->all()));
        $data = array();
        if(count($request->all()) > 0){

            $email = $request['email'];
            $user = User::where('email',$email)
            ->first();
            if($user){
                $data['user'] = $user->toArray();
                $data['message'] = "Password Reset Link Send on Your Email";
                $data['flag']=1;

            }else{
                $data['user'] = null;
                $data['message'] = "Unauthorize Email Id";
                $data['flag']=0;
            }

            return response()->json(['response' => $data]);
            
        }else{
            return view('admin.forgotpassword',compact('data'));
        }
    }

}
