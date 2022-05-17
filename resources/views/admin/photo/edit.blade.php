@extends('layouts.adminbase')

@section('title', 'Edit Photo: '.$data->title)

@section('head')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Edit Photo: {{$data->title}}</h2>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">&nbsp;<a href="{{route('admin.index')}}/">/Dashboard&nbsp;/</a>&nbsp;</p>
                                <p class="text-primary mb-0 hover-cursor">Edit Photo</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                                <i class="mdi mdi-download text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-clock-outline text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-plus text-muted"></i>
                            </button>
                            <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body dashboard-tabs p-0">



            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Photo Category</h4>


                        <form class="form-inline" action="{{route('admin.photo.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class= "sr-only" for="inlineFormInputName2">Parent Category</label>
                            <select class="form-control mb-2 mr-sm-3" name="category_id"  style="...">
                                @foreach($datalist  as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                @endforeach
                            </select>
                            <label class= "sr-only" for="inlineFormInputName2">Title</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="title"  value=" {{$data->title}}" >

                            <label class= "sr-only" for="inlineFormInputName2">Keywords</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="keywords" value=" {{$data->keywords}}">

                            <label class= "sr-only" for="inlineFormInputName2">Description</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="description" value=" {{$data->description}}">

                            <label class= "sr-only" for="inlineFormInputName2">Videlink</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="videlink" value=" {{$data->videlink}}">

                            <label class= "sr-only" for="inlineFormInputName2">Rate</label>
                            <input type="number" class="form-control mb-2 mr-sm-2" name="rate" value="{{$data->rate}}">

                            <label class= "sr-only" for="inlineFormInputName2">Detail Inf</label>
                            <textarea  class="form-control mb-2 mr-sm-2" id="detail" name="detail">{!!$data->detail!!}}</textarea>

                            <label>Image</label>
                            <div class="form-group">


                                <div class="input-group col-xs-12">
                                    <input type="file" name="image" class="form-control custom-file-input">


                                </div>
                            </div>




                            <label >Status</label>

                            <select  class="form-control mb-2 mr-sm-2"  name="status">


                                <option >{{$data->status}}</option>
                                    <option value="True">True</option>
                                    <option value="False">False</option>
                                   </select>


                            <div style="padding-top: 10px">
                            <button type="submit" class="btn btn-primary mb-2">Update Date</button>
                           </div>

                        </form>

                    </div>
                </div>


            </div></div></div></div></div></div>
@section('footer')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function (){

            //summernote
            $('#detail').summernote()

        })

    </script>
@endsection
        <!-- content-wrapper ends -->
@endsection
