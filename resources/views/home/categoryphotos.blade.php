@extends('layouts.homebase')

@section('title',$data->title)



@section('content')
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio-section portfolio-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>PAYLASIMLAR</h2>
                    </div>
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".fashion">Fashion</li>
                            <li data-filter=".lifestyle">Lifestyle</li>
                            <li data-filter=".natural">Natural</li>
                            <li data-filter=".wedding">Wedding</li>
                            <li data-filter=".videos">Videos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter" style="position: relative; height: 1520px;">
                        <div class="pf-item set-bg fashion" data-setbg="img/portfolio/pf-1.jpg" style="background-image: url(&quot;img/portfolio/pf-1.jpg&quot;); position: absolute; left: 0%; top: 0px;">
                            <a href="img/portfolio/pf-1.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg lifestyle" data-setbg="img/portfolio/pf-2.jpg" style="background-image: url(&quot;img/portfolio/pf-2.jpg&quot;); position: absolute; left: 19.9754%; top: 0px;">
                            <a href="img/portfolio/pf-2.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg natural" data-setbg="img/portfolio/pf-3.jpg" style="background-image: url(&quot;img/portfolio/pf-3.jpg&quot;); position: absolute; left: 59.9899%; top: 0px;">
                            <a href="img/portfolio/pf-3.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-height set-bg wedding" data-setbg="img/portfolio/pf-4.jpg" style="background-image: url(&quot;img/portfolio/pf-4.jpg&quot;); position: absolute; left: 0%; top: 380px;">
                            <a href="img/portfolio/pf-4.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg lifestyle" data-setbg="img/portfolio/pf-7.jpg" style="background-image: url(&quot;img/portfolio/pf-7.jpg&quot;); position: absolute; left: 19.9754%; top: 759px;">
                            <a href="img/portfolio/pf-7.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg natural" data-setbg="img/portfolio/pf-8.jpg" style="background-image: url(&quot;img/portfolio/pf-8.jpg&quot;); position: absolute; left: 39.9507%; top: 759px;">
                            <a href="img/portfolio/pf-8.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg videos" data-setbg="img/portfolio/pf-5.jpg" style="background-image: url(&quot;img/portfolio/pf-5.jpg&quot;); position: absolute; left: 59.9899%; top: 380px;">
                            <a href="img/portfolio/pf-5.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="img/portfolio/pf-6.jpg" style="background-image: url(&quot;img/portfolio/pf-6.jpg&quot;); position: absolute; left: 79.9653%; top: 380px;">
                            <a href="img/portfolio/pf-6.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg videos" data-setbg="img/portfolio/pf-10.jpg" style="background-image: url(&quot;img/portfolio/pf-10.jpg&quot;); position: absolute; left: 0%; top: 1139px;">
                            <a href="img/portfolio/pf-10.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="img/portfolio/pf-11.jpg" style="background-image: url(&quot;img/portfolio/pf-11.jpg&quot;); position: absolute; left: 39.9507%; top: 1139px;">
                            <a href="img/portfolio/pf-11.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg wedding" data-setbg="img/portfolio/pf-9.jpg" style="background-image: url(&quot;img/portfolio/pf-9.jpg&quot;); position: absolute; left: 59.9899%; top: 760px;">
                            <a href="img/portfolio/pf-9.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn portfolio-btn">
            <a href="#">Load More</a>
        </div>
    </section>
@endsection

