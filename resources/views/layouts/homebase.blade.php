
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Yakup EKINCI">
    <meta name="icon"  type="image/x-icon" href="@yield("description")">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/{{asset("assets")}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/{{asset("assets")}}/css/all.css">
    <link href="{{asset("assets")}}/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets")}}/themes/krajee-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets")}}/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <!--suppress JSUnresolvedLibraryURL -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset("assets")}}/js/star-rating.js" type="text/javascript"></script>
    <script src="{{asset("assets")}}/themes/krajee-fas/theme.js" type="text/javascript"></script>
    <script src="{{asset("assets")}}/themes/krajee-svg/theme.js" type="text/javascript"></script>
@yield('head')

</head>



<body>
@include("home.header")


@section('slider')
@show



    @yield('content')


@include("home.footer")
@section('footer')
@show
</body>
</html>
