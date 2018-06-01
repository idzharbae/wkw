
<!doctype html>

@extends('layouts.navbar3')

@section('content')

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body style="background:url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		
		<div class="main-container">

            <section  style="padding: 20px 0;">
		        <div class="container">
		            <div class="row">
					<h1 align="center"> ADMIN PANEL </h1>
                    <div class="feature bordered text-center bg-secondary" style="background-color: white; box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2);" align="center">
						<h4 class="uppercase mb40 mb-xs-24">Member Details</h4>
						<div class="mb40">
							<h6 class="mb8 uppercase">Members</h6>
							<p style="color:black !important;">
								@if($user->member_one !=NULL)
								{{$user->member_one}}<br />
								@else
								<b style="color: red">Member 1 Not Found</b>
								@endif
								@if($user->member_two !=NULL)
								{{$user->member_two}}
								<br />
								@else
								<b style="color: red">Member 2 Not Found</b>
								@endif
								@if($user->member_three !=NULL)
								{{$user->member_three}}
								@else
								<b style="color: red">Member 3 Not Found</b>
								@endif
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">School</h6>
							<p style="color:black !important;">
								{{$user->school}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Province</h6>
							<p style="color:black !important;">
								{{$user->province}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Contact</h6>
							<p style="color:black !important;">
								{{App\User::find($user->team_id)->email}}<br>
								{{$user->phone_num}}<br>
								{{$user->line_id}}
							</p>
						</div>
					</div>
		            </div>
		        </div>
			</section>
			
			<section style="padding-top: 0px; padding-bottom: 0px">
		        <div class="container">
		            <div class="row">
						@if($user->member_one !=NULL)
							@if($user->ktm_img1!=NULL)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h3 class="uppercase mb0">{{$user->member_one}}</h3>  
			                        <img alt="Pic" src="{{asset($user->ktm_img1)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto;">
			                        <div class="title mb16"><br>
										<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->ktm_img1)}}">Lihat KTM</a>
			                        </div>
			                        
			                    </div>
			                </div>
			                @else
							<h3 align="center">
				                KTM MEMBER 1 NOT UPLOADED<br>
							</h3>
							@endif
						@else
						<h3 align="center">
							MEMBER 1 NOT FOUND<br>
						</h3>
						@endif
						@if($user->member_two !=NULL)
							@if($user->ktm_img2)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h3 class="uppercase mb0">{{$user->member_two}}</h3>
			                        <img alt="Pic" src="{{asset($user->ktm_img2)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16"><br>
										<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->ktm_img2)}}">Lihat KTM</a>
			                        </div>
			                    </div>
			                </div>
			                @else
							<h3 align="center">
				                KTM MEMBER 2 NOT UPLOADED<br>
							</h3>
							@endif
						@else
						<h3 align="center">
							MEMBER 2 NOT FOUND<br>
						</h3>
						@endif
						@if($user->member_three !=NULL)
							@if($user->ktm_img3 != NULL)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h3 class="uppercase mb0">{{$user->member_three}}</h3>	
			                        <img alt="Pic" src="{{asset($user->ktm_img3)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16"><br>
										<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->ktm_img3)}}">Lihat KTM</a>	                            
			                        </div>
			                    </div>
			                </div>
			                @else
							<h3 align="center">
				                KTM MEMBER 3 NOT UPLOADED<br>
							</h3>
			                @endif
						@else
							<h3 align="center">
				               MEMBER 3 NOT FOUND<br>
							</h3>
						@endif
		            </div>
		        </div>
			</section>
			<section style="padding-top: 0px; padding-bottom: 0px">
				<div class="container">
					<div class="feed-item mb96 mb-xs-48 text-center" align="center">
						<h4 align="center">Surat Keterangan Siswa Aktif</h4>	                
							@if($user->letter !=NULL)
								<h4 align="center" style="color: green; font-weight: bold">
									SURAT KETERANGAN TELAH DIUPLOAD
								</h4>
								<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->letter)}}">Download Surat Keterangan</a>
							@else
								<h4 align="center" style="color: red; font-weight: bold">
									SURAT KETERANGAN BELUM DIUPLOAD
								</h4>
							@endif		                
					</div>
				</div>
			</section>
			<section style="padding-top: 0px; padding-bottom: 0px">	
				<div class="container">
					<div class="feed-item mb96 mb-xs-48 text-center">
						<h4 align="center">Bukti Pembayaran</h4>                
						<div class="row mb32 mb-xs-16">
							<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" align="center">
								@if($user->payment!=NULL)
								<img alt="Article Image" class="mb32 mb-xs-16" src="{{asset($user->payment)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
								<br><a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->payment)}}">Lihat Bukti Pembayaran</a>
								@else
								NOT UPLOADED
								@endif        
							</div>
						</div>
						<br>
						<div class="row" align="center">
						<a class="btn btn-lg btn-white mb8 mt-xs-24 col-md-10 col-md-offset-1" href='{{ url("admin/verify/{$user->id}") }}'>Konfirmasi Pendaftaran</a>
						</div>
					</div>
				</div>
			</section>
		                    
					</div>
				</div>
			</div>
		</div>
	</div>
		
				
		<script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>

@endsection