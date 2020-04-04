<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">

<?php
if ($_GET){
if ($_GET['no']){
	$nd = $_GET['no'];
	$koneksi = mysqli_connect('localhost','root','','program_penjualan');
	$barang = mysqli_query($koneksi, "select * from tabel_jual where no_jual='$nd'");
	$baris = mysqli_fetch_array($barang);
	
	if (isset($_POST['edit'])){
		$nj = $_POST['no_jual'];
		$ni = $_POST['no_jual'];
		$jj = $_POST['jumlah_jual'];
		$tj = $_POST['tgl_jual'];
		$ti = $_POST['total_jual'];
		$edit = mysqli_query($koneksi, "update tabel_jual set no_jual='$nj',nama_brg='$ni',jumlah_jual='$jj',tgl_jual='$th',total_jual='$ti' where no_jual='$nd';");
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
<td  align="center" colspan="2">EDIT TABEL JUAL</td>
</tr>
<tr>
<td>Kode Jual</td><td><input type="text" name="no_jual" value="<?php echo $baris['no_jual']?>"></td> 
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
<td>Jumlah Jual</td><td><input type="text" name="jumlah_jual" value="<?php echo $baris['jumlah_jual']?>"></td> 
</tr>
<tr>
<td>Tanggal Jual</td><td><input type="text" name="tgl_jual" value="<?php echo $baris['tgl_jual']?>"></td>
</tr> 
<tr>
<td>Total Jual</td><td><input type="text" name="total_jual" value="<?php echo $baris['total_jual']?>"></td> 
</tr>
<tr>
<td><input type="submit"  name="edit" value="Simpan"> <td><button type="submit" name="edit" class="btn btn-primary">Simpan</button></table>
</form>