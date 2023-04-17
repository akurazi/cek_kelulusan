@extends('layouts.login')
@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand">
            <img src="{{ asset('files/logo/'.$web->logo) }}" alt="logo" width="100" class="shadow-light rounded-circle">
          </div>
          <h4 align="center">{{ $web->web_name }}</h4><br>
          @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('loginError') }}
                </div>
            </div>
            @endif

          <div class="card card-primary">
            <div class="card-header"><h4>Login</h4></div>

            <div class="card-body">
              <form method="POST" action="/login" class="needs-validation">
                @csrf
             
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1" autofocus>
                  @error('email')
                   {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    {{-- <div class="float-right">
                      <a href="auth-forgot-password.html" class="text-small">
                        Forgot Password?
                      </a>
                    </div> --}}
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2">
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>

            </div>
          </div>
          <div class="simple-footer">
            Copyright &copy; {{ $web->footer }}
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection