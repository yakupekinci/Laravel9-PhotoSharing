@extends('layouts.homebase')

@section('title', 'Test Title')



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
                @foreach(  $photolist1 as $rs)
                    <div class="cs-item">
                        <div class="cs-pic set-bg" data-setbg="{{Storage::url($rs->image)}}"></div>
                        <div class="cs-text">
                            <h4>{{$rs->title}}</h4>
                            <span>220 pictures</span>
                        </div>
                    </div>
            @endforeach

                <!-- <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="{{asset("assets")}}/img/categories/cat-2.jpg"></div>
                    <div class="cs-text">
                        <h4>Natural</h4>
                        <span>325 pictures</span>
                    </div>
                </div>

                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="{{asset("assets")}}/img/categories/cat-4.jpg"></div>
                    <div class="cs-text">
                        <h4>Potrait</h4>
                        <span>540 pictures</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="{{asset("assets")}}/img/categories/cat-3.jpg"></div>
                    <div class="cs-text">
                        <h4>Social</h4>
                        <span>120 pictures</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="{{asset("assets")}}/img/categories/space.jpg"></div>
                    <div class="cs-text">
                        <h4>Space</h4>
                        <span>170 pictures</span>
                    </div>
                </div>-->
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
                        <h2>PAYLASIMLAR</h2>
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
                        <!--
                      <div class="pf-item large-width large-height set-bg lifestyle"
                             data-setbg="{{asset("assets")}}/img/portfolio/pf-2.jpg">
                            <a href="{{route('photo',['id'=>$rs->photos[0]->id??''])}}"><span class="icon_plus"></span></a>




                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>

                        <div class="pf-item large-width set-bg natural" data-setbg="{{asset("assets")}}/img/portfolio/pf-3.jpg">


                            <a href="{{asset("assets")}}/img/portfolio/pf-3.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item large-height set-bg wedding" data-setbg="{{asset("assets")}}/img/portfolio/pf-4.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-4.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg lifestyle" data-setbg="{{asset("assets")}}/img/portfolio/pf-7.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-7.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg natural" data-setbg="{{asset("assets")}}/img/portfolio/pf-8.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-8.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg videos" data-setbg="{{asset("assets")}}/img/portfolio/pf-5.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-5.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="{{asset("assets")}}/img/portfolio/pf-6.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-6.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg videos" data-setbg="{{asset("assets")}}/img/portfolio/pf-10.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-10.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                < <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="{{asset("assets")}}/img/portfolio/pf-11.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-11.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg wedding"
                             data-setbg="{{asset("assets")}}/img/portfolio/pf-9.jpg">
                            <a href="{{asset("assets")}}/img/portfolio/pf-9.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>

                            <div class="pf-text">
                                <span>{{$rs->title}}</span>
                            </div>
                        </div> -->
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


