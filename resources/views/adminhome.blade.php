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
		                <div class="col-sm-10 col-sm-offset-1">
		                    <div class="post-snippet mb64">
		                        <div class="post-title">
                                    <h3 class="uppercase mb0" align="center">Admin Page</h3>
                                    <div class="col-md-6 text-right" align="center">
                                        <ol class="breadcrumb breadcrumb-2">
                                            <li>
                                                <a href="/adminhome">Home</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="inline-block">Tabel Peserta Lomba</h4><br>
                                </div>
                                <table>
                                    <tr>
                                        <th width="20px">Nomor</th>
                                        <th width="150px">Nama Grup</th>
                                        <th width="100px">Status</th>
                                        <th width="100px">Konfirmasi</th>
                                    </tr>
                                    @foreach($user as $human )
                                    <tr>
                                        <td></td><td><a href='{{ url("/admin/detail/{$human->id}") }}'>{{App\User::find($human->team_id)->name}}</a></td>
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
        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>

@endsection