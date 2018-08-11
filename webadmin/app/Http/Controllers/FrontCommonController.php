<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testmonial;
use App\Artical;
use App\BranchDetail;
use App\HeroSlider;

class FrontCommonController extends Controller
{
    
    public function getListOfTestmonials(){
        $query = Testmonial::all()->toArray();
        return $query;
    }

    public function getLatestArticals(){
         $query = Artical::where('status',1)
         ->orderBy('id', 'desc')
         ->limit(5)
         ->get()
         ->toArray();

         return $query;
    }

    public function getBranchDetails(){
        $query = BranchDetail::where('status',1)
        ->get()
        ->toArray();

        return $query;
    }

    public function getBranchDetailById($id){
        $query = BranchDetail::find($id)
        ->toArray();

        return $query;
    }

    public function getHeroSlider(){
        $query = HeroSlider::where('status',1)
        ->get()
        ->toArray();

        return $query;
    }

}
