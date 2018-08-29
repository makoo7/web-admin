<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Testmonial;
use App\HeroSlider;
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

        $testmonials = Testmonial::get()->toArray();
        
        return view('admin.testmonial.index',['data' => $testmonials]);
    }
    public function AddTestmonials(Request $request){
        
        if(count($request->all()) > 0){
            $request = $request->all();
            $save = Testmonial::create($request);
            
            if($save){
                return Redirect::back()->with('response',1);
            }else{
                return Redirect::back()->with('response',0);
            }

        } 
        return view('admin.testmonial.add');
    }

    public function EditTestmonials(Request $request,$id){
       
        if($id != null && $id != ""){
            $data = Testmonial::where('id',$id)
            ->first();
        }else{
            return redirect('admin/testmonials');
        }
        if(count($request->all()) > 0){
            $request = $request->all();
            $data = Testmonial::where('id',$id)
                    ->update(['name' => $request['name'], 'description' => $request['description']]);
            return Redirect::back()->with('response',1);

        } 
        return view('admin.testmonial.edit',['id' => $id, 'data' => $data]);

    }

    public function StatusTestmonials($id, $status){
        if($id != "" && $status != ""){
            $data = Testmonial::where('id',$id)
                    ->update(['status' => $status]);
            return Redirect::back()->with('response',1);
        }

    }

    public function SliderList(Request $request){
        $HeroSlider = HeroSlider::get()->toArray();
        return view('admin.slider.index',['data' => $HeroSlider]);
    }

    public function AddHeroSlider(Request $request){
        if(count($request->all()) > 0){
            $file = $request->file('link');

                //Display File Name
            echo 'File Name: '.$file->getClientOriginalName();
            echo '<br>';

            //Display File Extension
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo '<br>';

            //Display File Real Path
            echo 'File Real Path: '.$file->getRealPath();
            echo '<br>';

            //Display File Size
            echo 'File Size: '.$file->getSize();
            echo '<br>';

            //Display File Mime Type
            echo 'File Mime Type: '.$file->getMimeType();
            
            \Log::info($file);

        }else{

        }
        return view('admin.slider.add');
    }

}
