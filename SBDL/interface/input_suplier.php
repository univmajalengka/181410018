<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">


<?php
 $koneksi = mysqli_connect('localhost','root','','program_penjualan');
 if (isset($_POST['submit'])){
	$ks = $_POST['kd_suplier'];
	$ns = $_POST['nama_sup'];
	$as = $_POST['alamat_sup'];
	$np = $_POST['notelp_sup'];
	$edit = mysqli_query($koneksi, "insert into tabel_suplier (kd_suplier,nama_sup,alamat_sup,notelp_sup) values('$ks','$ns','$as','$np')");
	if ($edit);{
	echo "<meta http-equiv='refresh' content='0; url=?home=tabel_suplier'>";
	}
 }
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td>INPUT SUPLIER</td>
</tr>
<tr>
<td>Kode Suplier</td><td><input type="text" name="kd_suplier"></td> 
</tr>
<tr>
<td>Nama</td><td><input type="text" name="nama_sup"></td> 
</tr>
<tr>
<td>Alamat</td><td><input type="text" name="alamat_sup"></td>
</tr> 
<tr>
<td>No Telp</td><td><input type="text" name="notelp_sup"></td> 
</tr>
<tr>
<td><button type="submit" name="edit" class="btn btn-primary">Simpan</button>
</table>
</form>