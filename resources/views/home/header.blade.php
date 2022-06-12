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
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        @php
        $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        <div class="row">
            <div class="col-lg-12">
                <div class="logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset("assets")}}/img/logo.png" alt="">
                    </a>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#">Categories</a>
                            <ul class="dropdown">
                                 @foreach($mainCategories as $rs)
                                <li><a href="{{route('categoryphotos',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}<ul class="dropdown-menu-lg-right">
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children' => $rs->children])
                                            @endif
                                        </ul></a>

                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/#photos">Photos</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        @auth()
                        <li style="width: 50px" class="nav-item nav-profile dropdown">

                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown" aria-expanded="false">
                                <img src="http://127.0.0.1:8000/assets/images/faces/face5.jpg" alt="profile">
                                <span class="nav-profile-name">{{Auth::user()->name}}</span>
                            </a>
                            <ul  class="dropdown">


                                <li>
                                    <a href="/userpanel">My Profile</a>
                                </li>
                                <li>
                                    <a href="{{route('userpanel.userphoto')}}">My Photos</a>
                                </li>
                                <li>
                                    <a href="{{route('userphoto.create')}}">Share Photo</a>
                                </li>
                                <li>
                                    <a href="{{route('userpanel.reviews')}}">My Reviews</a>
                                </li>
                                <li>
                                    <a href="/logoutuser">Logout</a>
                                </li>

                                </ul>
                                @else

                            <li style="width: 50px" class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown" aria-expanded="false">
                                    <img src="http://127.0.0.1:8000/assets/images/faces/face5.jpg" alt="profile">
                                    <span class="nav-profile-name">Guest</span>
                                </a>
                                <ul  class="dropdown">
                                    <li>
                                        <a href="/login">Login</a>
                                        <a href="/registeruser">Join</a>
                                    </li>
                                </ul>
                                @endauth

                        </li>
                    </ul>
                </nav>

                    <div class="top-search search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <div id="mobile-menu-wrap"></div>

            </div>
        </div>
    </div>
</header>
<!-- Header End -->

