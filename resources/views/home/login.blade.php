@extends('layouts.homebase')

@section('title','User Login |')


@section('content')
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>User Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- section -->
    <div class="about-section">
        <div class="container">


               @include('auth.login')



        </div>
    </div>




@endsection
