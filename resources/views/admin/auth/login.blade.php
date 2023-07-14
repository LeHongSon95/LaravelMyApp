@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __("Admin Login") }}</div>
                  <div class="card-body">
  
                      <form action="{{ route('admin.login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                              <div class="col-md-6">
                                  <input type="text" id="email" class="form-control" name="email"  autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __("Password") }}</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" >
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> {{ __("Remember Me") }}
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __("Login") }}
                              </button>
                              <a href="{{ route('user.login') }}">Không phải admin?</a>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection





{{-- @extends('layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="../app.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <title>Form login unitop.vn</title>
    </head>

    <body>
        <div id="wrapper">
            <form id="form-login" action="{{ route('login.post') }}" method="POST">
                @csrf
                <h1 class="form-heading">Form đăng nhập</h1>
                <div for="email" class="form-group">
                    <i class="far fa-user"></i>
                    <div style="display: flex; flex-wrap:wrap;">
                        <input id="email" name="email" type="text" class="form-input" placeholder="Tên đăng nhập">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                </div>
                <div for="password" class="form-group">
                    <i class="fas fa-key"></i>
                    <div style="display: flex; flex-wrap:wrap;">
                        <input type="password" id="password" name="password" class="form-input" placeholder="Mật khẩu">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div id="eye">
                        <i style="margin-left: 100px;" class="far fa-eye"></i>
                    </div>
                </div>
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../js/app.js"></script>

</html @endsection --}}

{{-- 
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modern Login Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Modern Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Snippet" rel="stylesheet">
    <!--online fonts-->
    <!-- //web-fonts -->
</head>

<body>
    <div data-vide-bg="video/keyboard">
        <div class="main-container">
            <!--header-->
            <div class="header-w3l">
                <h1>Modern Login Form</h1>
            </div>
            <!--//header-->
            <!--main-->
            <div class="main-content-agile">
                <div class="w3ls-pro">
                    <h2>Login Now</h2>
                </div>
                <div class="sub-main-w3ls">
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <input placeholder="Enter your E-mail" name="email" id="email" type="email"
                            required="">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input placeholder="Enter Password" name="password" id="password" type="password"
                            required="">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <span class="icon2"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <div class="checkbox-w3">
                            <span class="check-w3"><input type="checkbox" />Remember Me</span>
                            <a href="#">Forgot Password?</a>
                            <div class="clear"></div>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
            <!--//main-->
            <!--footer-->
            <div class="footer">
                <p>&copy; 2017 modern Login Form. All rights reserved | Design by <a
                        href="http://w3layouts.com">W3layouts</a></p>
            </div>
            <!--//footer-->
        </div>
    </div>
    <!-- js -->
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <!--common-js-->
    <script src="../js/jquery.vide.min.js"></script>
    <!--video-js-->
    <!-- //js -->
</body>

</html> --}}
