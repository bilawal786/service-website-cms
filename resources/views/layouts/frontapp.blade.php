<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>@yield('title')</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/png">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/default.css')}}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

    </head>

    <body>
    <?php
    $settings = App\Setting::first();
    ?>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        @include('includes.frontend.offcanvaspanel')

        @include('includes.frontend.header')



        @yield('section')



        @include('includes.frontend.footer')



        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery-3.6.0.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{asset('frontend/assets/vendor/popper/popper.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--====== Slick js ======-->
        <script src="{{asset('frontend/assets/vendor/slick/slick.min.js')}}"></script>
        <!--====== Magnific js ======-->
        <script src="{{asset('frontend/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Isotope js ======-->
        <script src="{{asset('frontend/assets/vendor/isotope.min.js')}}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{asset('frontend/assets/vendor/imagesloaded.min.js')}}"></script>
        <!--====== Counterup js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery.counterup.min.js')}}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery.waypoints.js')}}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{asset('frontend/assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!--====== WOW js ======-->
        <script src="{{asset('frontend/assets/vendor/wow.min.js')}}"></script>
        <!--====== Parallax js ======-->
        <script src="{{asset('frontend/assets/vendor/parallax.min.js')}}"></script>
        <!--====== Main js ======-->
        <script src="{{asset('frontend/assets/js/theme.js')}}"></script>
    </body>
</html>
