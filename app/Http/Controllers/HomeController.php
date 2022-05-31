<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata = Photo::limit(2)->get();
        $photolist1 = Category::limit(99)->get();
        $photolist2 = Photo::limit(99)->get();
        return view('home.index', [

                'sliderdata' => $sliderdata,
                'photolist1' => $photolist1,
                'photolist2' => $photolist2,

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
