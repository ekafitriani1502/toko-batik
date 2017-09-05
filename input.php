<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="simpan.php" enctype="multipart/form-data">
  <table width="100%"  border="1">
    <tr>
      <td colspan="2"><div align="center">INPUT DATA PAKAIAN</div></td>
    </tr>
    <tr>
      <td width="23%">Kode Pakaian </td>
      <td width="77%">
        <input name="kode" type="text" id="kode4"></td>
    </tr>
    <tr>
      <td>Jenis Pakaian </td>
      <td>
        <select name="jenis" id="select4">
          <option value="Kemeja" selected>Kemeja</option>
          <option value="Batik">Batik</option>
          <option value="Kaos">Kaos</option>
                        </select>
      </td>
    </tr>
    <tr>
      <td>Nama Pakaian</td>
      <td>
        <input name="nama" type="text" id="nama4">
      </td>
    </tr>
    <tr>
      <td>Harga Satuan </td>
      <td>
        <input name="harga" type="text" id="harga4">
      </td>
    </tr>
    <tr>
      <td>Gambar Pakaian</td>
      <td>
        <input name="gambar" type="file" id="gambar">
</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Simpan">
      <input type="reset" name="Submit2" value="Batal">
      <a href="href=%27view_barang.php">      [lihat data] </a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
