<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
if ($_GET){
if ($_GET['no']){
	$kb = $_GET['no'];
	$koneksi = mysqli_connect('localhost','root','','program_penjualan');
	$barang = mysqli_query($koneksi, "select * from tabel_barang where kd_brg='$kb'");
	$baris = mysqli_fetch_array($barang);
	
	if (isset($_POST['edit'])){
		$kd = $_POST['kd_brg'];	
		$nb = $_POST['nama_brg'];
		$hb = $_POST['harga_brg'];
		$stk = $_POST['stok_brg'];
		$edit = mysqli_query($koneksi, "update tabel_barang set kd_brg='$kd',nama_brg='$nb',harga_brg='$hb',stok_brg='$stk' where kd_brg='$kb';");
		if($edit){
		echo "<meta http-equiv='refresh' content='0; url=?home=data_barang'>";
			}
		}
	}
}
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td>EDIT BARANG</td>
</tr>
<tr>
<td>Kode Barang</td><td><input type="text" name="kd_brg" value="<?php echo $baris['kd_brg']?>"></td> 
</tr>
<tr>
<td>Nama Barang</td><td><input type="text" name="nama_brg" value="<?php echo $baris['nama_brg']?>"></td> 
</tr>
<tr>
<td>Harga Beli</td><td><input type="text" name="harga_brg" value="<?php echo $baris['harga_brg']?>"></td>
</tr> 
<tr>
<td>Stok</td><td><input type="text" name="stok_brg" value="<?php echo $baris['stok_brg']?>"></td> 
</tr>
<tr>
<td><button type="submit" name="edit" class="btn btn-primary">Simpan</button>
</table>
</form>