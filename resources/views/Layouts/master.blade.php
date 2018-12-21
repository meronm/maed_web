<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <link rel="stylesheet" href="{{URL::asset('dist/css/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('dist/css/skins/_all-skins.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}"/>

        <style>
            .content-wrapper{
                background-image: url({{URL::asset('dist/img/bg.jpg')}});
                background-repeat: no-repeat;
                    }
        </style>

    </head>
    <body class="hold-transition skin-blue sidebar-mini" background="{{URL::asset('dist/img/1,jpg')}}" style="background-image: {{URL::asset('dist/img/1.jpg')}} !important;">
    <div class="wrapper">
        @include('includes.header')
        @include('includes.sidebar')
        <div class="content-wrapper">

            <section class="content">
                @yield('content')
            </section>
        </div>

    </div>

    <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>    
    <script type="text/javascript" src="{{URL::asset('js/jquery-migrate-1.2.1.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('plugins/fastclick/fastclick.js')}}"></script>
    <script src="{{URL::asset('dist/js/app.min.js')}}"></script>
    <script src="{{URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{URL::asset('plugins/chartjs/Chart.min.js')}}"></script>
    <script src="{{URL::asset('dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{URL::asset('dist/js/demo.js')}}"></script>

    </body>
</html>
