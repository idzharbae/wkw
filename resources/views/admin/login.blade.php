@extends('layouts.navbar2')

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>
				
		<div class="main-container">
		<section class="cover fullscreen image-bg">
		        <div class="background-image-holder">
		            <img alt="image" class="background-image" src="img/bglogin.png" style=" background-repeat: no-repeat; background-attachment: fixed;">
		        </div>
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		                    <div class="feature bordered text-center">
		                        <h3 class="uppercase" >Admin Login</h3>
		                       
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" style="color: white;" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="color: white;" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-0">
                                <div class="checkbox" style="color: #FFFFFF !important;">
                                    <label>
                                        <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <!-- <div class="col-md-6 col-md-offset-0">
                                <button style="font-size: 14px; background-color: #7c6bee;" type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link col-md-12" href="{{ route('password.request') }}" style="text-decoration: none;">
                                    Forgot Your Password?
                                </a>
                                Not a member yet?
                                <a class="btn btn-link col-md-12" href="{{ route('register') }}" style="text-decoration: none;">
                                    Register
                                </a>
                            </div> -->
                            <div class="row col-md-offset-1">
                                <div class="col-lg-5" style="padding: 0px"><button type="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0; background-color: #7c6bee;">Login</button></div>
                                <div class="col-lg-6" style="padding: 0px"><a href="{{ route('admin.password.request') }}" class="btn btn-link" style="text-decoration: none; text-transform: uppercase;border-radius:0;">Forgot Password?</a></div>
                            </div>
                            Not a member yet?
                            <a class="btn btn-link col-md-10 col-md-offset-1" href="{{ route('register') }}" style="text-decoration: none; background-color: #7c6bee;">
                                Register
                            </a>          
                        </div>
                    </form>
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section></div>
		
				
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				
@endsection
