<?php

  require '../helper/functions.php';
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }
   // cek apakah tombol submit sudah ditekan atau belum
  if (isset($_POST["tambah"])) {
  	if (tambah($_POST) > 0) {
  		echo "<script>
  		alert ('data berhasil ditambahkan !');
  		document.location.href = 'index.php'; </script>";
  	}
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Tambah Perusahaan Teknologi</title>  
  <link rel="stylesheet" href="../assets/css/ut.css">
</head>
<body>
<h1 class="text-center">Tambah Data</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>
          <label for="NamaPerusahaan">Nama Perusahaan</label>
        </td>
        <td>
          <input type="text" name="NamaPerusahaan" id="NamaPerusahaan" required="" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          <label for="PendiriPerusahaan">Pendiri Perusahaan</label>
        </td>
        <td>
           <input type="text" name="PendiriPerusahaan" id="PendiriPerusahaan" required="" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          <label for="TahunBerdiri">Tahun Berdiri</label>
        </td>
        <td>
           <input type="number" name="TahunBerdiri" id="TahunBerdiri" required="" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          <label for="KantorPusat">Kantor Pusat</label>
        </td>
        <td>
           <input type="text" name="KantorPusat" id="KantorPusat" required="" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Produk">Produk</label>
        </td>
        <td>
          <input type="text" name="Produk" id="Produk" required="" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Gambar">Gambar</label>
        </td>
        <td>
           <input type="file" name="Gambar" id="Gambar" required="" autocomplete="off" >
        </td>
      </tr>
      <tr>
      <td >
         <button type="submit" name="tambah"  style="padding: 10px; text-align: center; width: 100px; margin-left: 50px;">Tambah</button>
        </td>
        <td>
         <a href="index.php" onclick="return confirm('Anda yakin ingin membatalkan?')"><button type="button" class="btn btn-danger" style="padding: 10px text-align:center; margin-left: 50px; margin-top: -50px; width: 100px;">Batal</button></a>
        </td>
      </tr>

    </table>
  </form>

</body>
</html>
