@extends('layouts.navbar2')
@section('content')

<!doctype html>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>
	
		<form method="POST" action='{{ url("/bayar/{$data->team_id}") }}'>
		<div class="main-container">
		<section style="background-image: url('/img/footer.png'); background-attachment: fixed;">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-1 text-right text-left-xs col-sm-5">
							<h1 class="uppercase mb24 bold italic" style="color: white ;">Pem<br>bayar<br>an</h1>
							<h5 class="uppercase italic fade-1-4"></h5>
							<hr class="visible-xs">
						</div>
						<div class="col-md-5 col-sm-7">
							
							<p>Setiap tim harus melengkapi persyaratan administrasi pendaftaran dan pembayaran <b>maksimal tanggal 11 Juli 2018.<br><br></b>Jumlah pembayaran menyesuaikan pada tanggal ketika pembayaran lunas sebagai berikut :
		<br><b>a.	Early Bird 	: 30 Mei - 20 Juni 2018 , sebesar Rp 100.000
		<br>b.	Reguler 	: 21 Juni - 11 Juli 2018 , sebesar Rp 150.000</b><br></p>
        <p>Pembayaran dilakukan melalui transfer ke:</p>
                            <h4 style="color: white ;">AppsToday</h4>
							<p>Nomor Rekening: xxxxxx<br>Atas Nama: Iyang Aneka Wibowo</p>
                            <h4 style="color: white ;">Business IT Case</h4>
							<p>Nomor Rekening: xxxxxx<br>Atas Nama: Leni Angraeni</p>
							<h4 style="color: white ;">HackToday</h4>
							<p><b>Tidak ada biaya pendaftaran yang dibebankan kepada peserta HackToday.</b></p>
							<div class="col-md-8"><input type="file" name="payment" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile4" style="display: none;" />
							<input type="button" class="btn btn-lg btn-white mb8 mt-xs-24" value="UPLOAD BUKTI PEMBAYARAN" onclick="document.getElementById('selectedFile4').click();" /></div>
							<div class="col-md-5"><input class="btn btn-lg mb8 mt-xs-24" type="submit" value="SAVE CHANGES" style="background-color: #7c6bee;"/></div>
						</div>
					</div>
				</div>
			</section>
		</div>
		</form>

		
				
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
							
@endsection