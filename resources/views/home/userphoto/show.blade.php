@extends('layouts.adminbase')

@section('title', 'Show Photo: '.$data->title)



@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <a href="{{route('userphoto.edit',['id'=>$data->id])}}" class="btn btn-primary">Edit </a>
                                <a href="{{route('userphoto.destroy',['id'=>$data->id])}}"  onclick="return confirm('Deleting !! Are you sure ?') " class="btn btn-danger">Delete</a>

                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">/Dashboard&nbsp;/</a></p>
                                <p class="text-primary mb-0 hover-cursor">Show Photo</p>
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



                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Details</h4>

                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped">

                                            <tr>
                                                <th>Id</th>
                                                <td>
                                                    {{$data->id}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>
                                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Title</th>
                                                <td>{{$data->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Keywords</th>
                                                <td>
                                                    {{$data->keywords}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Videlink</th>
                                                <td>
                                                    {{$data->videlink}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td>
                                                    {{$data->rate}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Image</th>
                                                <td>@if($data->image)
                                                        <img src="{{Storage::url($data->image)}}" style="height: 30px">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Detail Inf</th>
                                                <td>{!!$data->detail!!}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{$data->status}}</td>
                                            </tr>
                                            <tr>
                                                <th>Created Photo</th>
                                                <td>{{$data->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Updated Photo</th>
                                                <td>{{$data->updated_at}}</td>
                                            </tr>

                                        </table>
                                    </div>

                            </div>
                            </div></div></div></div>

        <!-- content-wrapper ends -->
@endsection
