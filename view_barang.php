<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
//pemanggil file koneksi
require("../config/kon.php");
//listing sql tampil data
$view="select*from barang order by kode";
//menjalankan listing sql tampil data
$hasil=mysql_query($view) or die("query gagal".mysql_error());
?>

<table width="100%"  border="1">
  <tr>
    <td colspan="7"><div align="center">LIHAT DATA BARANG </div></td>
  </tr>
  <tr>
    <td width="8%"><div align="center">KODE</div></td>
    <td width="11%"><div align="center">JENIS</div></td>
    <td width="10%"><div align="center">NAMA</div></td>
    <td width="11%"><div align="center">HARGA</div></td>
    <td width="36%"><div align="center">GAMBAR</div></td>
    <td colspan="2"><div align="center">AKSI RECORD </div></td>
  </tr>
  <?php
  while ($data=mysql_fetch_array($hasil)){
  ?>
  <tr>
    <td height="65"><?php echo $data['kode'];?> &nbsp;</td>
    <div align="center"></div></td>
    <td><?php echo $data['jenis'];?></td>
    <div align="center"></div></td>
    <td><?php echo $data['nama'];?></td>
    <div align="center"></div></td>
    <td><?php echo $data['harga'];?></td>
    <div align="center"></div></td>
    <td><div align="center"><img name="" src="<?php echo"../$data[gambar]";?>" width="138" height="46" alt="">&nbsp;</div></td>
    <td width="12%"><a href="edit_barang.php?kode=<?php echo $data['kode'];?>">EDIT</a></td>
    <td width="12%"><div align="center"><a href="delete_barang.php?kode=<?php echo $data['kode'];?>">HAPUS</a></div></td>
  </tr>
  <?php }
  ?>
</table>
</body>
</html>
