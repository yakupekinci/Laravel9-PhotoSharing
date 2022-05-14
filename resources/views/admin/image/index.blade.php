<div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">


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
                                    @foreach($data as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
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

