<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="nav-container">
		    <nav class="transparent absolute">
		        <div class="nav-bar text-center">
		            <div class="col-md-2 col-md-push-5 col-sm-12 text-center">
		                <a href="/">
		                    <img alt="logo" style="height: 75px; width: 75px;" src="">
		                </a>
		            </div>
		
		            <div class="col-sm-12 col-md-5 col-md-pull-2 overflow-hidden-xs">
		                <ul class="menu inline-block pull-right">
		                    <li><a href="/">Home</a></li>
		                </ul>
		            </div>
		        
		            <div class="module right">
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
								<ul class="menu inline-block pull-right">
									<li><a class="btn btn-sm hidden-xs hidden-sm hidden-md" href="{{ route('login') }}">Login</a></li>
									<!-- <li><a href="{{ route('register') }}">Register</a></li> -->
								</ul>
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
		            </div>
		                <ul class="menu inline-block pull-left">
		                    <li><a href="#">Competition</a>
		                        <ul>
									<li><a href="{{route('appstoday')}}">AppsToday</a></li>
									<li><a href="{{route('hacktoday')}}">HackToday</a></li>
									<li><a href="{{route('business')}}">Business IT Case</a></li>
		                        </ul>
							</li>
							<li><a href="#">Event</a>
		                        <ul>
									<li><a href="#seminar">National Seminar</a></li>
									<li><a href="#seminar">Workshop</a></li>
									<li><a href="#seminar">Pasca-Event</a></li>
		                        </ul>
							</li>
		                </ul>
		            </div>
		        </div>
		
		        <div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
		            <i class="ti-menu"></i>
		        </div>
			</nav>
		<main class="py-4">
			@yield('content')
        </main>
		</div>
	</body>
</html>