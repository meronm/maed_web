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


    <div class="register-box" style="margin-top: 10px;">
        <div class="register-logo">
            <a href="{{route('home')}}"><b>MAED</b>Food Ordering</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{route('signupAction')}}" method="post">
                <div class="form-group has-feedback {{$errors->has('user_name') ? 'has-error' : ''}}">
                    <label for="user_name">User Name</label>
                    <input class="form-control" type="text" name="user_name" id="user_name" value="{{ Request::old('user_name')}}">
                </div>
                <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group has-feedback {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name')}}">
                </div>
                <div class="form-group has-feedback {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="middle_name">Middle Name</label>
                    <input class="form-control" type="text" name="middle_name" id="middle_name" value="{{ Request::old('middle_name')}}">
                </div>
                <div class="form-group has-feedback {{$errors->has('last_name') ? 'has-error' : ''}}">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="{{ Request::old('last_name')}}">
                </div>
                <div class="form-group has-feedback {{$errors->has('hotel_name') ? 'has-error' : ''}}">
                    <label for="hotel_name">Hotel Name</label>
                    <input class="form-control" type="text" name="hotel_name" id="hotel_name" value="{{ Request::old('hotel_name')}}">
                </div>

                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        <input type="hidden" name="_token" value="{{Session::token() }}">
                    </div>
            </form>

            <a href="{{route('home')}}" class="text-center">I already have a membership</a>
        </div>
        </div>
        <!-- /.form-box -->
</body>
</html>