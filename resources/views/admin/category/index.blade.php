@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Category List</h2>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                                <p class="text-primary mb-0 hover-cursor">Analytics</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                                <i class="mdi mdi-download text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-clock-outline text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-plus text-muted"></i>
                            </button>
                            <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body dashboard-tabs p-0">



            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Welcome Admin Panel</p>
                            <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
                            <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                            <canvas id="cash-deposits-chart"></canvas>
                        </div>
                    </div>
                </div>


            </div></div></div></div></div></div>

        <!-- content-wrapper ends -->
@endsection
