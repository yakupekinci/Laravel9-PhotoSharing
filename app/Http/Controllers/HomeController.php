<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata = Photo::limit(4)->get();
        $photolist1 = Category::limit(6)->get();

        return view('home.index', [

                'sliderdata' => $sliderdata,
                'photolist1' => $photolist1,

            ]

        );
}
        public function photo($id)
    {

       $data = Photo::find($id);

        return view('home.photo',[

                'data'=>$data,
            ]

        );



    }



}
