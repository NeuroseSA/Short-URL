<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Up Tech - Encurtar URL</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-4.1.2/bootstrap.min.css')}}">
        <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    </head>

    <body>
    <div class="super_container">
        @component('component.navbar', ['currentRoute' => $currentRoute])
        @endcomponent
    
        @hasSection ('body')
            @yield('body')
        @endif

        @component('component.footer')
        @endcomponent
    </div>



        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/api.js') }}"></script>
        <script src="{{ asset('css/bootstrap-4.1.2/popper.js') }}"></script>
        <script src="{{ asset('css/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
        <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
        <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
        <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
        <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
        <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
        <script src="{{ asset('plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('plugins/progressbar/progressbar.min.js') }}"></script>
        <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        @hasSection ('javascript')
            @yield('javascript')
        @endif

    </body>
</html>
