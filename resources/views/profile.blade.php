@extends('layouts.navbar2')

@section('content')
<<<<<<< HEAD
    <div class="main-container">
		<section class="page-title page-title-1 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/footer.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                	@if($data->type == "AppsToday")
		                		<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconapps.png" style="width: auto; height: 200px;">
		                	@elseif($data->type == "HackToday")
								<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconhack.png" style="width: auto; height: 200px;">
		                	@elseif($data->type == "Business IT Case")
			                	<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconbisnis.png" style="width: auto; height: 200px;">
		                	@endif
		                </div>
		            </div>
		            
		        </div>
=======

    	<div class="main-container">
			<section class="page-title page-title-1 image-bg overlay parallax">
				<div class="background-image-holder">
					<img alt="Background Image" class="background-image" src="img/footer.png">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							@if($data->type == "AppsToday")
								<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconapps.png" style="width: 150px; height: 200px;">
							@elseif($data->type == "HackToday")
								<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconhack.png" style="width: 150px; height: 200px;">
							@elseif($data->type == "Business IT Case")
								<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconbisnis.png" style="width: 150px; height: 200px;">
							@endif
						</div>
					</div>
					
				</div>
>>>>>>> 1aa27096573ced6f6f067b58021453e78bc0fd27

				@if($data->type != 'HackToday')		        
				<ol class="breadcrumb breadcrumb-2">
					<h3> {{$data->type}} </h3>
					<li>
						<a href="#profil">Profile</a>
					</li>
					<li>
						<a href="#berkas">Upload Berkas</a>
					</li>
					<li>
						<a href="#buktibayar">Upload Bukti Pembayaran</a>
					</li>
				</ol>
				@else
				<ol class="breadcrumb breadcrumb-2">
					<h3> {{$data->type}} </h3>
					<li>
						<a href="#profil">Profile</a>
					</li>
					<li>
						<a href="#berkas">Upload Berkas</a>
					</li>
				</ol>
				@endif
			</section>


			<section style="background-color:#26c99e;" id="profil">
		        <div class="container">
		            <div class="row">
					
                    <div class="feature bordered text-center bg-secondary" style="box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2); font-size: 18px">
						<a class="bbtn tn-warning pull-right" href="{{url('/editprofile')}}"  style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i>EDIT PROFILE<a><br>
						<h2 class="uppercase mb40 mb-xs-24">{{App\User::find($data->team_id)->name}}</h2>
						<div class="mb40">
							<h6 class="mb8 uppercase">Members</h6>
							<p style="color:black; !important;">
								@if($data->member_one!=NULL)
								{{$data->member_one}}<br />
								@endif
								@if($data->member_two!=NULL)
								{{$data->member_two}}<br />
								@endif
								@if($data->member_three!=NULL)
								{{$data->member_three}}
								@endif
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">School</h6>
							<p style="color:black !important;">
								{{$data->school}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Province</h6>
							<p style="color:black !important;">
								{{$data->province}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Contact</h6>
							<p style="color:black !important;">
								{{App\User::find($data->team_id)->email}}<br>
								{{$data->phone_num}}<br>
								{{$data->line_id}}
							</p>
						</div>
					</div>
		            </div>
		        </div>
			</section>
			
			<section style="background-color: #6290e0;" id="berkas">
		        <form method="POST" action='{{ url("/berkas") }}' enctype="multipart/form-data" >
		        	{{csrf_field()}}

		    	<input type="hidden" name="id" value="{{$data->team_id}}">
		        <div class="container">

                    <h3 class="uppercase mb40 mb-xs-24 text-center" style="color:white;">Upload berkas</h3>
		            <div class="row">
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
								@if($data->member_one!=NULL)
									@if($data->ktm_img1 != NULL)
										<img alt="Pic" id="preview1" src="{{asset($data->ktm_img1)}}" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_one}} </b>
											</h5>
										</div>
										<input type="file" name="ktm_img1" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile1" style="display: none;" onchange="showname1();" />
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar"  onclick="document.getElementById('selectedFile1').click();" />
										<div id="filename-1"></div>										
									@else
										<img alt="Pic" id="preview1" src="img/team-1.jpg" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_one}} </b>
											</h5>
										</div>
										<input type="file" name="ktm_img1" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile1" style="display: none;" onchange="showname1();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar"  onclick="document.getElementById('selectedFile1').click();" />
										<div id="filename-1"></div>
									@endif
								@else
									<img alt="Pic" id="preview1" src="img/restricted.ico" style="width: 577px; height: 224px; object-fit:cover;">
									<h5 class="uppercase mb0">
										<b style="color: red"> Member 1 Not Found </b>
									</h5>
								@endif
                            </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
								@if($data->member_two!=NULL)
									@if($data->ktm_img2 != NULL)
										<img alt="Pic" id="preview2" src="{{asset($data->ktm_img2)}}" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_two}} </b>
											</h5>
										</div>
										<input type="file" name="ktm_img2" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile2" style="display: none;" onchange="showname2();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile2').click();" />
										<div id="filename-2"></div>
									@else
										<img alt="Pic" id="preview2" src="img/team-2.jpg" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_two}} </b>
											</h5>
										</div>
										<input type="file" name="ktm_img2" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile2" style="display: none;" onchange="showname2();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile2').click();" />
										<div id="filename-2"></div>
									@endif
								@else
									<img alt="Pic" id="preview2" src="img/restricted.ico" style="width: 577px; height: 224px; object-fit:cover;">
									<h5 class="uppercase mb0">
										<b style="color: red"> Member 2 Not Found </b>
									</h5>
								@endif
                            </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
								@if($data->member_three!=NULL)
									@if($data->ktm_img3 != NULL)
										<img alt="Pic" id="preview3" src="{{asset($data->ktm_img3)}}" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_three}} </b>
											</h5>
										</div>
										<input type="file" name="ktm_img3" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile3" style="display: none;" onchange="showname3();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile3').click();" />
										<div id="filename-3"></div>
									@else
										<img alt="Pic" id="preview3" src="img/team-3.jpg" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_three}} </b>
											</h5>
										</div>
										<input type="file" name="ktm_img3" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile3" style="display: none;" onchange="showname3();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile3').click();" />
										<div id="filename-3"></div>
									@endif
								@else
									<img alt="Pic" id="preview3" src="img/restricted.ico" style="width: 577px; height: 224px; object-fit:cover;">
									<h5 class="uppercase mb0">
										<b style="color: red"> Member 3 Not Found </b>
									</h5>
								@endif
                            </div>
		                </div>
					</div>
					<p align="center">Foto/hasil scan KTM/Kartu Pelajar diupload dalam format .jpg,.jpeg, atau .png dengan ukuran file < 2 MB</p>
					
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                	<input type="file" name="letter" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile4" style="display: none;" onchange="showname4();"/>
							<input type="button" style="white-space: normal; height: auto;"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload Surat Keterangan Mahasiswa/Siswa Aktif" onclick="document.getElementById('selectedFile4').click();" />
							<!-- <a class="btn btn-lg btn-white mb8 mt-xs-24" href="#">Upload Surat Keterangan Mahasiswa/Siswa Aktif</a> -->
							<div id="filename-4"></div>
							<br><p>Surat keterangan semua anggota tim disatukan menjadi satu file dalam format .pdf dengan ukuran file tidak lebih dari 2 MB</p>
                            
                            @if($data->letter == NULL)
                            <h5 class="uppercase mb0" style="color: #a3031b; font-weight: bold">Surat Keterangan Mahasiswa Aktif Belum Diupload</h5>                       
                            @else
                            <h5 class="uppercase mb0" style="color: #1a8e02; font-weight: bold">Surat Keterangan Mahasiswa Aktif Berhasil Diupload</h5>                       
                            @endif
							<br>
							<input class="btn btn-lg btn-white mb8 mt-xs-24" type="submit" value="SIMPAN PERUBAHAN" >
                        </div>
		            </div>
		        </div>
		        </form>
		        </section>
				@if($data->type != 'HackToday')
					@if($data->payment == NULL)
					<section style="background-color: #ff3333" id="buktibayar">
					@else
						@if($data->verify == 1)
						<section style="background-color: #26c99e" id="buktibayar">
						@else
						<section style="background-color: #fff83f" id="buktibayar">
						@endif
					@endif
				@endif
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
							@if($data->type != 'HackToday')
								@if($data->payment == NULL)
								<h3 class="uppercase mb40 mb-xs-24" style="color:white;">BUKTI PEMBAYARAN BELUM DIUPLOAD</h3>
								<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{route('payment')}}">Upload Bukti Pembayaran</a>
								@else
									@if($data->verify == 1)
									<h3 class="uppercase mb40 mb-xs-24" style="color:white;">PEMBAYARAN BERHASIL DIVERIFIKASI</h3>
									@else
									<h3 class="uppercase mb40 mb-xs-24" style="color:black;">MENUNGGU VERIFIKASI PEMBAYARAN</h3>
									<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{route('payment')}}">Update Bukti Pembayaran</a>
									@endif
								@endif
							@endif
		                </div>
		            </div>
		            
		        </div>

			</div>
		    </section></div>
		
				
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
		<script src="js/scripts.js"></script>						
@endsection
