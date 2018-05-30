@extends('layouts.navbar2')

@section('content')
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
			</section>
			
			<section style="background-color:#26c99e;" id="profil">
		        <div class="container">
		            <div class="row">
					
                    <div class="feature bordered text-center bg-secondary" style="box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2);">
						<h3 class="uppercase mb40 mb-xs-24">{{App\User::find($data->team_id)->name}}</h3>
						<div class="mb40">
							<h6 class="mb8 uppercase">Members</h6>
							<p style="color:black !important;">
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
		                        @if($data->ktm_img1 != NULL)
		                        <img alt="Pic" id="preview1" src="{{asset($data->ktm_img1)}}" style="width: 577px; height: 224px; object-fit:cover;">
		                        @else
		                        <img alt="Pic" id="preview1" src="img/team-1.jpg" style="width: 577px; height: 224px; object-fit:cover;">
		                        @endif
		                        <div class="title mb16">
		                            <h5 class="uppercase mb0">@if($data->member_one!=NULL){{$data->member_one}}@else NONE @endif</h5>
		                        </div>
		                        <input type="file" name="ktm_img1" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile1" style="display: none;" />
								<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile1').click();" />
		                        <p>Foto/hasil scan KTM/Kartu Pelajar diupload dalam format .jpg,.jpeg, atau .png dengan ukuran file tidak lebih dari 2 MB</p>
                            </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
		                        @if($data->ktm_img2 != NULL)
		                        <img alt="Pic" id="preview2" src="{{asset($data->ktm_img2)}}" style="width: 577px; height: 224px; object-fit:cover;">
		                        @else
		                        <img alt="Pic" id="preview2" src="img/team-2.jpg" style="width: 577px; height: 224px; object-fit:cover;">
		                        @endif<div class="title mb16">
		                            <h5 class="uppercase mb0">@if($data->member_two!=NULL){{$data->member_two}}@else NONE @endif</h5>  
		                        </div>
		                        <input type="file" name="ktm_img2" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile2" style="display: none;" />
								<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile2').click();" />
		                        <p>Foto/hasil scan KTM/Kartu Pelajar diupload dalam format .jpg,.jpeg, atau .png dengan ukuran file tidak lebih dari 2 MB</p>                            
                            </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
		                        @if($data->ktm_img3 != NULL)
		                        <img alt="Pic" id="preview3" src="{{asset($data->ktm_img3)}}" style="width: 577px; height: 224px; object-fit:cover;">
		                        @else
		                        <img alt="Pic" id="preview3" src="img/team-3.jpg" style="width: 577px; height: 224px; object-fit:cover;">
		                        @endif
		                        <div class="title mb16">
		                            <h5 class="uppercase mb0">@if($data->member_three!=NULL){{$data->member_three}}@else NONE @endif</h5>
		                        </div>
		                        <input type="file" name="ktm_img3" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile3" style="display: none;" />
								<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile3').click();" />
		                        <!-- <a class="btn btn-lg btn-white mb8 mt-xs-24" href="#">Upload KTM/Kartu Pelajar</a> -->
                                <p>Foto/hasil scan KTM/Kartu Pelajar diupload dalam format .jpg,.jpeg, atau .png dengan ukuran file tidak lebih dari 2 MB</p>
                            </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                	<input type="file" name="letter" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile4" style="display: none;" />
							<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload Surat Keterangan Mahasiswa/Siswa Aktif" onclick="document.getElementById('selectedFile4').click();" />
		                        
		                    <!-- <a class="btn btn-lg btn-white mb8 mt-xs-24" href="#">Upload Surat Keterangan Mahasiswa/Siswa Aktif</a> -->
                            <br><p>Surat keterangan semua anggota tim disatukan menjadi satu file dalam format .pdf dengan ukuran file tidak lebih dari 2 MB</p>
                            
                            @if($data->letter == NULL)
                            <h5 class="uppercase mb0">Surat <b>Belum </b> Diupload</h5>                       
                            @else
                            <h5 class="uppercase mb0">Surat Telah Diupload</h5>                       
                            @endif
							<br>
							<input class="btn btn-lg btn-white mb8 mt-xs-24" type="submit" value="SAVE CHANGES" style="background-color: #7c6bee;">
                        </div>
		            </div>
		        </div>
		        </form>
		        </section>
		        @if($data->payment == NULL)
		        <section style="background-color: #ff3333" id="buktibayar">
		        @else
		        	@if($data->verify == 1)
		        	<section style="background-color: #26c99e" id="buktibayar">
		        	@else
					<section style="background-color: #fff83f" id="buktibayar">
		        	@endif
		        @endif
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    @if($data->payment == NULL)
                            <h3 class="uppercase mb40 mb-xs-24" style="color:white;">BUKTI PEMBAYARAN BELUM DIUPLOAD</h3>
                            @else
                            <h3 class="uppercase mb40 mb-xs-24" style="color:white;">BUKTI PEMBAYARAN TELAH DIUPLOAD</h3>
                            @endif
		                    <a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{route('payment')}}">Upload Bukti Pembayaran</a>
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
