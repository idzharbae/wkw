<!doctype html>

@extends('layouts.navbar2')

@section('content')

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
		 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    
	</head>
    <body>
	<div class="main-container">
	<!-- image slider -->
	<!-- <section>
			<div class="container">				
				<div class="row">
					<div class="col-sm-12">
						<div class="image-slider slider-all-controls controls-inside">
							<ul class="slides">
								<li>
									<img alt="Image" src="img/cover14.jpg">
								</li>
								<li>
									<img alt="Image" src="img/cover15.jpg">
								</li>
								<li>
									<img alt="Image" src="img/cover16.jpg">
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
	</section> -->
	
	<!-- countdown -->
	<section class="cover fullscreen image-bg overlay">
		<div class="background-image-holder">
			<img alt="image" class="background-image" src="img/cover13.jpg">
		</div>
		<div class="container v-align-transform">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
						<h3 class="uppercase mb40 mb-xs-24">Launching Soon</h3>
						<div class="countdown mb40" data-date="2018/05/27"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
					<p>
						We'll be launching our new site in the coming weeks. Hit the form below to get notified as we launch. Thanks for your interest!
					</p>
					<form class="halves form-newsletter" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
						<input class="mb16 validate-required validate-email signup-email-field" type="text" placeholder="Email Address" name="email">
						<button class="mb16" type="submit">Notify Me</button>
						<span>*We won't share your email with third parties.</span>
						<iframe srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;>    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>    <h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>    <input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-FNAME&quot;>First Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-LNAME&quot;>Last Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>    <div id=&quot;mce-responses&quot; class=&quot;clear&quot;>        <div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>        <div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->" class="mail-list-form">
						</iframe>
					</form>
				</div>
			</div>
			
		</div>		
	</section>
					
	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80" id="appstoday">
		<div class="background-image-holder">
			<img alt="image" class="background-image" src="img/apps.png">
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-md-push-7 col-sm-push-6">
					<h2>APPSTODAY</h2>
					<p class="lead mb48 mb-xs-32">
					AppsToday merupakan salah satu cabang kompetisi IT Today 2018 pada bidang inovasi aplikasi. Lomba ini dibuat sebagai wadah bagi peserta yang akan menjadi generasi developer baru yang kreatif dan inovatif untuk memajukan daya saing Indonesia di bidang teknologi informasi. Peserta dari kompetisi AppsToday merupakan mahasiswa S1/Diploma.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80" id="hacktoday">
		<div class="background-image-holder">
			<img alt="image" class="background-image" src="img/hack.png">
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-md-push-7 col-sm-push-6">
					<h2>HACKTODAY</h2>
					<p class="lead mb48 mb-xs-32">
					HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2018 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta  diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia. Lomba HackToday yang diadakan IT Today 2018 bertujuan agar setiap peserta mampu mengembangkan kemampuannya pada bidang Information Security.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80" id="business">
		<div class="background-image-holder">
			<img alt="image" class="background-image" src="img/app9.jpg">
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-md-push-7 col-sm-push-6">
					<h2>BUSINESS IT CASE</h2>
					<p class="lead mb48 mb-xs-32">
					Business IT Case merupakan salah satu cabang kompetisi IT Today 2018 berbasis case-solving bisnis berskala nasional. Business IT Case menguji kemampuan problem solving peserta dalam menganalisa dan memecahkan kasus bisnis yang diberikan dengan memberikan solusi melalui pendekatan Teknologi Informasi.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80" id="seminar">
		<div class="background-image-holder">
			<img alt="image" class="background-image" src="img/app9.jpg">
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-md-push-7 col-sm-push-6">
					<h2>NATIONAL SEMINAR</h2>
					<p class="lead mb48 mb-xs-32">
						Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="image-bg bg-light parallax overlay pt160 pb160 pt-xs-80 pb-xs-80">
		<div class="background-image-holder">
			<img alt="image" class="background-image" src="img/intro1.jpg">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-8">
					<i class="ti-quote-left icon icon-sm mb16"></i>
					<h3 class="mb32">#MAKEITDISRUPTIVE</h3>
					<p>
					"The key is to embrace disruption and change early. Don't react to it decades later. You can't fight innovation." - Ryan Kavanaugh
					</p>
					<div class="col-md-offset-10"><i class="ti-quote-right icon icon-sm mb16"></i></div>
				</div>
			</div>
			
		</div>
	</section>

	<!-- Dokumentasi -->
	<section class="bg-dark pb64" style="background-image: url('/img/bglogin2.png')">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h4 class="uppercase mb16">DOKUMENTASI</h4>
					<h2 class="uppercase bold italic"><i class="ti-instagram">&nbsp;</i>ittoday_ipb</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<div class="lightbox-grid square-thumbs" data-gallery-title="Gallery">
						<ul>
							<li>
								<a href="img/cover1.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed1.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/home12.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed3.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/home14.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed2.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/home17.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed5.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover5.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed6.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover6.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed8.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover7.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed7.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover8.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/feed4.jpg">
									</div>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-sm-offset-3 text-center">
			<a class="btn btn-lg btn-filled mb0" href="https://www.instagram.com/ittoday_ipb" target="_blank">See more on Instagram</a>
		</div>
	
		<div class="nav-container">

		<div class="main-container">					
			<footer class="footer-2">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center mb64 mb-xs-24">
							<a href="#">
								<img alt="Logo" class="image-xs mb16" src="img/logo-light.png">
							</a>
							<p class="lead mb48 mb-xs-16">
								1450 Malvern Rd • Suite 10 2nd Floor<br>
								Glen Iris, Melbourne 3146<br>
								(03) 83726 4782
							</p>
							<ul class="list-inline social-list spread-children">
								<li><a href="#"><i class="icon icon-sm ti-twitter-alt"></i></a></li>
								<li><a href="#"><i class="icon icon-sm ti-facebook"></i></a></li>
								<li><a href="#"><i class="icon icon-sm ti-dribbble"></i></a></li>
								<li><a href="#"><i class="icon icon-sm ti-vimeo-alt"></i></a></li>
							</ul>
						</div>
					</div>
				
					<div class="row fade-half">
						<div class="col-sm-4 text-center-xs">
							<span>© Copyright 2015 Medium Rare</span>
						</div>
					
						<div class="col-sm-4 text-center hidden-xs">
							<span>Website Design &amp; Development</span>
						</div>
					
						<div class="col-sm-4 text-right hidden-xs">
							<span>hello@mrare.co</span>
						</div>
					</div>
				</div>
			</footer>
		</div>	   
    </div>
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
	</section>
	
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/flexslider.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/spectragram.min.js"></script>
	<script src="js/countdown.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/scripts.js"></script>
    </body>
</html>
@endsection

