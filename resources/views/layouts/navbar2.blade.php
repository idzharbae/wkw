<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
		{{-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('css/theme.css')}}" rel="stylesheet">
		<link href="{{asset('css/custom.css')}}" rel="stylesheet"> --}}
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="nav-container">
		    <nav class="transparent absolute">
		        <div class="nav-bar text-center" style="border-bottom: 0px">
		            <div class="col-md-2 col-md-push-5 col-sm-12 text-center">
		                <a href="/">
		                    <img alt="logo" style="height: 45px; width: auto;" src="img/logoittoday.png">
		                </a>
		            </div>
		
		            <div class="col-sm-12 col-md-5 col-md-pull-2 overflow-hidden-xs">
		                <ul class="menu inline-block pull-right">
		                    <li><a href="/" style="font-size: 16px;">Home</a></li>
		                </ul>
		            </div>
		        
		            <div class="module right">
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
								<ul class="menu inline-block pull-right">
									<li><a class="btn btn-sm btn-white hidden-xs hidden-sm hidden-md" style="font-size: 12px;" href="{{ route('login') }}">Login</a></li>
								</ul>
							@else
								<li class="nav-item dropdown pull-right">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffff; font-size: 16px">
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown">
										<ul>
											<li>
												<a class="dropdown-item" href="{{ route('team.profile') }}">&nbsp;&nbsp;&nbsp;Profile</a>
											</li>
											<li><a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
													&nbsp;&nbsp;&nbsp;Logout
												</a>
											</li>
										</ul>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
		            </div>
		                <ul class="menu inline-block pull-left">
		                    <li><a style="font-size: 16px;" href="#">Competition <i class="fa fa-caret-down" aria-hidden="true"></i></a>
		                        <ul>
									<li><a href="{{route('appstoday')}}">AppsToday</a></li>
									<li><a href="{{route('hacktoday')}}">HackToday</a></li>
									<li><a href="{{route('business')}}">Business IT Case</a></li>
		                        </ul>
							</li>
							<li><a style="font-size: 16px;" href="#">Event <i class="fa fa-caret-down" aria-hidden="true"></i></a>
		                        <ul>
									<li><a href="{{route('seminar')}}">National Seminar</a></li>
		                        </ul>
							</li>
		                </ul>
		            </div>
		        </div>
		
		        <div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
		            <i class="ti-menu"></i>
		        </div>
			</nav>
			
		<main class="py-4" >
			@yield('content')

		</main>
		{{-- Back to top button --}}
		{{-- <a href="#" id="myBtn" title="Go to top">Back to top</a> --}}
		</div>
		
	</body>
	<script src="{{asset('js/app.js')}}"></script>
	{{-- animation --}}
	<script src="{{asset('js/main.js')}}"></script>
</html>