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
    <body style="background: url('/img/footer.png') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">	
		<div class="nav-container">
		</div>
		
		<div class="main-container">
		<section class="page-title page-title-4 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/apps.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h3 class="uppercase mb0">APPS TODAY</h3>
		                </div>
		                <div class="col-md-6 text-right">
		                    <ol class="breadcrumb breadcrumb-2">
                                <li>
		                            <a href="#rulebook">Rulebook</a>
		                        </li>
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

        <section id="rulebook" class="image-edge" style="padding-bottom: 0px">
            <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                <img alt="Screenshot" class="mb-xs-24" src="img/phone2.png">
            </div>
            <div class="container">
                <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
                    <!-- <h1 class="large mb40 mb-xs-16">Sleek, Smart and Modern.</h1> -->
                    <div class="feature bordered text-center">
                        <p class="lead mb40" style="color: #282825;">
                        AppsToday merupakan salah satu cabang kompetisi IT Today 2018 pada bidang inovasi aplikasi. Lomba ini dibuat sebagai wadah bagi peserta yang akan menjadi generasi developer baru yang kreatif dan inovatif untuk memajukan daya saing Indonesia di bidang teknologi informasi.
                        </p>
                        <a class="btn btn-lg btn-white mb8 mt-xs-24" target="_blank" href="https://drive.google.com/a/apps.ipb.ac.id/uc?authuser=0&id=1o1vxfQcdhxorBuDZRMBvc9qKYI08wvQq&export=download">DOWNLOAD RULEBOOK</a>
                    </div>
                </div>
            </div>
            
        </section>
            
        <section id="timeline" style="padding-bottom: 0px">
            <div class="col-md-4 col-md-offset-4 feature bordered text-center">
                <h3 align="center">TIMELINE</h3>
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" style="color: black;" data-toggle="tab">1</a></li>
                            <li><a href="#tab2primary" style="color: black;" data-toggle="tab">2</a></li>
                            <li><a href="#tab3primary" style="color: black;" data-toggle="tab">3</a></li>
                            <li><a href="#tab4primary" style="color: black;" data-toggle="tab">4</a></li>
                            <li><a href="#tab5primary" style="color: black;" data-toggle="tab">5</a></li>
                            <li><a href="#tab6primary" style="color: black;" data-toggle="tab">6</a></li>
                            <li><a href="#tab7primary" style="color: black;" data-toggle="tab">7</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
                            <h4 align="center">26 Mei – 11 Juli 2018</h4>
                            <h4 align="center">Pendaftaran</h4>
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
                            <h4 align="center">26 Mei – 18 Juli 2018</h4>
                            <h4 align="center">Submisi Tahap 1</h4>
                        </div>
                        <div class="tab-pane fade" id="tab3primary">
                            <h4 align="center">27 Juli 2018</h4>
                            <h4 align="center">Pengumuman Lolos Tahap 2</h4>
                        </div>
                        <div class="tab-pane fade" id="tab4primary">
                            <h4 align="center">28 Juli – 13 Agustus 2018</h4>
                            <h4 align="center">Submisi Tahap 2</h4>
                        </div>
                        <div class="tab-pane fade" id="tab5primary">
                            <h4 align="center">31 Agustus 2018</h4>
                            <h4 align="center">Pengumuman Finalis</h4>
                        </div>
                        <div class="tab-pane fade" id="tab6primary">
                            <h4 align="center">15 September 2018</h4>
                            <h4 align="center">Final</h4>
                        </div>
                        <div class="tab-pane fade" id="tab7primary">
                            <h4 align="center">16 September 2018</h4>
                            <h4 align="center">Pameran Karya Finalis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="rewards" style="padding-bottom: 0px">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h4>3rd WINNER</h4>
		                        <p>
                                Rp 1.500.000 + SERTIFIKAT + PLAKAT
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h3>1st WINNER</h3>
		                        <p>
                                Rp 5.000.000 + SERTIFIKAT + PLAKAT
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h4>2nd WINNER</h4>
		                        <p>
                                Rp 3.000.000 + SERTIFIKAT + PLAKAT
		                        </p>
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>
            
            <!-- <section id="testimonies" style="padding-bottom: 0px">
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
		    </section> -->
            
            <section id="faq">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 col-md-offset-3 text-center feature bordered text-center">
		                    <h3 class="mb16">FREQUENTLY ASKED QUESTIONS</h3>
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="col-sm-10 col-sm-offset-1">
		                    <ul class="accordion accordion-2 one-open">
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apa itu AppsToday?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        yaitu salah satu rangkaian lomba IT TODAY yang merujuk pada pembuatan app yang kreatif dan inovatif dalam memecahkan berbagai permasalahan yang mendasar dalam kegiatan sehari-hari.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Bagaimana susunan rangkaian lomba AppsToday?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tahap pertama registrasi dan menyelesaikan submisi 1. Tahap kedua membuat video dan prototype app. Tahap final yaitu presentasi karya kepada juri maupun pengunjung melalui stand.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah diperbolehkan menggunakan almamater saat tahap final?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tidak karena tidak diperkenankan menggunakan atribut universitas seperti yang dijelaskan dalam rulebook agar penilaian berlangsung secara objektif.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah peserta harus berasal dari satu institusi yang sama?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Ya, anggota tim harus berasal dari universitas/institusi yang sama tapi boleh lintas jurusan Berapa anggota per tim yang diperbolehkan. Tim terdiri dari 1-3 anggota.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Siapa saja yang boleh mengikuti kompetisi ini?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Mahasiswa S1/D3 seluruh indonesia
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Kapan periode pendaftaran dibuka?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Untuk tahap pendaftaran Early Bird akan dibuka pada tanggal 30 Mei-20 Juni 2018, sedangkan thap pendaftaran reguler dibuka pada tanggal 21 Juni-11 Juli 2018.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapa biaya pendaftaran untuk mengikuti kompeitisi business IT case?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Untuk tahap pendaftaran Early Bird, biaya pendaftaran sebesar Rp 100.000, sedangkan untuk tahap pendaftaran reguler biaya sebesar Rp 150.000.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Bagaimana dengan format pengumpulan?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Untuk pengumpulan BMC dan proposal Business Plan, dikumpulkan dalam format pdf. 
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapa banyak tim yang lolos ke tahap final?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tim yang lolos tahap final sebanyak 5 tim.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapa tim yang lolos ke tahap dua?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tim yang lolos tahap dua sebanyak 15 tim.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah ada ketentuan penggunaan bahasa?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                            Tidak ada, gunakan bahasa yang mudah dimengerti oleh orang lain.
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
				