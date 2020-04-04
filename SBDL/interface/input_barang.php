<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
 $koneksi = mysqli_connect('localhost','root','','program_penjualan');
 if (isset($_POST['submit'])){
	$kb = $_POST['kd_brg'];
	$nb = $_POST['nama_brg'];
	$hb = $_POST['harga_brg'];
	$stk = $_POST['stok_brg'];
	$edit = mysqli_query($koneksi, "insert into tabel_barang (kd_brg,nama_brg,harga_brg,stok_brg) values('$kb','$nb','$hb','$stk')");
	if ($edit);{
	echo "<meta http-equiv='refresh' content='0; url=?home=data_barang'>";
	}
 }
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td align="center" colspan="2">INPUT BARANG</td>
</tr>
<tr>
<td>Kode Barang</td><td><input type="text" name="kd_brg"></td> 
</tr>
<tr>
<td>Nama Barang</td><td><input type="text" name="nama_brg"></td> 
</tr>
<tr>
<td>Harga Barang</td><td><input type="text" name="harga_brg"></td>
</tr> 
<tr>
<td>Stok</td><td><input type="text" name="stok_brg"></td> 
</tr>
<tr>
<td><button type="submit" name="submit" class="btn btn-primary">Submit</button>
</table>
</form>