<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
require("../config/kon.php");
$kode=$_POST['kode'];
$jenis=$_POST['jenis'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$gambar=$_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'],"../gambar/".$gambar);

$simpan="insert into barang(kode,jenis,nama,harga,gambar)
values('$kode','$jenis','$nama','$harga','gambar/$gambar')";

$test=mysql_query($simpan);

if($test){
 echo"<script>alert('Data Berhasil Tersimpan')</script>";
 echo"<script>location='view_barang.php'</script>";
 
 }
  else {
 echo"<script>alert('Data Belum Lengkap')</script>";
 echo"<script>location='input.php'</script>";
 }
 
 ?>

</body>
</html>
