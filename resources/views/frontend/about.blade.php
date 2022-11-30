@extends('layouts.frontapp')

@section('section')

<!--====== Start Page-banner section ======-->
<section class="page-banner bg_cover position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{asset('frontend/assets/images/shape/shape-1.png')}}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="3"><img src="{{asset('frontend/assets/images/shape/shape-3.png')}}" alt=""></span></div>
    <div class="shape shape-four scene"><span data-depth="4"><img src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>About Us</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img">
                    <img src="{{asset('frontend/assets/images/breadcrumb/img-1.jpg')}}" alt="">
                    <div class="play-content">
                        <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="video-popup"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-banner section ======-->
<!--====== Start About section ======-->
<section class="about-area about-area-v3 pt-210 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-holder mb-50 wow fadeInLeft">
                    <img src="{{asset('frontend/assets/images/about/about-4.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInRight">
                    <div class="section-title mb-25">
                        <span class="sub-title st-one">About Us</span>
                        <h2>Best Digital Solutiuon
                            Provider Agency
                            </h2>
                        <p class="blue-dark">Professional Design Agency to provide solutions</p>
                    </div>
                    <p>On the other hand denounce with righteous and dislike men
                        who beguile and demoralizes by the charms of pleasure thes moment, so blinded by desire that they cannot</p>
                    <ul class="list-style-one mb-35">
                        <li>Digital Creative Agency</li>
                        <li>Professional Problem Solutions</li>
                        <li>Web Design & Development</li>
                    </ul>
                    <a href="about.html" class="main-btn bordered-btn btn-blue arrow-btn">Learn More Us</a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About section ======-->
<!--====== Start Service Section ======-->
<section class="service-area bototm-minus-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item service-style-three mb-40 wow fadeInUp" data-wow-delay=".15s">
                    <div class="icon">
                        <i class="flaticon-strategy"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html">Strategy</a></h3>
                        <ul class="list-style-two">
                            <li>Product Management</li>
                            <li>MVP Definition</li>
                            <li>Product Strategy</li>
                        </ul>
                        <a href="services.html" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item service-style-three mb-40 wow fadeInUp" data-wow-delay=".20s">
                    <div class="icon">
                        <i class="flaticon-design"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html">Product Design</a></h3>
                        <ul class="list-style-two">
                            <li>Product Management</li>
                            <li>MVP Definition</li>
                            <li>Product Strategy</li>
                        </ul>
                        <a href="services.html" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item service-style-three mb-40 wow fadeInUp" data-wow-delay=".25s">
                    <div class="icon">
                        <i class="flaticon-source-code"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html">Development</a></h3>
                        <ul class="list-style-two">
                            <li>Product Management</li>
                            <li>MVP Definition</li>
                            <li>Product Strategy</li>
                        </ul>
                        <a href="services.html" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Service Section ======-->
<!--====== Start Team section ======-->
<section class="fancy-text-block light-gray-bg pb-90 fancy-text-block-v1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text-wrapper mb-40 fadeInLeft">
                    <div class="section-title mb-25">
                        <span class="sub-title st-one">How We Are</span>
                        <h2>Build Grow & Manage
                            Your Brand Identitys</h2>
                        <p class="blue-dark">Professional Design Agency to provide solutions</p>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enimpsam luptatem quia voluptas aspernatur aut fugitdolor sit amet</p>
                    <a href="about.html" class="main-btn arrow-btn">Discover More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-holder position-relative z-1 mb-40 wow fadeInRight">
                    <div class="shape shape-one"><span><img src="{{asset('frontend/assets/images/shape/circle-logo-2.png')}}" alt=""></span></div>
                    <div class="shape shape-two"><span><img src="{{asset('frontend/assets/images/shape/shape-6.png')}}" alt=""></span></div>
                    <img src="{{asset('frontend/assets/images/about/img-4.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Team section ======-->
<!--====== Start Team section ======-->
<section class="team-area team-area-v2 pt-130 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-55 wow fadeInUp">
                    <span class="sub-title st-one">Meet Our Team</span>
                    <h2>Experience Team Members</h2>
                    <p>Professional Design Agency to provide solutions</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-55 wow fadeInUp" data-wow-delay=".2s">
                    <div class="img-holder">
                        <img src="assets/images/team/img-1.jpg" alt="">
                    </div>
                    <div class="text text-center">
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <h4><a href="team.html">Douglas J. Bleau</a></h4>
                        <p class="position">UX/UI Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-55 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img-holder">
                        <img src="assets/images/team/img-2.jpg" alt="">
                    </div>
                    <div class="text text-center">
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <h4><a href="team.html">Thomas M. Wilso</a></h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-55 wow fadeInUp" data-wow-delay=".4s">
                    <div class="img-holder">
                        <img src="assets/images/team/img-3.jpg" alt="">
                    </div>
                    <div class="text text-center">
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <h4>Robert J. Ryan</h4>
                        <p class="position">SEO Marketing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-55 wow fadeInUp" data-wow-delay=".5s">
                    <div class="img-holder">
                        <img src="{{asset('frontend/assets/images/team/img-4.jpg')}}" alt="">
                    </div>
                    <div class="text text-center">
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <h4><a href="team.html">Kenneth K. Joiner</a></h4>
                        <p class="position">UX/UI Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Team section ======-->
<!--====== Start Testimonial Section ======-->
<section class="testimonial-area testimonial-area-v3 pattern-bg dark-blue-bg pt-130 pb-135">
    <div class="shape shape-one"><span><img src="{{asset('frontend/assets/images/shape/circle-logo-2.png')}}" alt=""></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title section-title-white mb-55 wow fadeInLeft">
                    <span class="sub-title st-one">Testimonials</span>
                    <h2>What Our Client’s About Us</h2>
                    <p>Professional Design Agency to provide solutions</p>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-three">
            <div class="testimonial-item mb-55 wow fadeInUp">
                <div class="author-thumb">
                   <img src="assets/images/testimonial/thumb-1.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <p>Sit amet consectetur adipiscing
                        elit sed do eiusmod temporincdes
                        idunt ut labore et dolore magnase
                        aliqua. Quis ipsum suspendisseyc
                        sltrices gravida. Risus commodo
                        verra maecenas lacusvel. </p>
                    <div class="author-quote-title d-flex">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h4>Dustin A. Pherson</h4>
                            <p class="position">Senior  Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item mb-55 wow fadeInUp">
                <div class="author-thumb">
                   <img src="assets/images/testimonial/thumb-2.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <p>Sit amet consectetur adipiscing
                        elit sed do eiusmod temporincdes
                        idunt ut labore et dolore magnase
                        aliqua. Quis ipsum suspendisseyc
                        sltrices gravida. Risus commodo
                        verra maecenas lacusvel. </p>
                    <div class="author-quote-title d-flex">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h4>David M. Carter</h4>
                            <p class="position">Senior  Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item mb-55 wow fadeInUp">
                <div class="author-thumb">
                   <img src="assets/images/testimonial/thumb-1.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <p>Sit amet consectetur adipiscing
                        elit sed do eiusmod temporincdes
                        idunt ut labore et dolore magnase
                        aliqua. Quis ipsum suspendisseyc
                        sltrices gravida. Risus commodo
                        verra maecenas lacusvel. </p>
                    <div class="author-quote-title d-flex">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h4>Dustin A. Pherson</h4>
                            <p class="position">Senior  Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item mb-55 wow fadeInUp">
                <div class="author-thumb">
                   <img src="assets/images/testimonial/thumb-2.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <p>Sit amet consectetur adipiscing
                        elit sed do eiusmod temporincdes
                        idunt ut labore et dolore magnase
                        aliqua. Quis ipsum suspendisseyc
                        sltrices gravida. Risus commodo
                        verra maecenas lacusvel. </p>
                    <div class="author-quote-title d-flex">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h4>David M. Carter</h4>
                            <p class="position">Senior  Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Testimonial Section ======-->
<!--====== Start Partners Section ======-->
<section class="partners-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-55 wow fadeInUp">
                    <h2>We’ve 1534+ Global Partners</h2>
                    <p>Professional Design Agency to provide solutions</p>
                </div>
            </div>
        </div>
        <div class="partners-wrapper wow fadeInUp">
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-1.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-2.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-3.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-4.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-5.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-6.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-7.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-8.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-9.png" alt=""></a>
                </div>
            </div>
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="assets/images/partners/img-10.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Partners Section ======-->


@endsection
