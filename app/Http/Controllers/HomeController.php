<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Photo;
use App\Models\Setting;
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
        $setting= Setting::first();

        return view('home.index', [

                'sliderdata' => $sliderdata,
                'photolist1' => $photolist1,
                'photolist2' => $photolist2,
                'setting' => $setting,

            ]

        );
}
    public function about()
    {

        $setting= Setting::first();
        return view('home.about', [
                'setting' => $setting,
                ]);
    }

    public function references()
    {

        $setting= Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }
    public function contact()
    {

        $setting= Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function storemessage(Request $request)
    {
       // dd($request);
        $data =new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank You.');

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
