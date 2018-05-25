<!doctype html>

@extends('layouts.navbar')

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
						<div class="countdown mb40" data-date="2018/05/26"></div>
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
					

	<!-- Dokumentasi -->
	<section class="bg-dark pb64">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h4 class="uppercase mb16">DOKUMENTASI</h4>
					<h2 class="uppercase bold italic"><i class="ti-instagram">&nbsp;</i>ittoday_ipb</h2>
					<p class="lead mb64">
						pokoknya ini dokum it today taun2 lalu.
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<div class="lightbox-grid square-thumbs" data-gallery-title="Gallery">
						<ul>
							<li>
								<a href="img/cover1.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/cover1.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/home12.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/home12.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/home14.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/home14.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/home17.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/home17.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover5.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/cover5.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover6.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/cover6.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover7.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/cover7.jpg">
									</div>
								</a>
							</li>
							<li>
								<a href="img/cover8.jpg" data-lightbox="true">
									<div class="background-image-holder">
										<img alt="image" class="background-image" src="img/cover8.jpg">
									</div>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
			
		</div>

		<div class="container">
			<div class="row mb64 mb-xs-32">
				<div class="col-sm-6 col-sm-offset-3 text-center">
					<div class="col-sm-6 col-sm-offset-3 text-center">
						<a class="btn btn-lg btn-filled mb0" href="https://www.instagram.com/ittoday_ipb" target="_blank">See more on Instagram</a>
					</div>
				</div>
			</div>
		</div>

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

