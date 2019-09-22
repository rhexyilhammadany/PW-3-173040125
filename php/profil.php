<?php 
	
	if (!isset($_GET["id"])	
	   ){
		header("Location:../index.php");
		exit;

	}
	require '../helper/functions.php';
	$id = $_GET['id'];
	$perusahaan = query("SELECT * FROM perusahaan_teknologi WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Perusahaan Teknologi</title>
	<link rel="stylesheet" href="../assets/css/profil.css">
</head>
<body>
	<div class="header">
		<p>Profil Perusahaan Teknologi</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar">
			<img src="../assets/img/<?= $perusahaan['Gambar'] ?>">
		</div>
		<div class="desc">
		 <p class= "nama"><?= $perusahaan['NamaPerusahaan'] ?></p>
			<p><?= $perusahaan['PendiriPerusahaan'] ?></p>
			<p><?= $perusahaan['TahunBerdiri'] ?>, <?= $perusahaan['KantorPusat'] ?></p>,
			<?= $perusahaan['Produk'] ?></p>
			<p><a href="../index.php">Kembali</a></p>
		</div>
	</div>
</div>

	
</body>
</html>