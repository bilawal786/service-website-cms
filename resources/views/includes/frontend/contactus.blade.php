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
                        <form action="{{route('email.query')}}" method="post">
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
