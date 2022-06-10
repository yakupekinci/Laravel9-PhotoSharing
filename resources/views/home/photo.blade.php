@extends('layouts.homebase')

@section('title',$data->title)



@section('content')
    <!-- rating -->
    <script>
        jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return 'high';
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
                hoverOnClear: false
            });
            var $inp = $('#rating-input');

            $inp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'lg',
                showClear: false
            });

            $('#btn-rating-input').on('click', function () {
                $inp.rating('refresh', {
                    showClear: true,
                    disabled: !$inp.attr('disabled')
                });
            });


            $('.btn-danger').on('click', function () {
                $("#kartik").rating('destroy');
            });

            $('.btn-success').on('click', function () {
                $("#kartik").rating('create');
            });

            $inp.on('rating.change', function () {
                alert($('#rating-input').val());
            });


            $('.rb-rating').rating({
                'showCaption': true,
                'stars': '3',
                'min': '0',
                'max': '3',
                'step': '1',
                'size': 'xs',
                'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
            });
            $("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });
    </script>
    <!-- rating -->

    <!-- Blog Details Section Begin -->
    <div class="blog-hero set-bg" data-setbg="{{Storage::url($data->image)}}"></div>
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">


                    <div class="blog-details-text"><div>
                            <div style="padding-left:390px">   <form>
                                <input id="kartik" class="rating" data-stars="5" data-step="0.1" title=""/>
                                <div class="form-group" style="margin-top:10px">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default btn-secondary">Reset</button>

                                </div>
                            </form></div>
    <a href="#"> {{$data->category->title}}/</a>
    <a href="#"> {{$data->title}}</a>


<div>
    <h3>
        <i>{{$data->title}}</i>
    </h3>
    </div>


</div>

                        <div class="bd-quote"></div>

                            <p>{!!$data->detail!!}</p>


                        <div class="bd-tag-share">
                            <div class="share">
                                <span>Share</span>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bd-related-post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#" class="post-item prev-item">
                                        <h6><span class="arrow_carrot-left"></span> Previous posts</h6>
                                        <div class="pi-pic">
                                            <img src="{{asset("assets")}}/img/blog/details/prev.jpg" alt="">
                                        </div>
                                        <div class="pi-text">
                                            <div class="label">Stories</div>
                                            <h5>The Best Weeknight Baked<br /> Potatoes, 3 Creative Ways</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="post-item next-item">
                                        <h6>Next posts <span class="arrow_carrot-right"></span></h6>
                                        <div class="pi-pic">
                                            <img src="{{asset("assets")}}/img/blog/details/next.jpg" alt="">
                                        </div>
                                        <div class="pi-text">
                                            <div class="label">Typography</div>
                                            <h5>The $8 French Rosé I Buy in<br /> Bulk Every Summer</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="bd-author">
                            <div class="avatar-pic">
                                <img src="{{asset("assets")}}/img/blog/details/post-author.jpg" alt="">
                            </div>
                            <div class="avatar-text">
                                <h4>Lena Mollein</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation.</p>
                                <div class="at-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bd-comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Comment</h4>
                                    <div class="comment-item">
                                        <div class="ci-pic">
                                            <img src="{{asset("assets")}}/img/blog/details/comment/comment-1.jpg" alt="">
                                        </div>
                                        <div class="ci-text">
                                            <h5>Brandon Kelley</h5>
                                            <p>Consectetur adipiscing eiusmod tempor incididunt t labore et dolore magna
                                                aliqua. Quis ipsum suspendisse ultrices.</p>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug,15, 2019</li>
                                                <li><i class="fa fa-heart-o"></i> Like</li>
                                                <li><i class="fa fa-share-square-o"></i> Reply</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="ci-pic">
                                            <img src="{{asset("assets")}}/img/blog/details/comment/comment-2.jpg" alt="">
                                        </div>
                                        <div class="ci-text">
                                            <h5>Brandon Kelley</h5>
                                            <p>Consectetur adipiscing eiusmod tempor incididunt t labore et dolore magna
                                                aliqua. Quis ipsum suspendisse ultrices.</p>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug,15, 2019</li>
                                                <li><i class="fa fa-heart-o"></i> Like</li>
                                                <li><i class="fa fa-share-square-o"></i> Reply</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="ci-pic">
                                            <img src="{{asset("assets")}}/img/blog/details/comment/comment-3.jpg" alt="">
                                        </div>
                                        <div class="ci-text">
                                            <h5>Brandon Kelley</h5>
                                            <p>Consectetur adipiscing eiusmod tempor incididunt t labore et dolore magna
                                                aliqua. Quis ipsum suspendisse ultrices.</p>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug,15, 2019</li>
                                                <li><i class="fa fa-heart-o"></i> Like</li>
                                                <li><i class="fa fa-share-square-o"></i> Reply</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="leave-form">
                                        <h4>Leave a comment</h4>
                                        <form action="#">
                                            <input type="text" placeholder="Name">
                                            <input type="text" placeholder="Email">
                                            <input type="text" placeholder="Website">
                                            <textarea placeholder="Comment"></textarea>
                                            <button type="submit" class="site-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


