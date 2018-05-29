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
		            <img alt="Background Image" class="background-image" src="img/hack2.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h3 class="uppercase mb0">HACK TODAY</h3>
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
                        HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2018 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta  diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia. Lomba HackToday yang diadakan IT Today 2018 bertujuan agar setiap peserta mampu mengembangkan kemampuannya pada bidang Information Security.
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
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
                            <h4 align="center">26 Mei – 28 Juli 2018</h4>
                            <h4 align="center">Pendaftaran</h4>
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
                            <h4 align="center">4 Agustus 2018</h4>
                            <h4 align="center">Penyisihan Tahap 1</h4>
                        </div>
                        <div class="tab-pane fade" id="tab3primary">
                            <h4 align="center">4 Agustus 2018</h4>
                            <h4 align="center">Submisi Writeup</h4>
                        </div>
                        <div class="tab-pane fade" id="tab4primary">
                            <h4 align="center">31 Agustus 2018</h4>
                            <h4 align="center">Pengumuman Finalis</h4>
                        </div>
                        <div class="tab-pane fade" id="tab5primary">
                            <h4 align="center">9 September 2018</h4>
                            <h4 align="center">Final</h4>
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
                                Rp 1.000.000 + sertifikat + plakat
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h3>1st WINNER</h3>
		                        <p>
                                Rp 7.000.000 + sertifikat + plakat
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h4>2nd WINNER</h4>
		                        <p>
                                Rp 5.000.000 + sertifikat + plakat
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
		                                <h4 class="inline-block mb0">Kapan hacktoday dilaksanakan?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Hacktoday terdiri dari 2 Tahap, Tahap Penyisihan bersifat Remote yaitu via online yang artinya peserta dapat mengerjakan soal dimanapun pada hari.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah hacktoday 2018 dipungut biaya?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tidak, HackToday 2018 gratis. 
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah benar peserta SMA/SMK atau sederajat dapat mengikuti hacktoday 2018?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Betul, namun tidak akan ada perbedaan kesulitan soal atau hal lain. Setiap peserta mendapatkan porsi jumlah dan kesulitan soal yang sama dalam hacktoday 2018.
		                                </p>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah peserta SMA/SMK atau sederajat mendapatkan penghargaan khusus?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Apabila ada peserta sma/smk atau sederajat yang dapat masuk ke dalam 3 tim terbaik pada hacktoday 2018 akan mendapatkan penghargaan khusus yaitu tim sma/smk atau sederajat terbaik dalam hacktoday. Maka tim tersebut akan mendapatkan kejuaraan ganda yaitu tim terbaik sma/smk atau sederajat dan tim juara 1/2/3.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Bagaimana cara mendaftar hacktoday?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Pendaftaran melewati website resmi ITTODAY 2018 yaitu ittoday.web.id
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah persyaratan administrasi peserta dalam hacktoday 2018?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Setiap peserta dalam tim wajib menyertakan surat keterangan mahasiswa aktif dan kartu tanda mahasiswa (KTM) dan untuk sma/smk wajib menyertakan kartu tanda siswa dan surat keterangan siswa dari sekolah asal peserta. Apabila ada peserta dengan administrasi yang tidak lengkap maka peserta tersebut dianggap gugur dan jumlah peserta tim yang diakui hanyalah yang melengkapi persyaratan administrasi.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Seperti apa rundown tahap penyisihan 1?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tahap penyisihan 1 dilaksanakan pada tanggal 4 agustus 2018 dengan 2 sesi yaitu sesi 1 pada jam 09.00-16.00 dengan sistem jeopardy dengan scoreboard yang akan di freeze pada 1 jam sebelum penutupan sesi 1 dan sesi 2 yang akan dilaksanakan pada hari yang sama pada jam 16.00-20.00 yaitu pengumpulan/submisi write up.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Format flag HackToday?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Setiap flag di HackToday berformat HacktToday{\w+}$, 
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apa itu write up?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        write up adalah dokumentasi peserta yang berisi bagaimana peserta tersebut menyelesaikan soal. 
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Seperti apakah format write up?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Write up berbentuk pdf dengan format tiap penyelesaian judul soal,isi soal *optional* ,solusi dan flag yang didapatkan untuk setiap soal lebih baik beserta screenshot. PDF dikirim paling lambat tanggal 4 agustus 2018 pada jam 20.00 kepada kestari.ittoday@gmail.com. Lebih dari itu maka peserta dianggap tidak mengumpulkan write up.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apa yang terjadi apabila peserta tidak mengumpulkan write up?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        write up merupakan sebuah aspek peniliaian untuk memastikan peserta memang menyelesaikan soal tersebut, juga menghindari adanya plagiarisme dalam penyelesaian soal. Apabila peserta tersebut tidak mengumpulkan atau menyertakan write up keseluruhan maka seluruh point yang peserta dapatkan akan hangus. Apabila peserta hanya tidak menyertakan write up untuk soal tertentu maka point untuk soal tersebut dianggap hangus.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah kualitas write up mempengaruhi peniliaian?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        write up akan bergantung terhadap kretifitas peserta dalam menyelesaikan soal. Singkat maupun tidak, tidak akan berpengaruh terhadap penilian asalkan write up memang dapat menyelesaikan soalnya. Apabila write up dinilai tidak menyelesaikan soal ataupun tidak lengkap, maka point peserta untuk soal tersebut dianggap hangus.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah kami atau orang lain dapat mengakses write up peserta hacktoday?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        write up 10 tim terbaik pada tahap penyisihan 1 akan dipublikasikan di facebook page resmi Cyber Security IPB https://www.facebook.com/cysecipb/
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapakah tim yang akan lolos ke final?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tim yang akan lolos ke final berjumlah 10 tim terbaik pada saat penyisihan tahap 1 apabila terdapat tim sma/smk. Apabila tidak ada tim sma/smk dalam 10 tim terbaik maka hanya akan diambil 9 dan diambil 1 tim terbaik sma/smk. Pengumuman akan dilaksanakan pada tanggal 22 Agustus 2018.
		                                </p>
		                            </div>
                                </li>
                                <li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Seperti apakah sistem CTF pada saat final?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Sistem jeopardy.
		                                </p>
		                            </div>
                                </li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Dimanakah final akan dilaksanakan?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        final dilaksanakan pada hari Minggu,9 September 2018 pada pukul 10.00 hingga 16.00 di Fakultas MIPA,Institut Pertanian Bogor, Dramaga, Bogor.
		                                </p>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah peserta mendapatkan akomodasi pada saat final?</h4>
		                            </div>
		                            <div class="content">
		                                <p>
                                        Tidak,namun peserta akan dibantu oleh pj hacktoday untuk dicarikan akomodasi selama berada di IPB.
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
				