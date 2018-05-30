<!doctype html>

@extends('layouts.navbar3')

@section('content')

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
        width: 50%;
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
            
    <div class="nav-container">
    
    <div class="main-container">
        <h1 align="center" class="uppercase mb0">Admin Page</h1>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="post-snippet mb64">
                            <div class="post-title">
                                <h3 class="inline-block" align="center">Tabel Peserta Lomba</h3><br>
                            </div>
                            <table align="center">
                                <tr>
                                    <th width="1px">Nomor</th>
                                    <th width="100px">Nama Grup</th>
                                    <th width="50px">Status</th>
                                    <th width="50px">Konfirmasi</th>
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
        </section>
    </div>
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

@endsection