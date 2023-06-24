<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Siswa - Aplikasi Pembayaran SPP.</title>
	<link href="css/style.css" rel="stylesheet">
	<style type="text/css">
		a {
			text-decoration: none;
		}
		a:hover{
			text-decoration: none;
			font-style: italic;
			zoom: 90%;
			font-weight: bold;
			cursor: progress;
		}
		body {
			background-image: url("img/5.png");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
<div class="container mt-5">
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<h4 class="text-center" style="color: white;">LOGIN SISWA</h4>
			<div style="opacity: 0.9;" class="card">
				<div class="card-header">
					<img src="logo-spp.png" width="100%">
				</div>
				<div class="card-body">
					<form action="proses-login-siswa.php" method="post">
						<div class="form-group mb-2">
							<label>NISN</label>
							<input type="number" name="nisn" class="form-control" placeholder="Masukan NISN anda.." required>
						</div>
						<div class="form-group mb-2">
							<label>NIS</label>
							<input type="number" name="nis" class="form-control" placeholder="Masukan NISN anda.." required>
						</div>
						<br>
						<div class="form-group mb-2">
							<button type="submit" class="btn btn-primary"> LOGIN </button>
						</div>
						<a href="login2.php"> Login Sebagai Administrator / Petugas </a>
						<br>
						<br>
						<a href="index.php"> Kembali Ke Halaman Utama </a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>


</body>
</html>