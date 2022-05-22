@extends('layouts.homebase')

@section('title',$data->title)



@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Photos</a>
                        <a href="#">{{$data->category->title}}</a>
                        <span>{{$data->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Portfolio Hero Section Begin -->
    <section class="portfolio-hero-section set-bg" data-setbg="{{asset("assets")}}/img/portfolio/details/details-hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ph-text">
                            <h2>Color of natural</h2>
                            <ul>
                                <li>Natural</li>
                                <li>Aniaml</li>
                                <li>Lifestyle</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Portfolio Hero Section End -->

    <!-- Portfolio Details Section Begin -->
    <section class="portfolio-details-section spad">
        <div class="container">
            <div class="row">

                        <p>{{$data->detail}}</p>


            </div>
        </div>

    </section>
    <!-- Portfolio Details Section End -->

    <!-- Recent Photography Section Begin -->
    <section class="recent-photography-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Recent photography</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                        <img src="{{asset("assets")}}/img/recent-photography/rp-1.jpg" alt="">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Lifestyle</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                        <img src="{{asset("assets")}}/img/recent-photography/rp-2.jpg" alt="">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Fashion</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                        <img src="{{asset("assets")}}/img/recent-photography/rp-3.jpg" alt="">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Natural</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                        <img src="{{asset("assets")}}/img/recent-photography/rp-4.jpg" alt="">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Animal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more-btn portfolio-btn">
                <a href="#">View all photography</a>
            </div>
        </div>
    </section>
    <!-- Recent Photography Section End -->


@endsection


