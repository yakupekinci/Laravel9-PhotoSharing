<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;

use App\Models\Photo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use function MongoDB\BSON\toRelaxedExtendedJSON;


class AdminPhotoController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data= Photo::all();
        return view('admin.photo.index',[
            'data'=>$data
        ]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Category::all();
        return view('admin.photo.create',[
            'data'=>$data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new  Photo();
        $data->category_id =  $request->category_id;
        $data->user_id =0;  //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->videlink = $request->videlink;
        $data->rate = $request->rate;
        $data->detail = $request->detail;

        if($request->file('image')){
            $data->image= $request->file('image')->store('images');

        }

        $data->status =$request-> status;
        $data->save();
        return  redirect('admin/photo');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo,$id)
    {
        //
        $data= Photo::find($id);
        return view('admin.photo.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo,$id)
    {
        //
        $data= Photo::find($id);
        $datalist= Category::all();
        return view('admin.photo.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo,$id)
    {
        //
        $data= Photo::find($id);
        $data->category_id =  $request->category_id;
        $data->user_id =0;  //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->videlink = $request->videlink;
        $data->rate = $request->rate;
        $data->status = $request-> status;

        if($request->file('image')){
            $data->image= $request->file('image')->store('images');

        }
        $data->save();
        return  redirect('admin/photo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo,$id)
    {
        //

        $data= Photo::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/photo');


    }
}
