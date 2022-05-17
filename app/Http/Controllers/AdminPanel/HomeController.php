<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $sliderdata=Product::all()->limit(3);
        return view('admin.index',[
            'sliderdata'=>$sliderdata

        ]);



    }
}
