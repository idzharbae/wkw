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
		            <img alt="image" class="background-image" src="img/bglogin.png">
		        </div>
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		                    <div class="feature bordered text-center">
                            <br><br>
		                        <h3 class="uppercase">Register</h3>
                                        
                                <form method="POST" action = '{{ url("/daftar/{$users}") }}'>
                                    {{csrf_field()}}

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right"> Group Members </label>

                                        <div class="col-md-6">
                                            <input type = 'text' name = 'member_one' required/>
                                            <input type = 'text' name = 'member_two' />
                                            <input type = 'text' name = 'member_three' />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right"> University/School </label>

                                        <div class="col-md-6">
                                            <input type = 'text' name = 'school' required/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right"> Province </label>

                                        <div class="col-md-6">
                                            <input type = 'text' name = 'province' required/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right"> Phone Number </label>

                                        <div class="col-md-6">
                                            <input type = 'text' name = 'phone_num' />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right"> Line ID </label>

                                        <div class="col-md-6">
                                            <input type = 'text' name = 'line_id' required/>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 col-md-offset-4">
                                        <input type='hidden' name='tipe' value="apps" /> 
                                            <button type="submit" name='submit' class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
		                    </div>
		                </div>
		            </div> 
		        </div>
            </section>
        </div>	
	    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				
@endsection