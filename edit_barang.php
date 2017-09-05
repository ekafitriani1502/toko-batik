<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
require"../config/kon.php";
$kode= $_GET['kode'];
$tampil="select *from barang where kode='$kode'";
$hasil=mysql_query($tampil);
$data=mysql_fetch_array($hasil);
?>
 <form action="update_barang.php" method="post" enctype="multipart/form-data" name="form1">
   <table width="100%"  border="1">
     <tr>
       <td colspan="2"><div align="center">EDIT DATA BARANG </div></td>
     </tr>
     <tr>
       <td width="34%">Kode Pakaian</td>
       <td width="66%"><input name="kode" type="text" id="kode" value="<?php echo"$data[kode]"?>"></td>
     </tr>
     <tr>
       <td>Jenis Pakaian </td>
       <td><select name="jenis" id="jenis">
         <option value="Kemeja">Kemeja</option>
         <option value="Kaos">Kaos</option>
         <option value="Batik">Batik</option>
       </select></td>
     </tr>
     <tr>
       <td>Nama Pakaian </td>
       <td><input name="nama" type="text" id="nama" value="<?php echo"$data[nama]"?>"></td>
     </tr>
     <tr>
       <td>Harga Satuan</td>
       <td><input name="harga" type="text" id="harga" value="<?php echo"$data[harga]"?>"></td>
     </tr>
     <tr>
       <td>Gambar Lama </td>
       <td><?php echo "<img src='../$data[gambar]' width='150' height='50px' alignt='center'>";?></td>
     </tr>
     <tr>
       <td>Gambar Baru</td>
       <td><input name="gbaru" type="file" id="gbaru"></td>
     </tr>
     <tr>
       <td><input type="submit" name="Submit" value="UPDATE BARANG">
       <input type="reset" name="Submit2" value="BATAL"></td>
       <td>&nbsp;</td>
     </tr>
   </table>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
</form>
</body>
</html>
