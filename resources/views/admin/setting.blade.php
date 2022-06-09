@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Settings</h2>
                                <p class="mb-md-0">Your analytics dashboard template.</p>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">/&nbsp;Dashboard/&nbsp;</a></p>
                                <p class="text-primary mb-0 hover-cursor">Settings</p>
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
  <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
       @csrf

            <div class="row">

                <div class="col-12 col-sm-25">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Smtp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-social-tab" data-toggle="pill" href="#custom-tabs-three-social" role="tab" aria-controls="custom-tabs-three-social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-about-tab" data-toggle="pill" href="#custom-tabs-three-about" role="tab" aria-controls="custom-tabs-three-about" aria-selected="false">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-contact-tab" data-toggle="pill" href="#custom-tabs-three-contact" role="tab" aria-controls="custom-tabs-three-contact" aria-selected="false">Contact Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-references-tab" data-toggle="pill" href="#custom-tabs-three-references" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">References</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                   <input type="hidden" id="id" value="{{$data->id}}" class="form-control">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text"id="title" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text"id="keywords" name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text"id="description" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text"id="company" name="company" value="{{$data->company}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text"id="address" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text"id="phone" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text"id="email" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" style="" >
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Icon</label>
                                    <div class="form-group">
                                        <div class="input-group col-xs-12">
                                            <input type="file"  name="icon" class="form-control custom-file-input">

                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="tab-pane fade active show" id="custom-tabs-three-smtp" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                   <div class="form-group">
                                       <label>Smtp Server</label>
                                    <input type="text"  id="smtpserver" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                   </div>
                                    <div class="form-group">
                                        <label>Smtp Email</label>
                                        <input type="text"  id="smtpemail" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtppassword</label>
                                        <input type="text" id="smtppassword" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtpport</label>
                                        <input type="number"  id="smtpport" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="custom-tabs-three-social" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="fax" id="fax"  name="fax" value="{{$data->fax}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" id="facebook"  name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" id="twitter"  name="twitter" value="{{$data->twitter}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" id="instagram"  name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" id="youtube"  name="youtube" value="{{$data->youtube}}" class="form-control">
                                    </div>
                                </div>
                                    <div class="tab-pane fade active show" id="custom-tabs-three-about" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                    </div>
                                    </div>
                                <div class="tab-pane fade active show" id="custom-tabs-three-contact" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                    </div>
                                    </div>
                                <div class="tab-pane fade active show" id="custom-tabs-three-references" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="form-group">
                                        <label>References</label>
                                        <textarea id="references" name="references">{{$data->references}}</textarea>
                                    </div>
                                </div>

                                        <button type="submit" class="btn btn-primary mb-2">Update Setting</button>




                    </div>
                </div>
            </div>
        </div>
    </div>
     </form>   <!-- content-wrapper ends -->
@endsection
                @section('footer')
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

                    <script>
                        $(document).ready(function (){

                            $('#aboutus').summernote()
                            $('#contact').summernote()
                            $('#references').summernote()

                        })

                    </script>
@endsection
