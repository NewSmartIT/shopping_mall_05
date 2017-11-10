<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    @include('layouts.backend.meta')
    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ Html::style('bower_components/core_backend/css/style.css') }}
    {{ Html::style('bower_components/core_backend/css/style-responsive.css') }}
    {{ Html::style('bower_components/core_backend/css/font.css') }}
    {{ Html::style('bower_components/core_backend/css/font-awesome.css') }}
    {{ Html::style('bower_components/core_backend/css/morris.css') }}
    {{ Html::style('bower_components/core_backend/css/monthly.css') }}
    {{ Html::style('bower_components/core_datatable/datatables.min.css') }}
    @yield('styles')
</head>
<body>
    <section id="container">
        @include('layouts.backend.partial.header')
        @include('layouts.backend.partial.sidebar')
        @yield('content')
    </section>
    {{ Html::script('bower_components/core_backend/js/jquery2.0.3.min.js') }}
    {{ Html::script('bower_components/core_backend/js/raphael-min.js') }}
    {{ Html::script('bower_components/core_backend/js/morris.js') }}
    {{ Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    {{ Html::script('bower_components/core_backend/js/jquery.dcjqaccordion.2.7.js') }}
    {{ Html::script('bower_components/core_backend/js/scripts.js') }}
    {{ Html::script('bower_components/core_backend/js/jquery.slimscroll.js') }}
    {{ Html::script('bower_components/core_backend/js/jquery.nicescroll.js') }}
    {{ Html::script('bower_components/core_backend/js/jquery.scrollTo.js') }}
    {{ Html::script('bower_components/core_datatable/datatables.min.js') }}
    {{ Html::script('bower_components/bootbox.js/bootbox.js') }}
    {{ Html::script('bower_components/jquery-validation/dist/jquery.validate.js') }}
    {{ Html::script('js/backend/main.js') }}
    @yield('scripts')
</body>
</html>
