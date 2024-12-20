@extends('layouts.adminbase')

@section('title', 'Contact Form Messages List')



@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">

                            </div>
                            <div class="d-flex">

                                <a href="/admin"> <i class="mdi mdi-home text-muted hover-cursor"></i>
                                </a>



                                <a class="text-muted mb-0 hover-cursor" href="{{route('admin.index')}}/">/Dashboard/</a></p>
                                <p class="text-primary mb-0 hover-cursor">Message</p>
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

                <div class="col-md-15 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Message List</h4>

                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Status</th>

                                        <th style="width: 40px">Show</th>
                                        <th style="width: 40px">Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->status}}</td>


                                        <td>
                                          <a href="{{route('admin.message.show',['id'=>$rs->id])}}"class="btn btn-warning"
                                              onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                               Show
                                          </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"class="btn btn-primary"
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
            </div>
        </div>




            </div></div></div></div></div></div>


        <!-- content-wrapper ends -->
@endsection
