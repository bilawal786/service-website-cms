@extends('layouts.frontapp')
@section('title','Service Details')
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
                        <h1>{{$service->name}}</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Service Details</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-banner-img">
                        <img src="{{asset($service->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page-banner section ======-->
    <!--====== Start Features section ======-->
    <section class="features-area pt-210">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-wrapper mb-50 wow fadeInLeft">
                        <div class="section-title mb-30">
                            <span class="sub-title st-one">Features</span>
                            <h2>{{$service->heading}}</h2>
                            <p class="blue-dark">{{$service->subheading}}</p>
                        </div>
                        <p>{!! $service->description !!}</p>
                        <a href="#" class="main-btn">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-list mb-50 wow fadeInRight">
                        <div class="features-item mb-30">
                            <div class="text">
                                <h4>{{$service->feature1}}</h4>
                                <p>{!!$service->feature1detail!!}</p>
                            </div>
                        </div>
                        <div class="features-item mb-30">
                            <div class="text">
                                <h4>{{$service->feature2}}</h4>
                                <p>{!!$service->feature2detail!!}</p>
                            </div>
                        </div>
                        <div class="features-item mb-30">
                            <div class="text">
                                <h4>{{$service->feature3}}</h4>
                                <p>{!!$service->feature3detail!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Features section ======-->

    <!--====== Start Portfolio Section ======-->
    <section class="portfolio-area pt-130 pb-135">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Latest Work</span>
                        <h2>Professional Experience</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>


            <div class="portfolio-slider-one">
                @if($service->otherimages)
                        <?php
                        $im_images = $service->otherimages;
                        $images = explode(',', $im_images);

                    foreach ($images as $slide) :
                        ?>
                    <div class="portfolio-item portfolio-style-one wow fadeInUp">
                        <div class="img-holder">
                            <img src="{{asset($slide)}}" alt="Img">
                            <a href="{{asset($slide)}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Dashboard Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                    <?php endforeach ?>
                @endif
            </div>
        </div>
    </section><!--====== End Portfolio Section ======-->
    <!--====== Start Contact Section ======-->
    <section class="contact-area contact-area-v1 pt-70 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="text-wrapper mb-50 wow fadeInLeft">
                        <h2>Have Any on <span class="fill-text">Project</span>
                            Mind! <span class="fill-text">Contact</span> Us</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan
                            tium, totam rem aperiam, eaque ipsa quae abillo <span>inventore veritatis</span> et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="information-style-one mb-40">
                                    <div class="icon">
                                        <span><i class="far fa-envelope-open"></i>Email Us</span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="mailto:{{$settings->email2}}">{{$settings->email2}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="information-style-one mb-40">
                                    <div class="icon">
                                        <span><i class="far fa-phone"></i>Phone Us</span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="{{$settings->number1}}">{{$settings->number1}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="{{route('email.queryservice')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Full Name" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Write Message" id="message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="service" value="{{$service->name}}">
                                    <input type="hidden" name="serviceid" value="{{$service->id}}">
                                    <input type="hidden" name="adminemail" value="{{$settings->email2}}">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="submit" class="main-btn arrow-btn" value="Send Us Message">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img-holder mb-50 wow fadeInRight">
                        <div class="shape shape-icon-one scene"><span data-depth="1"><img src="{{asset('frontend/assets/images/shape/shape-4.png')}}" alt=""></span></div>
                        <div class="shape shape-icon-two"><span></span></div>
                        <img src="{{asset($websiteImages->image6)}}" alt="Contact Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Section ======-->

@endsection
