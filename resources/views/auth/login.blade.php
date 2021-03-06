@extends('layouts.app-auth')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p><a href="{{route('index')}}"><img class="img-responsive" style="height: 80px; width: auto; display: inline;" src="{{ asset('img/logo_pln_1.png')  }}" alt= "User profile" /><b>&nbsp;&nbsp;PT PLN (Persero)</b></a></p>
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><strong>Login</strong></p>

    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
      @csrf
      <!-- username -->
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <label for="email" class="col-form-label text-md-right">{{ __('NIP') }}</label>
        <input id="email" type="text" placeholder="NIP" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <!-- end of username -->

      <!-- password -->
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control" placeholder="Tanggal lahir (yyyy-mm-dd)" name="password" required>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- end of password -->

      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
@endsection