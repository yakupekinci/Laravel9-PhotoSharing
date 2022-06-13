@extends('layouts.homebase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon))




@section('content')
    <div class="fa-social">
        <a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
        <a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
        <a href="{{$setting->youtube}}"><i class="fa fa-youtube-play"></i></a>&nbsp;&nbsp;
        <a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
    </div>
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            @foreach($sliderdata as $rs)
            <div class="hs-item set-bg" data-setbg="{{Storage::url($rs->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2>{{$rs->title}}</h2>
                                <p>{{$rs->category->title}}</p>
                                <a href="/photo/{{$rs->id}}" class="primary-btn">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </section>
    <!-- Hero Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="{{asset("assets")}}/img/services/service-1.jpg" alt="">
                        <h3>Shooting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="{{asset("assets")}}/img/services/service-2.jpg" alt="">
                        <h3>Videos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="{{asset("assets")}}/img/services/service-3.jpg" alt="">
                        <h3>Editing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Categories Section Begin -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Categories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br /> eiusmod tempor
                            incididunt ut labore et dolore.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="right-btn"><a href="#" class="primary-btn">VIew all</a></div>
                </div>
            </div>
            <div class="categories-slider owl-carousel">

                @foreach( $photolist1 as $rs)
                    <div class="cs-item">
                        <div class="cs-pic set-bg" data-setbg="{{Storage::url($rs->image)}}"></div>
                        <div class="cs-text">
                            <h4>{{$rs->title}}</h4>
                            <span>{{$rs->photos()->count()}}</span>
                        </div>
                    </div>
            @endforeach


            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 id="photos">Photos</h2>
                    </div>
                    <div class="filter-controls">

                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach(  \App\Models\Category::all() as $data)
                            <li data-filter=".{{$data->title}}">{{$data->title}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter">
                        @foreach(  $photolist2 as $data)
                        <div class="pf-item set-bg {{$data->category->title}}" data-setbg="{{Storage::url($data->image)}}">
                            <div style="padding-bottom: 250px">
                                <input  class="rating" data-stars="5" value="{{$data->comments()->average('rate')}}"/>
                            </div>
                            <div>
                            <a href="{{route('photo',['id'=>$data])}}"><span class="icon_circle-slelected"></span></a>
                        </div>



                            <div class="pf-text">
                                <strong style="color: red">( {{$data->comments->count('id')}} )</strong>
                                <span>{{$data->title}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn">
            <a href="#">Load More</a>
        </div>
    </section>

@endsection


