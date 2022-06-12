@extends('layouts.homebase')

@section('title',$category->title, 'Photos')



@section('content')
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>{{$category->title}}</span>
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
                        <h2>{{$category->title}}</h2>
                    </div>
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter" style="position: relative; height: 1520px;">
                        @foreach(  $photos as $data)
                            <div class="pf-item set-bg all" data-setbg="{{Storage::url($data->image)}}">
                                <div style="padding-bottom: 250px">
                                    <input  class="rating" data-stars="5" value="{{$data->comments()->average('rate')}}"/>
                                </div>
                              <div> <a href="{{route('photo',['id'=>$data->id])}}"><span class="icon_plus"></span></a></div>
                                <div class="pf-text">
                                    <strong style="color: red">( {{$data->comments->count('id')}} )</strong>
                                    <span>{{$data->title}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn portfolio-btn">
            <a href="#">Load More</a>
        </div>
    </section>
@endsection

