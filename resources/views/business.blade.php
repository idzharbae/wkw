@extends('layouts.navbar2')

<!doctype html>
<html lang="en">
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
    
        <link rel="stylesheet" type="text/css" href="css/timeline.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
    </head>
    <body style="background:url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">	
		<div class="nav-container">
		</div>
		
		<div class="main-container">
		<section class="page-title page-title-4 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/bisnis.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h3 class="uppercase mb0">BUSINESS IT CASE</h3>
		                </div>
		                <div class="col-md-6 text-right">
		                    <ol class="breadcrumb breadcrumb-2">
		                        <li>
		                            <a href="#timeline">Timeline</a>
		                        </li>
		                        <li>
		                            <a href="#rewards">Rewards</a>
		                        </li>
		                        <li>
		                            <a href="#testimonies">Testimonies</a>
		                        </li>
		                        <li>
		                            <a href="#faq">FAQ</a>
		                        </li>
		                    </ol>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>
            
        <section id="timeline">
            <div class="col-md-4 col-md-offset-4">
                <h3 align="center">Timeline</h3>
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">1</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">2</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">3</a></li>
                            <li><a href="#tab4primary" data-toggle="tab">4</a></li>
                            <li><a href="#tab5primary" data-toggle="tab">5</a></li>
                            <li><a href="#tab6primary" data-toggle="tab">6</a></li>
                            <li><a href="#tab7primary" data-toggle="tab">7</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
                            <p align="center">26 Mei – 11 Juli 2018</p>
                            <p align="center">Pendaftaran</p>
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
                            <p align="center">26 Mei – 18 Juli 2018</p>
                            <p align="center">Submisi Tahap 1</p>
                        </div>
                        <div class="tab-pane fade" id="tab3primary">
                            <p align="center">27 Juli 2018</p>
                                <p align="center">Pengumuman Peserta Tahap 2</p>
                        </div>
                        <div class="tab-pane fade" id="tab4primary">
                            <p align="center">28 Juli – 13 Agustus 2018</p>
                            <p align="center">Submisi Tahap 2</p>
                        </div>
                        <div class="tab-pane fade" id="tab5primary">
                            <p align="center">31 Agustus 2018</p>
                            <p align="center">Pengumuman Finalis</p>
                        </div>
                        <div class="tab-pane fade" id="tab6primary">
                            <p align="center">15 September 2018</p>
                            <p align="center">Final</p>
                        </div>
                        <div class="tab-pane fade" id="tab7primary">
                            <p align="center">16 September 2018</p>
                            <p align="center">Pameran Karya Finalis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="rewards">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="ti-gallery icon fade-3-4 inline-block mb16"></i>
		                        <h4>JUARA 3</h4>
		                        <p>
		                            We've built a buttery smooth parallax scrolling experience with a heavy focus on performance. Extensively tested across a range of browser and mouse types.
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="ti-package icon fade-3-4 inline-block mb16"></i>
		                        <h4>JUARA 1</h4>
		                        <p>
		                            10 Fresh and unique concepts included out of the box. From portfolio to property showcase, Foundry's adaptable look is perfect for your next project.
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="ti-layers icon fade-3-4 inline-block mb16"></i>
		                        <h4>JUARA 2</h4>
		                        <p>
		                            With a plethora of purpose-built content blocks, colors and fonts, Foundry presents a mind-boggling number of combinations. Test drive the builder now!
		                        </p>
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>
            
            <section id="testimonies">
		        <div class="container">
		            <div class="row mb64 mb-xs-24">
		                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
		                    <h3>TESTIMONIES</h3>
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="col-sm-4 text-center">
		                    <div class="feature boxed cast-shadow-light"> 
		                        <img alt="Pic" class="image-small inline-block mb24" src="img/avatar1.png">
		                        <h4>"Polished, Incredible!"</h4>
		                        <p>
		                            It's clear to see just how seriously these guys take design. I've never come across a template with the level of polish as this!
		                        </p>
		                        <span>
		                            <strong>Anne Potter</strong> - via Envato</span>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature boxed cast-shadow-light">
		                        <img alt="Pic" class="image-small inline-block mb24" src="img/avatar2.png">
		                        <h4>"Customer For Life"</h4>
		                        <p>
		                            I love the ease-of-use the builder provides - I can quickly test different combinations and experiment with font and color combinations to find that sweet spot.
		                        </p>
		                        <span>
		                            <strong>Jake Sims</strong> - via Twitter</span>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature boxed cast-shadow-light">
		                        <img alt="Pic" class="image-small inline-block mb24" src="img/avatar3.png">
		                        <h4>"Almost too easy!"</h4>
		                        <p>
		                            As a seasoned template user, I really appreciate the consistent styling for all common tags, it makes customising the sections that much easier.
		                        </p>
		                        <span>
		                            <strong>Larry Smith</strong> - via Envato</span>
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>
            
            <section id="faq">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="mb16">FREQUENTLY ASKED QUESTIONS</h3>
		                    <p class="lead mb64">
		                        Holla @mrareweb if you've got more questions and we'll do our best to answer.
		                    </p>
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="col-sm-10 col-sm-offset-1">
		                    <ul class="accordion accordion-2 one-open">
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Is Foundry fully responsive?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
		                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Where can I purchase this template?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
		                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Do I need to be a pro to use this?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
		                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Is it ok if I buy 400 copies?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
		                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                                </p>
		                            </div>
		                        </li>
		                    </ul>
		                    
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
				