@extends('layouts.homebase')

@section('title','User Comments & Reviews')


@section('content')
    <div  class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('userpanel.index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>User Comment</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
    <!-- Contact Section Begin -->

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
                        <h2>User Comments & Reviews</h2>
                       <h3>__________________________________________________</h3>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>

                                <th style="width: 40px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($comments as $rs )
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('photo',['id'=>$rs->photo_id])}}">{{$rs->photo->title}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>
                                        <a href="{{route('userpanel.reviewsdestroy',['id'=>$rs->id])}}"class="btn btn-danger"
                                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>  </td>

                                </tr>


                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->





@endsection

