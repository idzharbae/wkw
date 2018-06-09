<!doctype html>

@extends('layouts.navbar3')

@section('content')

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
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
        th, td {
            padding: 15px;
        }
        table {
        width: 100%;
        align: center;
        counter-reset: row-num;
        }
        table tr {
        counter-increment: row-num;
        }
        table tr td:first-child::before {
            content: counter(row-num) ". ";
        }
        </style>
    </head>
    <body style="background:url( {{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">

            <section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="post-snippet mb64">
		                        <div class="post-title">
                                    <h1 class="uppercase mb0" align="center">Admin Panel</h1><br>
                                </div>
                                <div>
                                    <h4 class="inline-block">   Tabel Peserta Lomba</h4><br>
                                </div>
                                <table>
                                    <tr>
                                        <th width="10px">Nomor</th>
                                        <th width="100px">Nama Grup</th>
                                        <th width="100px">Email</th>
                                        <th width="50px">Jenis Lomba</th>
                                        <th width="50px">Status KTM</th>
                                        <th width="50px">Status Surat</th>
                                        <th width="50px">Status Pembayaran</th>
                                    </tr>
                                    @foreach($user as $human )
                                    <tr>
                                        <td></td><td><a style="font-size: 18px; color: blue;" href='{{ url("/antiribetclub/detail/{$human->id}") }}'>{{App\User::find($human->team_id)->name}}</a></td>
                                        <td>{{App\User::find($human->team_id)->email}}</a></td>
                                        <td>{{$human->type}}</td>
                                        <td>@if($human->verify_ktm == 1)<b style="color:green">CONFIRMED</b> @else <b style="color:red">NOT CONFIRMED</b> @endif</td>
                                        <td>@if($human->verify_letter == 1)<b style="color:green">CONFIRMED</b> @else <b style="color:red">NOT CONFIRMED</b> @endif</td>
                                        <td>@if($human->type != 'HackToday')
												@if($human->verify_payment == 1)
												<b style="color:green">CONFIRMED</b>
												@else <b style="color:red">NOT CONFIRMED</b>
												@endif
											@else
											<b style="color:green">FREE</b>
											@endif
										</td>
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
        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>

@endsection