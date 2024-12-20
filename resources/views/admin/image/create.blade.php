@extends('layouts.adminbase')

@section('title', 'Add Category')



@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Add Category</h2>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}/">/Dashboard&nbsp;/</a></p>
                                <p class="text-primary mb-0 hover-cursor">Analytics</p>
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
                        <h4 class="card-title">Category</h4>


                        <form class="form-inline" action="{{route('admin.category.store')}}"  method="post" enctype="multipart/form-data">
                            @csrf

                            <label class= "sr-only" for="inlineFormInputName2">Parent Category</label>
                            <select class="form-control mb-2 mr-sm-3" name="parent_id"  style="...">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                                @endforeach
                            </select>

                            <label class= "sr-only" for="inlineFormInputName2">Title</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="title" placeholder="Title">

                            <label class= "sr-only" for="inlineFormInputName2">Keywords</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="keywords" placeholder="Keywords">

                            <label class= "sr-only" for="inlineFormInputName2">Description</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="description" placeholder="Description">




                            <label>Image</label>
                            <div class="form-group">


                                <div class="input-group col-xs-12">
                                    <input type="file" name="image" class="form-control custom-file-input">


                                </div>
                            </div>




                            <label >Status</label>

                            <select  class="form-control mb-2 mr-sm-2" name="status"  >



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

        <!-- content-wrapper ends -->
@endsection
