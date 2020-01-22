<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url() ?>template/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url() ?>template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url() ?>template/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="Auth/proseslogin">
					<span class="login100-form-title p-b-26">
						<h5>Sistem Informasi Pendaftaran
							Pasien Online
							<br />
							<br />
							Apotik Tri Arga Farma
							<br />
							Kota Sorong
						</h5>
					</span>
					<div class="alert-warning" role="alert">
						<span>
							<center><?php echo $this->session->flashdata('message');?></center>
						</span>
					</div>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Valid">
						<input class="input100" type="text" name="username" id="username">
						<span class="focus-input100" data-placeholder="Username"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="password" name="password" id="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Pasien Baru?
						</span>

						<a class="txt2" href="pendaftaran.php">
							Daftar
							<i class="zmdi zmdi-arrow-right"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>template/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>template/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/js/main.js"></script>

</body>

</html>