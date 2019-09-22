<?php 

$conn = mysqli_connect("localhost","root","","pw_173040125");
  

  function query($query){
   
   global $conn;
  $result = mysqli_query($conn, "$query");
  $rows = [];
   while( $row = mysqli_fetch_assoc($result) ) {
     $rows[] = $row;
}
   return $rows;

  }
    
   function tambah($data){
    global $conn ;
    
    $nama= htmlspecialchars($data ["NamaPerusahaan"]);
    $pendiri = $data ["PendiriPerusahaan"];
    $tahun = htmlspecialchars($data ["TahunBerdiri"]);
    $kantor= htmlspecialchars($data ["KantorPusat"]);
    $produk = htmlspecialchars($data ["Produk"]);
    $gambar = htmlspecialchars($data ["Gambar"]);

    $query = "INSERT INTO perusahaan_teknologi VALUES 
              ('','$nama','$pendiri',$tahun,'$kantor','$produk','$gambar')";
    mysqli_query($conn,$query);
    // mengetahui keterangan javascript
    return mysqli_affected_rows($conn);

   }

   function hapus ($id){
   	global $conn ;
   	mysqli_query($conn,"DELETE FROM perusahaan_teknologi WHERE id = $id");
   	return mysqli_affected_rows($conn);
   	
    
   }

   function ubah($data){
    global $conn ;
    
    $id = ($data ["id"]);
    $nama= htmlspecialchars($data ["NamaPerusahaan"]);
    $pendiri = htmlspecialchars($data ["PendiriPerusahaan"]);
    $tahun = htmlspecialchars($data ["TahunBerdiri"]);
    $kantor = htmlspecialchars($data ["KantorPusat"]);
    $produk = htmlspecialchars($data ["Produk"]);
    $gambar = htmlspecialchars($data ["Gambar"]);


    $query = "UPDATE perusahaan_teknologi SET
            NamaPerusahaan = '$nama',
            PendiriPerusahaan = '$pendiri',
            TahunBerdiri = '$tahun',
            KantorPusat = '$kantor',
            Produk = '$produk',
            Gambar = '$gambar'
             WHERE id = $id ";
    mysqli_query($conn,$query);
    // mengetahui keterangan javascript
    return mysqli_affected_rows($conn);

   }
 ?>
