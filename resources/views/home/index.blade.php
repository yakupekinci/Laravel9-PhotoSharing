@extends('layouts.homebase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon))



@section('content')

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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et<br /> dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida accumsan lacus vel facilisis.</p>
                                <a href="#" class="primary-btn">Contact us</a>
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
                            <span>220 pictures</span>
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
                        <h2>Photos</h2>
                    </div>
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach(  $photolist2 as $data)
                            <li data-filter=".{{$data->category->title}}">{{$data->category->title}}</li>
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
                            <a href="{{route('photo',['id'=>$data])}}"><span class="icon_plus"></span></a>


                            <div class="pf-text">

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
    <!-- Portfolio Section End -->


@endsection


