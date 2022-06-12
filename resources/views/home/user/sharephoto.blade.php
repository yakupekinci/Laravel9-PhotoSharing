@extends('layouts.homebase')

@section('title','User Comments & Reviews')


@section('content')

    <div  class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('userpanel.index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Photo List</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-6">
                    <div class="contact-form">
                        <h2>User Menu</h2>
                        <h3>__________</h3>
                        @include('home.user.usermenu')

                    </div>
                </div>



                    <div class="col-md-10">
                        <div class="contact-text">
                            <h2>My Photos & Create Photo</h2>
                            <h3>__________________________________________________</h3>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($userphoto as $rs )
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}"style="height: 35px">
                                        @endif
                                    </td>

                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userphoto.edit',['id'=>$rs->id])}}" class="btn btn-success">Edit</a>  </td>
                                    <td><a href="{{route('userphoto.destroy',['id'=>$rs->id])}}"class="btn btn-primary"
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


                            </div></div></div></div></div></div>

    </section>
@endsection
