@extends('layouts.homebase')

@section('title','User Panel')


@section('content')
    <div  class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>User Panel</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
    <!-- Contact Section Begin -->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-6">
                    <div class="contact-form">
                        <h2>User Menu</h2>
                        <h3>__________</h3>
                        @include('home.user.usermenu')

                    </div>
                </div>
                <div class="col-md-10">
                    <div class="contact-text">
                        <h2>User Profile</h2>
                       <h3>__________________________________________________</h3>
                        @include('profile.show')
                        <!-- <p>Send us a message for your opinion, suggestion, request or anything else.</p>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Address</h5>
                                <p>333 Middle Winchendon Rd, Rindge, NH 03461</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>125-711-811</li>
                                    <li>125-668-886</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                                <p>Support.photography@ gmail.com</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection

