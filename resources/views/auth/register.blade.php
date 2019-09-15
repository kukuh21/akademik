<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Register</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{ asset('adminLTE/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/iCheck/square/blue.css') }}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('images/haruai-avatar.png') }}" width="60">
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Silakan Register</p>

    <form action="{{ route('register') }}" method="post">
      @csrf
      <div class="form-group has-feedback">
        <label for="name" class="col-sm-12 colform-label pl-0">{{ __('Name') }}</label>
        <br>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="form-group has-feedback">
          <label for="email" class="col-sm-12 colform-label pl-0">{{ __('Email Address') }}</label>
          <br>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>

      <div class="form-group has-feedback">
          <label for="password" class="col-sm-12 colform-label pl-0">{{ __('Password') }}</label>
          <br>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>

      <div class="form-group has-feedback">
          <label for="password-confirm" class="col-sm-12 colform-label pl-0">{{ __('Confirm Password') }}</label>
          <br>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>

      <div class="row">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
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