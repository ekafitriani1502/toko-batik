<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
//pemanggilan koneksi
require("../config/kon.php");
//listing sql hapus
$hapus= "DELETE FROM barang WHERE kode='$_GET[kode]'";
//menjalankan listing
$test= mysql_query($hapus);
//warning atau peringatan data terhapus
if($test){
   echo"<script>location = 'view_barang.php'</script>";}
   else{
   echo"<script>alert('Gagal Dihapus....')</script>>";
   echo"<script>location = 'view_barang.php'</script>";}
?>
</body>
</html>
