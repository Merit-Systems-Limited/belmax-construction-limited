<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('web/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/animate-2.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/icofont/icofont.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/lightboxed.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">
    <script async="" src="../../cdn-cgi/challenge-platform/h/g/scripts/invisible.js"></script>
    @yield('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    @include('layouts.partials.notifications')
    <div class="preloader" style="display: none;">
        <div class="loader"><img src="{{ asset('web/assets/images/spinner.gif') }}" alt="image"></div>
    </div>
    @include('layouts.partials.web.header')
    <div class="sidebar-bg"></div>
    @include('layouts.partials.web.sidebar')
    @yield('content')
    @include('layouts.partials.web.footer')


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('web/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/owl.carousel2.thumbs.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/lightboxed.js') }}"></script>

    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/main.js') }}"></script>
    <script type="text/javascript">
        (function(){window['__CF$cv$params']={r:'6e3bd0d42b6f4f64',m:'IG_quOvELdnMtbu0ggFj.N2ulel_CX_Oqi3vG4eLvrE-1645906215-0-AVu5GMxi95lSY1RuADsiyGA1nMtx3z5+1V0Gs3jCWsmqwWWKXKbauiDnOEM6iTFygorYaxGFYtH3g+KPc4/MEf3fQ4gIyDLoNosAwyD4OKMZKm97wlUHGherOMob3mG1P93b/OD5afqncdFUav/RWqM=',s:[0x08e88e8c8c,0xfd24fc1413],u:'/cdn-cgi/challenge-platform/h/g'}})();
    </script>

    <div id="lightboxed--cache">
        <div id="id1645906396423">
            <div class="lightboxed--cached_content">
                <div class="lightboxed--frame"><img src="web/assets/images/project-details-1.jpg" alt="Image Alt 1">
                </div>
                <div class="lightboxed--frame"><img src="web/assets/images/service-details-1.jpg" alt="Image Alt 1">
                </div>
                <div class="lightboxed--frame"><img src="web/assets/images/service-details-6.jpg" alt="image"></div>
                <div class="lightboxed--frame"><img src="web/assets/images/project-details-4.jpg" alt="image"></div>
            </div>
            <div class="lightboxed--cached_thumbs">
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-1.jpg"></div>
                </div>
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-2.jpg"></div>
                </div>
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-3.jpg"></div>
                </div>
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-4.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="lightboxed--container" class="lightboxed--lightbox_close">
        <div id="lightboxed--stage">
            <div id="lightboxed--content"></div>
            <div id="lightboxed--thumbs"></div>
        </div>
        <div id="lightboxed--bttn_close"></div>
        <div id="lightboxed--bttn_prev"></div>
        <div id="lightboxed--bttn_next"></div>
    </div>
</body>

</html>
