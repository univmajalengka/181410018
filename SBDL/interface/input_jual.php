<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">


<?php
 $koneksi = mysqli_connect('localhost','root','','program_penjualan');
 if (isset($_POST['submit'])){
	$nj = $_POST['no_jual'];
	$ni	= $_POST['nama_brg'];
	$jj = $_POST['jumlah_jual'];
	$tj = $_POST['tgl_jual'];
	$ti = $_POST['total_jual'];
	$edit = mysqli_query($koneksi, "insert into tabel_jual (no_jual,nama_brg,jumlah_jual,tgl_jual,total_jual) values('$nj','$ni','$jj','$tj','$ti')");
	if ($edit);{
	echo "<meta http-equiv='refresh' content='0; url=?home=tabel_jual'>";
	}
 }
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td  align="center" colspan="2">INPUT JUAL</td>
</tr>
<tr>
<td>No Jual</td><td><input type="text" name="no_jual"></td> 
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
<td>Jumlah Jual</td><td><input type="text" name="jumlah_jual"></td> 
</tr>
<tr>
<td>Tanggal Jual</td><td><input type="text" name="tgl_jual"></td>
</tr> 
<tr>
<td>Total Jual</td><td><input type="text" name="total_jual"></td> 
</tr>
<tr>
<td><button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</table>
</form>