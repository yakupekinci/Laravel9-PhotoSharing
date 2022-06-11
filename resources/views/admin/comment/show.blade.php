@extends('layouts.adminwindow')

@section('title', 'Show Message: '.$data->title)



@section('content')
                             <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Message Data</h4>

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
                                                <th>Name & Surname</th>
                                                <td>{{$data->user->name}}</td>
                                            </tr>
                                            <tr>

                                                <th>Photo Name</th>
                                                <td>{{$data->photo->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Subject</th>
                                                <td>
                                                    {{$data->subject}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Message</th>
                                                <td>
                                                    {{$data->review}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td>
                                                    {{$data->rate}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ip Number</th>
                                                <td>
                                                    {{$data->IP}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{$data->status}}</td>
                                            </tr>
                                            <tr>
                                                <th>Created Message</th>
                                                <td>{{$data->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Updated Message</th>
                                                <td>{{$data->updated_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Admin Note :</th>
                                                <td>
                                                    <form class="form-inline" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <select name="status">
                                                        <option selected >{{$data->status}}</option>
                                                        <option value="True">True</option>
                                                        <option value="False" >False</option>
                                                    </select>
                                                        <div style="padding-top: 10px">
                                                            <button type="submit" class="btn btn-primary mb-2">Update Comment</button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                            </div>
                            </div>

        <!-- content-wrapper ends -->
@endsection
