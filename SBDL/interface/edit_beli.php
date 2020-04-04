<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">

<?php
if ($_GET){
if ($_GET['no']){
	$nd = $_GET['no'];
	$koneksi = mysqli_connect('localhost','root','','program_penjualan');
	$barang = mysqli_query($koneksi, "select * from tabel_beli where no_beli='$nd'");
	$baris = mysqli_fetch_array($barang);
	
	if (isset($_POST['edit'])){
		$nb = $_POST['no_beli'];
		$jb = $_POST['jumlah_beli'];
		$tb = $_POST['tgl_beli'];
		$ti = $_POST['total_beli'];
		$edit = mysqli_query($koneksi, "update tabel_beli set no_beli='$nb',jumlah_beli='$jb',tgl_beli='$tb',total_beli='$ti' where no_beli='$nd';");
		if($edit){
		echo "<meta http-equiv='refresh' content='0; url=?home=tabel_beli'>";
			}
		}
	}
}
?>
<form action="" method="post">
<table class="table table-hover table-dark" "border="0">
<tr>
<td  align="center" colspan="2">EDIT BARANG</td>
</tr>
<tr>
<td>Kode Beli</td><td><input type="text" name="no_beli" value="<?php echo $baris['no_beli']?>"></td> 
</tr>
<tr>
<td>Nama Barang
</td>
<td>
 <select name="nama_brg" id="nama_brg">
  <?php
	$sql=mysqli_query($koneksi, "SELECT * FROM tabel_barang");
       while ($data_barang=mysqli_fetch_array($sql)) {
        if ($data['nama_brg']==$data_barang['kode_brg']) {
         $select="selected";
        }else{
         $select="";
        }
        echo "<option $select>".$data_barang['nama_brg']."</option>";
       }
      ?>  
  </select>
 <td></tr>
<tr>
<tr>
<td>Jumlah Beli</td><td><input type="text" name="jumlah_beli" value="<?php echo $baris['jumlah_beli']?>"></td> 
</tr>
<tr>
<td>Tanggal Beli</td><td><input type="text" name="tgl_beli" value="<?php echo $baris['tgl_beli']?>"></td>
</tr> 
<tr>
<td>Total Beli</td><td><input type="text" name="total_beli" value="<?php echo $baris['total_beli']?>"></td> 
</tr>
<tr>
<td><button type="submit" name="edit" class="btn btn-primary">Simpan</button>
</table>
</form>