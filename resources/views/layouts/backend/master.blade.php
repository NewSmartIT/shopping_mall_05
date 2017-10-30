<!DOCTYPE html>
    <head>
        <title>@yield('title')</title>
        @include('layouts.backend.meta')
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="stylesheet" type='text/css' href="{{ Url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" >
        <link rel='stylesheet' type='text/css' href="{{ Url('css/backend/style.css') }}" />
        <link rel='stylesheet' type='text/css' href="{{ Url('css/backend/style-responsive.css') }}" />
        <link rel='stylesheet' type='text/css' href="{{ Url('css/backend/font-custom.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ Url('css/backend/font.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ Url('bower_components/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href="{{ Url('css/backend/morris.css') }}" />
        <link rel='stylesheet' type='text/css' href="{{ Url('css/backend/monthly.css') }}" />
        @yield('styles')
    </head>
    <body>
        <section id="container">
            @include('layouts.backend.partial.header')
            @include('layouts.backend.partial.sidebar')
            @yield('content')
        </section>
        <script src="{{ Url('bower_components/my-jquery/jquery.js') }}"></script>
        <script src="{{ Url('js/backend/raphael-min.js') }}"></script>
        <script src="{{ Url('js/backend/morris.js') }}"></script>
        <script src="{{ Url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ Url('bower_components/dcjqaccordion/js/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ Url('js/backend/scripts.js') }}"></script>
        <script src="{{ Url('bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ Url('bower_components/jquery.nicescroll/dist/jquery.nicescroll.js') }}"></script>
        <script src="{{ Url('js/backend/jquery.scrollTo.js') }}"></script>
        @yield('scripts')
    </body>
</html>
