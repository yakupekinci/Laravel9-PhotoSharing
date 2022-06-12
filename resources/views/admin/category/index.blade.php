@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <a href="{{route('admin.category.create')}}" class="btn btn-info">Add Category</a>
                            </div>
                            <div class="d-flex">

                                <a href="/admin"> <i class="mdi mdi-home text-muted hover-cursor"></i>
                                </a>



                                <a class="text-muted mb-0 hover-cursor" href="{{route('admin.index')}}/">/Dashboard/</a></p>
                                <p class="text-primary mb-0 hover-cursor">Category</p>
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

                            <h4 class="card-title">Category List</h4>

                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Parent</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>

                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                        <th style="width: 40px">Show</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}</td>
                                        <td>{{$rs->title}}</td>


                                        <td>
                                            @if($rs->image)
                                           <img src="{{Storage::url($rs->image)}}"style="height: 30px">
                                            @endif
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-success">Edit</a>  </td>
                                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"class="btn btn-primary"
                                            onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>  </td>

                                        <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"class="btn btn-warning">Show</a>  </td>
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
