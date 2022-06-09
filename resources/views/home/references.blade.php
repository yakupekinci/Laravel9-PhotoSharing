@extends('layouts.homebase')

@section('title','References |'.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>References</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- section -->
    <div class="about-section">
        <div class="container">
            <div class="row">
                {!! $setting->references !!}
            </div>

        </div>
    </div>




@endsection
