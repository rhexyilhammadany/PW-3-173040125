<?php 

  require '../helper/functions.php';

 session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }

  if (isset($_GET["cari"])){
       $keyword = $_GET["keyword"];
       $query ="SELECT * FROM perusahaan_teknologi WHERE NamaPerusahaan LIKE '%$keyword%' OR
         PendiriPerusahaan LIKE '%$keyword%' OR
         TahunBerdiri LIKE '%$keyword%' OR
         KantorPusat LIKE '%$keyword%' OR
         Produk LIKE '%$keyword%'";
       $perusahaan = query ($query);
   }else{

     $perusahaan = query("SELECT * FROM perusahaan_teknologi ");
   }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wellcome Admin !!!</title>

    <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/index2.css" rel="stylesheet">


    </head>
       
     <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
        
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
          <li>
            <form class="navbar-form navbar-right" method="get">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="keyword">
                  </div>
                 <button type="submit" name="cari" class="btn btn-warning"><i class="glyphicon glyphicon-search"></i> cari</button>
                 <a href="index.php" class="glyphicon glyphicon-home"></a>
              </form>
          </li>
          <li>
            <div id="header">
              <a href="tambah.php">
              <button type="submit" name="submit" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
              </a>
              <a href="logout.php">
                <button type="submit" name="submit" class="btn btn-warning"><i class="glyphicon glyphicon-log-in" ></i> Logout</button>
                </a>
            </div>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <div >
      <h1 class="text-center">Halaman Admin</h1>
      <hr>
    </div>
    <div class="col-sm-12">

    
<div class="container-fluid"> 
  <table border="1" cellspacing="0" cellpadding="10">
   <thead>
    <tr class="btn-danger">
    <th width="50px"  align="center">No</th> 
    <th width="200px" align="center">Opsi</th>
    <th width="200px" align="center">Nama</th>
    <th width="300px" align="center">Pendiri Perusahaan</th>
    <th width="200px" align="center">Tahun Berdiri</th>
    <th width="300px" align="center">Kantor Pusat</th>
    <th width="200px" align="center">Produk</th>
    <th width="100px" align="center">Gambar</th>
    </tr>
  </thead>
    <?php $i = 1 ; ?>
      <?php if(empty($perusahaan)) :?>
      <tr>
        <td colspan="8"><h2 class="text-center">Data tidak ditemukan !!!</h2></td>
      </tr>
    <?php else : ?>
   <?php foreach ($perusahaan as $pt ) : ?>
    <tbody>
    <tr>
     <td align="center"><?php echo $i++; ?></td>
     <td>
       <button class="btn-danger"><a href="hapus.php?id=<?php echo $pt ["id"]; ?>" onclick ="return confirm('yakin?');">Hapus</a></button>
       <button class="btn-warning"><a href="ubah.php?id=<?php echo $pt ["id"]; ?>" style="text-decoration: none">Ubah</a></button>
     </td>
     <td align="center"><?php echo $pt ["NamaPerusahaan"]; ?></td>
     <td><?php echo $pt ["PendiriPerusahaan"]; ?> </td>
     <td align="center"><?php echo $pt ["TahunBerdiri"]; ?></td>
     <td><?php echo $pt ["KantorPusat"]; ?> </td>
     <td><?php echo $pt ["Produk"]; ?></td>
     <td> <img src="../assets/img/<?php echo $pt['Gambar']; ?>"  class="rounded-circle"></td>

  </tr>
    <?php endforeach; ?>
      <?php endif; ?>
  </tbody>
</table>



 <p>Sumber : Wikipedia</p>
 <br>
</div>

 <!-- footer -->
   <footer>
  <div class="footer text-center">
    <div class="row">
      <div class="col-sm-12">
        <p> Pasundan University 2018 built with <i class="glyphicon glyphicon-heart"></i> by. <a href="#home" class="a">Rhexy Ilham Madany</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12" >
        <a href="https://www.instagram.com/rhexyilham" class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i>follow my instagram</a>
      </div>
    </div>
  </div>

</footer>
   <!-- akhir footer -->


     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>