
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title></title>
        <link href="{{asset('css/themify-icons')}}.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <style>
        table, td, th {    
            border: 1px solid #ddd;
            text-align: left;
            color: #000000;
            background-color: #fff;
        }

        table {
            border-collapse: collapse;
            align: center;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
        </style>
    </head>
    <body style="background:url( {{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
				
		<div class="nav-container">
		</div>
		
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
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-10 col-sm-offset-1">
		                    <div class="post-snippet mb64">
		                        <div class="post-title">
		                            <h4 class="inline-block">Tabel Peserta Lomba</h4><br>
		                        </div>
                                <table>
                                    <tr>
                                        <th>Nama Grup</th>
                                        <th width="250px">Status</th>
                                        <th width="200px">Konfirmasi</th>
                                    </tr>
                                    @foreach($user as $human )
                                    <tr>
                                        <td><a href='{{ url("/admin/detail/{$human->id}") }}'>{{App\User::find($human->team_id)->name}}</a></td>
                                        <td>@if($human->verify == 1)Confirmed @else Not Confirmed @endif</td>
                                        <td><div class="col-lg-5" style="padding: 0px"><a href='{{ url("/admin/verify/{$human->id}") }}' type="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0; background-color: #7c6bee;">Konfirmasi</a></div></td>
                                    </tr>
                                    @endforeach
                                    </table> 
		                    
		                    </div>
		                </div>
		                
		            </div>
		            
		        </div>
		        
		    </section></div>
		
				
    	<script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/parallax.js">')}}</script>
        <script src="{{asset('js/scripts.js">')}}</script>
    </body>
</html>
				