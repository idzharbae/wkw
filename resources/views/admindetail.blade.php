
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body style="background:url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		
		<div class="main-container">
		<section class="page-title page-title-4 bg-secondary">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h1 align="center" class="uppercase mb0">Admin Page</h1>
		                </div>
		                <div class="col-md-6 text-right" align="center">
							<a class="btn btn-lg btn-white mb8 mt-xs-24" href="/admin/home">Home</a>      
		                </div>
		            </div>
		        </div>
		        
		    </section><section>
		       
                <section  style="padding: 20px 0;">
		        <div class="container">
		            <div class="row">
					
                    <div class="feature bordered text-center bg-secondary" style="background-color: white; box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2);" align="center">
						<h3 class="uppercase mb40 mb-xs-24">Member Details</h3>
						<div class="mb40">
							<h6 class="mb8 uppercase">Members</h6>
							<p style="color:black !important;">
								@if($user->member_one !=NULL)
								{{$user->member_one}}<br />
								@endif
								@if($user->member_two !=NULL)
								{{$user->member_two}}
								<br />
								@endif
								@if($user->member_three !=NULL)
								{{$user->member_three}}
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
			
			<section>
		        <div class="container">
		            <div class="row">
						@if($user->member_one !=NULL)
							@if($user->ktm_img1!=NULL)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h3 class="uppercase mb0">{{$user->member_one}}</h3>  
			                        <img alt="Pic" src="{{asset($user->ktm_img1)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16">
										<a href="{{asset($user->ktm_img1)}}">Lihat KTM</a>
			                        </div>
			                        
			                    </div>
			                </div>
			                @else
			                NOT UPLOADED<br />
			                @endif
						@endif
						@if($user->member_two !=NULL)
							@if($user->ktm_img2)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h3 class="uppercase mb0">{{$user->member_two}}</h3>
			                        <img alt="Pic" src="{{asset($user->ktm_img2)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16">
										<a href="{{asset($user->ktm_img2)}}">Lihat KTM</a>
			                        </div>
			                    </div>
			                </div>
			                @else
			                NOT UPLOADED<br />
			                @endif
						@endif
						@if($user->member_three !=NULL)
							@if($user->ktm_img3 != NULL)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h3 class="uppercase mb0">{{$user->member_three}}</h3>	
			                        <img alt="Pic" src="{{asset($user->ktm_img3)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16">
										<a href="{{asset($user->ktm_img3)}}">Lihat KTM</a>	                            
			                        </div>
			                    </div>
			                </div>
			                @else
			                NOT UPLOADED<br />
			                @endif
						@endif
		            </div>
		        </div><br>
                <section>
					<div class="container">
						<div class="feed-item mb96 mb-xs-48 text-center" align="center">
							<h4 align="center">Surat Keterangan Siswa Aktif</h4><br>	                
								@if($user->letter !=NULL)
								<a target="_blank" href="{{asset($user->letter)}}">Download Surat Keterangan</a>
								@else
								NOT UPLOADED
								@endif		                
						</div>
					</div><br>
				</section>
					<div class="container">
						<div class="feed-item mb96 mb-xs-48 text-center">
							<h4 align="center">Bukti Pembayaran</h4>                
							<div class="row mb32 mb-xs-16">
								<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" align="center">
									@if($user->payment!=NULL)
									<img alt="Article Image" class="mb32 mb-xs-16" src="{{asset($user->payment)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
									<a href="{{asset($user->payment)}}">Lihat Bukti Pembayaran</a>
									@else
									NOT UPLOADED
									@endif        
								</div>
							</div>
							<br>
							<div class="row" align="center">
							<a class="btn btn-lg btn-white mb8 mt-xs-24" href='{{ url("admin/verify/{$user->id}") }}'>Konfirmasi Pendaftaran</a>
							</div><br>
						</div>
					</div>
				</section>
		                    
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
		
				
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				