<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">

<?php
 $koneksi = mysqli_connect('localhost','root','','program_penjualan');
 if (isset($_POST['submit'])){
	$nb = $_POST['no_beli'];
	$ni = $_POST['nama_brg'];
	$jb = $_POST['jumlah_beli'];
	$tb = $_POST['tgl_beli'];
	$ti = $_POST['total_beli'];
	$edit = mysqli_query($koneksi, "insert into tabel_beli (no_beli,nama_brg,jumlah_beli,tgl_beli,total_beli) values('$nb','$ni','$jb','$tb','$ti')");
	if ($edit);{
	echo "<meta http-equiv='refresh' content='0; url=?home=tabel_beli'>";
	}
 }
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td align="center" colspan="2">INPUT BELI</td>
</tr>
<tr>
<td>No Beli</td><td><input type="text" name="no_beli"></td> 
</tr>
<tr>
<td>Nama Barang
</td>
<td>
 <select name="nama_brg" id="nama_brg">
  <option disabled selected>Pilih</option>
 <?php 
  $sql=mysqli_query($koneksi, "SELECT * FROM tabel_barang");
  while ($data=mysqli_fetch_array($sql)) {
 ?>
   <option value="<?=$data['nama_brg']?>"><?=$data['nama_brg']?></option> 
 <?php
  }
 ?>
  </select>
 <td></tr>
<tr>
<td>Jumlah Beli</td><td><input type="text" name="jumlah_beli"></td> 
</tr>
<tr>
<td>Tanggal Beli</td><td><input type="text" name="tgl_beli"></td>
</tr> 
<tr>
<td>Total Beli</td><td><input type="text" name="total_beli"></td> 
</tr>
<tr>
<td><button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</table>
</form>