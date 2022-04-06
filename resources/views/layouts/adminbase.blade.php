<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("assets")}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset("assets")}}/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset("assets")}}/vendors//datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("assets")}}/css//styleadmin.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset("assets")}}/images/favicon.png" />
    @yield("head")
</head>
<body>
@include("admin.header")


@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')


@include("admin.footer")
@yield('footer')
</body>
</html>
