
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
                        <li><a href="#photos">Photos</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="login.html">Login</a>
                            <ul class="dropdown">
                                <li><a href="login.html">Sign in</a></li>
                            </ul>
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

