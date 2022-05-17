<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata=Photo::limit(2)->get();

        return view('home.index',[

                'sliderdata'=>$sliderdata
            ]

        );

    }



}
