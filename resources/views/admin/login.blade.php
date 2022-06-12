

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>

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
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/style.css">

</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">

            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{asset("assets")}}/images/logo.svg" alt="logo"></div>

                        <h4>Sign in to continue.</h4>

                        @include('home.messages')
                        <form  action="{{route('loginadmincheck')}}" class="pt-3" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">

                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>

                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="/registeruser" class="text-primary">Create</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset("assets")}}/vendors/base/vendor.bundle.base.js"></script>
<script src="{{asset("assets")}}/js/off-canvas.js"></script>
<script src="{{asset("assets")}}/js/hoverable-collapse.js"></script>
<script src="{{asset("assets")}}/js/template.js"></script>
<!-- endinject -->

