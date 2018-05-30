
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body style="background:url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		
		<div class="main-container">
		<section class="page-title page-title-4 bg-secondary">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h3 class="uppercase mb0">Admin Page</h3>
		                </div>
		                <div class="col-md-6 text-right">
		                    <ol class="breadcrumb breadcrumb-2">
		                        <li>
		                            <a href="/adminhome">Home</a>
		                        </li>
		                       
		                    </ol>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section><section>
		       
                <section  style="padding: 20px 0;">
		        <div class="container">
		            <div class="row">
					
                    <div class="feature bordered text-center bg-secondary" style="box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2);">
						<h3 class="uppercase mb40 mb-xs-24">Restu</h3>
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
			                    <div class="image-tile outer-title text-center">
			                        <img alt="Pic" src="{{asset($user->ktm_img1)}}">
			                        <div class="title mb16">
			                            <h5 class="uppercase mb0">{{$user->member_one}}</h5>
			                            
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
			                    <div class="image-tile outer-title text-center">
			                        <img alt="Pic" src="{{asset($user->ktm_img2)}}">
			                        <div class="title mb16">
			                            <h5 class="uppercase mb0">{{$user->member_two}}</h5>
			                            
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
			                    <div class="image-tile outer-title text-center">
			                        <img alt="Pic" src="{{asset($user->ktm_img3)}}">
			                        <div class="title mb16">
			                            <h5 class="uppercase mb0">{{$user->member_three}}</h5>
			                            
			                        </div>
			                        
			                    </div>
			                </div>
			                @else
			                NOT UPLOADED<br />
			                @endif
						@endif
		            </div>
		            
		        </div>
		        
                <section>
                <div class="container">
		            <div class="feed-item mb96 mb-xs-48 text-center">
		                <h4>Surat Keterangan Siswa Aktif</h4><br>	                
		                	@if($user->letter !=NULL)
	                		<a href="{{asset($user->letter)}}">Download Berkas Here</a>
		                	@else
		                	NOT UPLOADED
		                	@endif		                
		            </div>
		            
		        </div></section>
		        <div class="container">
		            <div class="feed-item mb96 mb-xs-48 text-center">
		                <h4>Bukti Pembayaran</h4><br>	                
		                <div class="row mb32 mb-xs-16">
		                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
		                    	@if($user->payment!=NULL)
		                        <img alt="Article Image" class="mb32 mb-xs-16" src="{{asset($user->payment)}}">
								@else
								NOT UPLOADED
								@endif        
		                    </div>
		                </div>
		                
		                <div class="row">
                        <a class="btn btn-lg btn-white mb8 mt-xs-24" href='{{ url("admin/verify/{$user->id}") }}'>Konfirmasi Pendaftaran</a>
		                </div>
		            </div>
		            
		        </div></section>
		                    
		                    </div>
		                </div>
		                
		            </div>
		            
		        </div>
		        
		    </section></div>
		
				
		<script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
				