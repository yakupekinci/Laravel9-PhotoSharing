<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategorylist(){

        return Category::where('parent_id','=',0)->with('children')->get();
    }




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
    public function categoryphotos($id)
    {


        $category = Category::find($id);
        $photos= DB::table('photos')->where('category_id',$id)->get();
        return view('home.categoryphotos',[
                'category'=>$category,
                'photos'=>$photos,

            ]

        );



    }


}
