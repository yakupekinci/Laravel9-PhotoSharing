<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata=Photo::limit(4)->get();
        $photolist1=Photo::limit(6)->get();

        return view('home.index',[

                'sliderdata'=>$sliderdata,
                'photolist1'=>$photolist1
            ]

        );

    }



}
