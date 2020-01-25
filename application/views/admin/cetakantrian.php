<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cetak Tiket</title>
</head>

<body>

	<span style='text-align:center;border-style:double; padding:10px;display: inline-block;'>
		<div style='font-size:30px;'> APOTEK TRI ARGA FARMA </div>
		<div> Nomor Antrian Anda: </div>
		<div style='font-size:90px;'><?= $nomor ?></div> <br>
		<div style='font-size:20px;'>Loket: <?= $loketdokter->loket ?> / Spesialis <?= $loketdokter->spesialis ?></div>
		<div id='tgl'><?= $tanggal ?></div>
	</span>

<script>
	    window.print()
</script>

</body>
</html>