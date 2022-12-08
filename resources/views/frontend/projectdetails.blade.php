@extends('layouts.frontapp')
@section('title','Project Details')
@section('section')

    <!--====== Start Page-banner section ======-->
    <section class="page-banner bg_cover position-relative z-1">
        <div class="shape shape-one scene"><span data-depth="1"><img
                    src="{{asset('frontend/assets/images/shape/shape-1.png')}}" alt=""></span></div>
        <div class="shape shape-two scene"><span data-depth="2"><img
                    src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
        <div class="shape shape-three scene"><span data-depth="3"><img
                    src="{{asset('frontend/assets/images/shape/shape-3.png')}}" alt=""></span></div>
        <div class="shape shape-four scene"><span data-depth="4"><img
                    src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-title">
                        <h1>{{$project->name}}</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">Project Details</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-banner-img">
                        <img src="{{asset($project->image1)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Page-banner section ======-->
    <!--====== Start Portfolio Details section ======-->
    <section class="portfolio-details-section pt-210 pb-130">
        <div class="container">
            <div class="portfolio-details-wrapper wow fadeInUp">
                <div class="portfolio-item">
                    <div class="text">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="content">
                                    <h3 class="title">{{$project->heading1}}</h3>
                                    <p>{!!$project->description1!!}</p>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{$project->heading2}}</h3>
                                    <p>{!!$project->description2!!}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="portfolio-info mb-45">
                                    <ul>
                                        <li>
                                            <h4>Category</h4>
                                            <p>{{$project->category->name}}</p>
                                        </li>
                                        <li>
                                            <h4>Clients</h4>
                                            <p>{{$project->client}}</p>
                                        </li>
                                        <li>
                                            <h4>Date</h4>
                                            <p>{{$project->date}}</p>
                                        </li>
                                        <li>
                                            <h4>Location</h4>
                                            <p>{{$project->location}}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content">
                                    <img src="{{asset($project->image2)}}" alt="">
                                    <h3 class="title">Summery</h3>
                                    <p>{!!$project->summarydescription!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Portfolio Details section ======-->

@endsection
