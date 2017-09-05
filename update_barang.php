<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include"../config/kon.php";
$gambar=$_FILES['gambar']['name'];

if($gambar=='')
{
   $proses="UPDATE barang SET jenis='$_POST[jenis]', nama='$_POST[nama]', harga='$_POST[harga]' WHERE kode='$_POST[kode]'";
   $hasil=mysql_query($proses);
   if($hasil)
   {
       echo"<script>alert('Data Terupdate')</script>";
	   echo"<script>location='view_barang.php'</script>";
   }
   else
   {
       echo"<script>alert('Terdeteksi,,Data Gagal Terupdate')</script>";
	   echo"<script>location='edit_barang.php'</script>";
   }
   }else{
   move_uploaded_file($_FILES['gambar']['tmp_name'],"../gambar/".$gambar);
   $proses2="UPDATE barang SET jenis='$_POST[jenis]', nama='$_POST[nama]', harga='$_POST[harga]', gambar='gambar/$gambar' WHERE kode='$_POST[kode]'";
   $hasil2=mysql_query($proses2);
   if($hasil2)
   {
       echo"<script>alert('Data Terupdate')</script>";
	   echo"<script>location='view_barang.php'</script>";
   }
   else
   {
       echo"<script>alert('Terdeteksi,,Data Gagal Terupdate')</script>";
	   echo"<script>location='edit_barang.php'</script>";
   }
  }
  ?>
   
</body>
</html>
