@extends('main')

@section('title', 'Login')


@section('login_register')


    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="login-body">
           <img src="resources/images/back.jpg">
        </div>
        
        <div class="login-form">
          {{--   <div class="row1-login">
                <div class="title-login">
                    <label>Admin Login</label>
                </div>
                <div class="subtitle-login">
                    <label>make sure your account is secured</label>
                </div>
                <div class="image-person">
                    <img src="/resources/images/iopex.png">

                </div>
            </div> --}}

            <div class="row2-login">
                <div class="login_logo">
                    <img src="resources/logo/lara_logo.jpg" class="logo-iopex">                    
                </div>
                {{-- <div class="row2-title">
                    <label>PayPerCustomer.co.uk</label>
                </div> --}}

                <div class="row2-login-info">
                    <div class="login-input">
                        <img src="resources/icons/username.png">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="email">
                           @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                    </div>
                    <div class="login-input">
                        <img src="resources/icons/passcode.png">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                       {{--  @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                         {{-- <button>LOG IN</button> --}}
                         <div style="text-align: center;">
                             
                         {{-- <a href="/register" style="color: #f26f21">Create an Account</a> --}}
                         </div>
                </div>
            </div>
        </div>

    </form>
  {{-- <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
        <div class="card-body">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                <input id="email" type="email" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Login
            </button>
          <div class="text-center">
            <a class="d-block small mt-3" href="/register">Register an Account</a>
            <a class="bd-block small" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
          </div>
          </form>
        </div>
    </div>
  </div> --}}

@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
