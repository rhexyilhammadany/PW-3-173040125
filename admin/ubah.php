<?php

  
  require '../helper/functions.php';
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }
  // ambil data mahasiswa yang kita ubah
  $id =$_GET["id"];
  $pt = query ("SELECT * FROM perusahaan_teknologi WHERE id =$id")[0];

   // cek apakah tombol submit sudah ditekan atau belum
  if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
      echo "<script>
      alert ('data berhasil diubah !');
      document.location.href = 'index.php'; </script>";
    }
  }
  ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Ubah Perusahaan Teknologi</title>  
  <link rel="stylesheet" href="../assets/css/ut.css">
</head>
<body>
<h1 class="text-center">Ubah Data</h1>
  <form action="" method="post">
<input type="hidden" name="id" value="<?php echo $pt ["id"]; ?>">
    <table>
      <tr>
        <td>
          <label for="NamaPerusahaan">Nama Perusahaan</label>
        </td>
        <td>
          <input type="text" name="NamaPerusahaan" id="NamaPerusahaan" required="" autocomplete="off" value="<?php echo $pt ["NamaPerusahaan"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="PendiriPerusahaan">Pendiri Perusahaan</label>
        </td>
        <td>
           <input type="text" name="PendiriPerusahaan" id="PendiriPerusahaan" required="" autocomplete="off" value="<?php echo $pt ["PendiriPerusahaan"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="TahunBerdiri">Tahun Berdiri</label>
        </td>
        <td>
           <input type="number" name="TahunBerdiri" id="TahunBerdiri" required="" autocomplete="off" value="<?php echo $pt ["TahunBerdiri"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="KantorPusat">Kantor Pusat</label>
        </td>
        <td>
           <input type="text" name="KantorPusat" id="KantorPusat" required="" autocomplete="off" value="<?php echo $pt ["KantorPusat"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Produk">Produk</label>
        </td>
        <td>
        <input type="text" name="Produk" id="Produk" required="" autocomplete="off" value="<?php echo $pt ["Produk"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Gambar">Gambar</label>
        </td>
        <td>
           <input type="file" name="Gambar" id="Gambar" required="" autocomplete="off" value="<?php echo $pt ["Gambar"]; ?>">
        </td>
      </tr>
      
        <td colspan="2">
        <div class="text-center">
               <button type="submit" name="ubah"  style="padding: 10px; text-align: center; width: 100px; margin-left: 50px;">Ubah</button>
              <a href="index.php" onclick="return confirm('Anda yakin ingin membatalkan?')"><button type="button" class="btn btn-danger" style="padding: 10px text-align:center; margin-left: 50px; margin-top: -50px; width: 100px;">Batal</button></a>
            </div>

        </td>
      </tr>

    </table>
  </form>

</body>
</html>