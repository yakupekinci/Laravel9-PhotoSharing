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
                                                <td>{{$data->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone Number</th>
                                                <td>
                                                    {{$data->phone}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>
                                                    {{$data->email}}
                                                </td>
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
                                                    {{$data->message}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ip Number</th>
                                                <td>
                                                    {{$data->ip}}
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
                                                    <form class="form-inline" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        <textarea cols="100"    id="note" name="note" >
                                                        {{$data->note}}
                                                    </textarea>
                                                        <div style="padding-top: 10px">
                                                            <button type="submit" class="btn btn-primary mb-2">Update Note</button>
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
