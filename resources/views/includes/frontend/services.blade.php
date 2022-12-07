<!--====== Start Service Section ======-->
<section id="services_section" class="service-area pt-90 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-55 wow fadeInUp">
                    <span class="sub-title st-one">Services</span>
                    <h2>Creative Design Solutions</h2>
                    <p>Professional Design Agency to provide solutions</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($services as $row )
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-style-one mb-40 wow fadeInDown" data-wow-delay=".3s">
                        <div class="icon">
                            <i class=" {{$row->icon}} "></i>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="service-details.html">{{$row->name}}</a></h3>
                            <ul class="list-style-two">
                                <li>{{$row->title1}}</li>
                                <li>{{$row->title2}}</li>
                                <li>{{$row->title3}}</li>
                            </ul>
                            <a href="{{url('service-details')}}/{{$row->id}}" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!--====== End Service Section ======-->
