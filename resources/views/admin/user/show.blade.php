@extends('layouts.adminwindow')

@section('title', 'User Detail :'.$data->title)



@section('content')
                             <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail User Data</h4>

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
                                                <th>Email</th>
                                                <td>
                                                    {{$data->email}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Roles</th>
                                                <td>
                                                    @foreach($data->roles as $role)
                                                        {{$role->name}}
                                                        <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id ])}}"
                                                           onclick="return confirm('Deleting !! Are you sure ?')">[x]</a>
                                                @endforeach
                                                </td>
                                            </tr>
                                                <th>Created Message</th>
                                                <td>{{$data->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Updated Message</th>
                                                <td>{{$data->updated_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Add Role to User</th>
                                                <td>
                                                    <form class="form-inline" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        <select name="role_id">
                                                            @foreach($roles as $role)
                                                                <option value=" {{$role->id}}">{{$role->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div style="padding-top: 10px">
                                                            <button type="submit" class="btn btn-primary mb-2">Add Role</button>
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
