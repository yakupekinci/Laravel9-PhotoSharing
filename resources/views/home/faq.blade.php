@extends('layouts.homebase')

@section('title','Frequently Asked Questions |'.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Frequently Asked Questions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- section -->
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div id="accordion" >
                    <h2>Frequently Asked Questions</h2>
               @foreach($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne{{$loop->iteration}}">

                                    {!! $rs->question !!}
                                </a>
                            </div>
                            <div id="collapseOne{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                                 {!! $rs->answer !!}
                                </div>
                              </div>
                            @endforeach
        </div>
        </div>
            </div></div></div>




@endsection
