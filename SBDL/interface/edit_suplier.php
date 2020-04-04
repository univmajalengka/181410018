<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">

<?php
if ($_GET){
if ($_GET['no']){
	$ns = $_GET['no'];
	$koneksi = mysqli_connect('localhost','root','','program_penjualan');
	$barang = mysqli_query($koneksi, "select * from tabel_suplier where kd_suplier='$ns'");
	$baris = mysqli_fetch_array($barang);
	
	if (isset($_POST['edit'])){
		$ks = $_POST['kd_suplier'];
		$ns = $_POST['nama_sup'];
		$as = $_POST['alamat_sup'];
		$np = $_POST['notelp_sup'];
		$edit = mysqli_query($koneksi, "update tabel_suplier set kd_suplier='$ks',nama_sup='$ns',alamat_sup='$as',notelp_sup='$np' where kd_suplier='$ns';");
		if($edit){
		echo "<meta http-equiv='refresh' content='0; url=?home=tabel_jual'>";
			}
		}
	}
}
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td>EDIT TABEL SUPLIER</td>
</tr>
<tr>
<td>Kode Suplier</td><td><input type="text" name="no_jual" value="<?php echo $baris['kd_suplier']?>"></td> 
</tr>
<tr>
<td>Nama</td><td><input type="text" name="jumlah_jual" value="<?php echo $baris['nama_sup']?>"></td> 
</tr>
<tr>
<td>Alamat</td><td><input type="text" name="tgl_jual" value="<?php echo $baris['alamat_sup']?>"></td>
</tr> 
<tr>
<td>Telp</td><td><input type="text" name="total_jual" value="<?php echo $baris['notelp_sup']?>"></td> 
</tr>
<tr>
<td><button type="submit" name="edit" class="btn btn-primary">Simpan</button>
</table>
</form>