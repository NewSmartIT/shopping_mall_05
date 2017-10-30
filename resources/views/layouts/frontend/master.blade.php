<!DOCTYPE html>
<html>
    <head>
        @include('layouts.frontend.meta')
        <title>@yield('title')</title>
        <link rel="stylesheet" type='text/css' href="{{ Url('css/frontend/font.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ Url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" type='text/css' href="{{ Url('bower_components/perfect-scrollbar/css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ Url('css/frontend/style.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ Url('bower_components/flexslider/flexslider.css') }}" media="screen" />
        <link rel="stylesheet" type='text/css' href="{{ Url('css/frontend/animation.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ Url('bower_components/owl.carousel/dist/assets/owl.carousel.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ Url('css/frontend/owl.theme.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ Url('bower_components/chosen/chosen.css') }}">
        @yield('styles')
    </head>
    <body>
        <div class="container">
            @include('layouts.frontend.partial.header')
            @yield('content')
            @include('layouts.frontend.partial.footer')
            <div id="back-to-top">
                <i class="icon-up-dir"></i>
            </div>
        </div>
        <script src="{{ Url('js/frontend/modernizr.min.js') }}"></script>
        <script src="{{ Url('bower_components/my-jquery/jquery.js') }}"></script>
        <script src="{{ Url('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ Url('js/frontend/jquery.raty.min.js') }}"></script>
        <script src="{{ Url('bower_components/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ Url('js/frontend/zoomsl-3.0.min.js') }}"></script>
        <script src="{{ Url('js/frontend/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ Url('js/frontend/jquery.themepunch.plugins.min.js') }}"></script>
        <script src="{{ Url('js/frontend/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ Url('js/frontend/flexslider.min.js') }}"></script>
        <script src="{{ Url('js/frontend/jquery.iosslider.min.js') }}"></script>
        <script src="{{ Url('js/frontend/jquery.nouislider.min.js') }}"></script>
        <script src="{{ Url('bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ Url('bower_components/chosen/chosen.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ Url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ Url('js/frontend/main-script.js') }}"></script>
        @yield('scripts')
    </body>
</html>
