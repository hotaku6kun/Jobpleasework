<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title') </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <script src="{{asset('dist/sweetalert2.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('dist/sweetalert2.min.css')}}">
        <link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.theme.default.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link href="{{ asset('css/preview.css') }}" rel="stylesheet">
        <link href="{{ asset('css/star-rating.css') }}" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/animate.css">

    </head>
    <body>
        @include('shared.navbar')
        <div class="container-fluid">
            @yield('content')
        </div>

        @include('shared.bottomline')
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>

        <script src="{{ asset('js/star-rating.js')}}" type="text/javascript"></script>

        @yield('scripts')
    </body>
</html>