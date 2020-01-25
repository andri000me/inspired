<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Pendaftaran</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= base_url() ?>template/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>template/css/style.css">
</head>


<body>

	<div class="wrapper" style="background-image: url('<?= base_url() ?>images/1.jpg');">
		<div class="inner">
			<div class="image-holder">
				<img src="<?= base_url() ?>images/1.jpg" alt="">
			</div>
			<form action="<?= base_url() ?>pendaftaran/store" method="post">
				<h3>REGISTRASI</h3>
				<div class="form-wrapper">
					<input type="text" placeholder="Nama Pasien" id="nama_pasien" name="nama_pasien"
						class="form-control">
					<i class="zmdi zmdi-account"></i>
				</div>

				<div class="form-group">
					<input type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir"
						class="form-control" style="width:120px;">
					<input type="date" placeholder="Tanggal" id="tanggal_lahir" name="tgl"
						class="form-control" style="width:160px;">
					<i class="zmdi zmdi-calendar"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Umur" id="umur" name="umur" class="form-control">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="form-wrapper">
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="" disabled selected>Jenis Kelamin </option>
						<option value="laki-laki">Laki-Laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
					<i class="zmdi zmdi-caret-down" style="font-size: 20px"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Alamat" id="alamat" name="alamat" class="form-control">
					<i class="zmdi zmdi-pin-drop"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Pekerjaan" id="pekerjaan" name="pekerjaan" class="form-control">
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Nama Orang Tua" id="nama_org_tua" name="nama_org_tua"
						class="form-control">
					<i class="zmdi zmdi-accounts"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Nomor Tlp" id="no_tlp" name="no_tlp" class="form-control">
					<i class="zmdi zmdi-smartphone-iphone"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Keterangan Lain-Lain" name="keterangan" class="form-control">
					<i class="zmdi zmdi-smartphone-iphone"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" placeholder="Username" name="username" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>

				<div class="form-wrapper">
					<input type="password" placeholder="Password" id="password" name="password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>
				<button type="submit">Daftar
					<i class="zmdi zmdi-arrow-right"></i>
				</button>
			</form>
		</div>
	</div>
</body>

</html>