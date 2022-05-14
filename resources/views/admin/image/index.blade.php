@extends('layouts.adminwindow')

@section('title', 'Photo Image Gallery')



@section('content')

<h2>{{$photo->title}}</h2>
    <form class="form-inline" action="{{route('admin.image.store',['pid'=>$photo->id])}}"  method="post" enctype="multipart/form-data">
        @csrf


        <label>Title</label>
        <div class="form-group" >
            <input type="text" class="form-control mb-2 mr-sm-2" name="title" placeholder="Title">

            <div class="input-group col-xs-12">
                <input type="file" name="image" class="form-control custom-file-input">
            </div>
            <div >
                <button type="submit" class="btn btn-primary mb-2" value="Upload">Update</button>
            </div>
        </div>



    </form>






            <div class="row">

                <div class="col-md-15 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Photo Image</h4>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th style="width: 40px">Update</th>
                                        <th style="width: 40px">Delete</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>


                                        <td>
                                            @if($rs->image)
                                           <img src="{{Storage::url($rs->image)}}"style="height: 30px">
                                            @endif
                                        </td>
                                        
                                        <td><a href="{{route('admin.image.destroy',['pid'=>$photo->id,'id'=>$rs->id])}}"class="btn btn-primary"
                                            onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>  </td>


                                    </tr>


                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <!-- content-wrapper ends -->

@endsection
