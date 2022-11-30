     <!--====== offcanvas-panel ======-->
     <div class="offcanvas-panel">
        <div class="panel-overlay"></div>
        <div class="offcanvas-panel-inner">
            <div class="panel-logo">
                <a href="index.html"><img src="{{asset($settings->image)}}" style="height:44px;width:157px" alt="Qempo"></a>
            </div>
            <div class="about-us">
                <h5 class="panel-widget-title">About Us</h5>
                <p>
                    {{$settings->aboutus}}

                </p>
            </div>
            <div class="contact-us">
                <h5 class="panel-widget-title">Contact Us</h5>
                <ul>
                    <li>
                        <i class="fal fa-map-marker-alt"></i>
                        {{$settings->address}}
                    </li>
                    <li>
                        <i class="fal fa-envelope-open"></i>
                        <a href="mailto:hello@barky.com"> {{$settings->email1}}</a>
                        <a href="mailto:info@barky.com">{{$settings->email2}}</a>
                    </li>
                    <li>
                        <i class="fal fa-phone"></i>
                        <a href="tel:(312)-895-9800">{{$settings->number1}}</a>
                        <a href="tel:(312)-895-9888">{{$settings->number2}}</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
        </div>
    </div><!--====== offcanvas-panel ======-->
