<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        @include('layouts.pvStyles')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">

        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
            <form action="{{ route('register') }}" method="post">
              {{ csrf_field() }}

                <div class="body bg-gray">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>

                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
                    </div>
                </div>
                <div class="footer">

                    <button type="submit" class="btn bg-olive btn-block">Register</button>

                    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Register using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>

        @include('layouts.pvScripts')

    </body>
</html>
