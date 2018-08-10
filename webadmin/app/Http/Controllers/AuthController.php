<?php

namespace App\Http\Controllers;

use App\Admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {
    protected $redirectTo = '/admin';
    protected $guard = 'admin';

    public function index(){
        return view('admin.index');
    }

}
