@extends('layouts.frontapp')


@section('section')

<!--====== Start Page-banner section ======-->
<section class="page-banner bg_cover position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{asset('frontend/assets/images/shape/shape-1.png')}}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="3"><img src="{{asset('frontend/assets/images/shape/shape-3.png')}}" alt=""></span></div>
    <div class="shape shape-four scene"><span data-depth="4"><img src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="page-title text-center">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-banner section ======-->
<section class="contact-info-v1 pt-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-60">
                    <span class="sub-title st-one">Get In Touch</span>
                    <h2>Have Any Project on
                        Mind? Work Together</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="information-item info-item-one mb-30 wow fadeInUp" data-wow-delay=".15s">
                            <div class="icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Locations</h4>
                                <p>505 Main Street, 2nd
                                    Block, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="information-item info-item-two mb-30 wow fadeInUp" data-wow-delay=".20s">
                            <div class="icon">
                                <i class="far fa-envelope-open-text"></i>
                            </div>
                            <div class="info">
                                <h4>Email Address</h4>
                                <p><a href="mailto;hotlinein@gmail.com">hotlinein@gmail.com</a></p>
                                <p><a href="mailto;hotlinein@gmail.com">www.info.net</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="information-item info-item-three mb-30 wow fadeInUp" data-wow-delay=".25s">
                            <div class="icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="info">
                                <h4>Phone Number</h4>
                                <p><a href="tel:+012(345)67899">+012 (345) 678 99</a></p>
                                <p><a href="tel:+012(345)67899">+0123456</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="information-item info-item-four mb-30 wow fadeInUp" data-wow-delay=".30s">
                            <div class="icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="info">
                                <h4>Working Hours</h4>
                                <p><span>Sunday - Monday</span><span>09 am - 05 pm</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="map-box mb-30">
                    <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Start Contact section ======-->
<section class="contact-area contact-area-v3 pt-130 pb-130">
    <div class="container-1350">
        <div class="contact-wrapper light-gray-bg pt-80 pb-80 wow fadeInUp">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title st-one">Message Us</span>
                            <h2>Get Any Consultations ?
                                Contact With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address " name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group text-center">
                                            <button class="main-btn">Send Us Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact section ======-->


@endsection
