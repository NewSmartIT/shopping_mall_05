<!DOCTYPE html>
<html>
    <head>
        @include('layouts.frontend.meta')
        <title>@yield('title')</title>
        {{ Html::style('bower_components/core_frontend/css/fonts.css') }}
        {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
        {{ Html::style('bower_components/core_frontend/css/perfect-scrollbar.css') }}
        {{ Html::style('bower_components/core_frontend/css/style.css') }}
        {{ Html::style('bower_components/core_frontend/css/flexslider.css') }}
        {{ Html::style('bower_components/core_frontend/css/animation.css') }}
        {{ Html::style('bower_components/core_frontend/css/owl.carousel.css') }}
        {{ Html::style('bower_components/core_frontend/css/owl.theme.css') }}
        {{ Html::style('bower_components/core_frontend/css/chosen.css') }}
        @yield('styles')
    </head>
    <body>
        <div class="container">
            @include('layouts.frontend.partial.header')
            <div class="row content">
                @yield('content')
                @include('layouts.frontend.partial.sidebar')
            </div>
            @include('layouts.frontend.partial.footer')
        </div>
        {{ Html::script('bower_components/core_frontend/js/modernizr.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery-1.11.0.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery-ui.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery.raty.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/perfect-scrollbar.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/zoomsl-3.0.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery.fancybox.pack.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery.themepunch.plugins.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery.themepunch.revolution.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/flexslider.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery.iosslider.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/jquery.nouislider.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/owl.carousel.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/zoomsl-3.0.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/chosen.jquery.min.js') }}
        {{ Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
        {{ Html::script('bower_components/core_frontend/js/main-script.js') }}
        @yield('scripts')
    </body>
</html>
