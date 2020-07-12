<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<?php
	echo "<head><title>Form</head></title>";
	$fp = fopen("pendaftaran.txt", "a+");

	$namateam = $_POST['nama_team'];
	$kelas = $_POST['kelas'];
	$lomba = $_POST['lomba'];
	$nohp = $_POST['nope'];
	$anggota = $_POST['anggota']
	$komentar = $_POST['komentar'];


	fputs($fp,"$nama_team|$kelas|$lomba|$nope|$anggota|$komentar\n");
	fclose($fp);

	echo "Terima Kasih Atas Partisipasi Anda <br>";
	?>
	<button class="tombol"><a align="center" href="form.html">Halaman awal</a></button>
<div>
</body>
</html>
