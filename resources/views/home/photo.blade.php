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

                <div  style="padding-top: 200px" class="col-lg-12">
                    <div   class="blog-details-text"><div>

    <a href="#"> {{$data->category->title}}/</a>
    <a href="#"> {{$data->title}}</a>



<div> @include("home.messages")
    <div style="padding-left: 800px" >
        <h5>Rate</h5>
        <input  class="rating" data-stars="5" value="{{$data->rate}}"/>
    </div>
    <h1>
        <i>{{$data->title}}</i>

    </h1>

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
                            <h4>Comments</h4>
                            <div class="row">

                                <div class="col-lg-6">

                                    @foreach($reviews as $rs)
                                    <div class="comment-item">
                                        <div class="ci-pic">

                                            <img src="{{asset("assets")}}/img/blog/details/comment/comment-1.jpg" alt="">
                                        </div>
                                        <div class="ci-text">
                                            <h5><i>{{$rs->user->name}}</i></h5>
                                            <strong> {{$rs->subject}}</strong>
                                            <p>{{$rs->review}}</p>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> {{$rs->created_at}}</li>
                                                <li><i class="fa fa-heart-o"></i> Like</li>
                                                <li><i class="fa fa-share-square-o"></i> Reply</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="leave-form">
                                    <h4>Leave a comment</h4>
                                    <form   action="{{route('storecomment')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="photo_id" value="{{$data->id}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  name="subject" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea  name="review" placeholder="Your review"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <strong>Your Rating :</strong>
                                                <input id="kartik" class="rating" name="rate" value="{{$data->rate}}" data-stars="5" data-step="1" title=""/>
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>

                                        @auth
                                            <button type="submit" class="site-btn">Submit</button>
                                        @else
                                        <a href="/login" class="primary-btn">For Submit Your Review,Please Login</a>
                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


