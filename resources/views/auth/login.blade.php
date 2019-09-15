<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Log in</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{ asset('adminLTE/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/iCheck/square/blue.css') }}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('images/logo.png') }}" width="80">
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Silakan Login</p>

    <form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}

      <div class="form-group has-feedback">
        <label for="email" class="col-sm-12 colform-label pl-0">{{ __('Email') }}</label>
        <br>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
      </div>

      <div class="form-group has-feedback">
        <label for="password" class="col-md-4 colform-label text-md-left pl-0">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('message') }}</strong>
            </span>
        @endif
      </div>

      <div class="row">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <div class="col-md-4" style="float:right;">
            <a class="nav-link" href="{{ route('register') }}">
                <button type="button" class="btn btn-success btn-block btn-flat">Register</button>
            </a>
        </div>
      </div>
    </form>

  </div>

</div>

<script src="{{ asset('adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminLTE/plugins/iCheck/icheck.min.js') }}"></script>
</body>
</html>