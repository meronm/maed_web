<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MAED Food Ordering</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}"/>
</head>
<body class="hold-transition login-page">
	@include('includes.message-block')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route('home')}}"><b>MAED </b>Food Ordering</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{route('signin')}}" method="post">
                <div class="form-group has-feedback {{$errors->has('user_name') ? 'has-error' : ''}}">
                    <input type="text" name="user_name" class="form-control" placeholder="Enter User Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : ''}}">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        <input type="hidden" name="_token" value="{{Session::token() }}">
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <a href="{{route('signup')}}" class="text-center">Register a new membership</a>

        </div>
    </div>
    <script>
        var token = '{{ Session::token()}}';
    </script>
</body>

</html>