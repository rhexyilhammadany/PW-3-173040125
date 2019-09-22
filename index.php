<?php 

  require 'helper/functions.php';

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
    <title>Wellcome !!!</title>

    <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/index1.css" rel="stylesheet">


    </head>
<body>
  <div class="header">
     <form class="navbar-form navbar-left" role="search" action="" method="get">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search" name="keyword" required="" autocomplete="off">
    </div>
       <button type="submit" class="btn btn-default" name="cari">Cari</button>
       <a href="index.php" class="glyphicon glyphicon-home"></a>
     </form>


   <ul class="nav navbar-inverse navbar-right">
        <li><a href="admin/login.php" style="background-color: #A52A2A;">Login</a></li>
   </ul>
      <h1> Daftar Perusahaan Teknologi </h1>
    </div>

    
<div class="container-fluid">

  <div class="row">
    <div class="col-6 col-md-4"></div>
      <div class="col-6 col-md-4">
      <div class="container">
        <?php if(empty($perusahaan)) :?>
      <div class="content">
        <h2 class="text-center">Data tidak ditemukan !!!</h2>
      </div>
    <?php else : ?>
      <?php 

        foreach ($perusahaan as $pt) :
      ?>
        <div class="content">
        <a href="php/profil.php?id=<?= $pt['id']; ?> ">
            <img src="assets/img/<?php echo $pt['Gambar']; ?>" class="img-circle"></a>
        <a href="php/profil.php?id=<?= $pt['id']; ?> ">
            <p class="nama"><b><?php echo $pt["NamaPerusahaan"] ?></b></p></a>
        <a href="php/profil.php?id=<?= $pt['id']; ?> ">
            <p class="tahunBerdiri">(<?php echo $pt["TahunBerdiri"] ?>)</p>
          </a>
        </div>
      <?php endforeach; ?>
      <?php endif; ?>
        <p>Sumber : Wikipedia</p>
      </div>
    </div>
    </div>
  </div>
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
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>