<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="?home=input_suplier">
	<button type="button" class="btn btn-primary" style='position:absolute;left:25%;top:17%;width:100px;height:40px;text-align:center;font-size:20px;'>	Tambah
	</button>
</a>
<div style="text-align:center;height:60px;">
<h1>DATA SUPLIER</h1>
</div>
	<div class="bawah">
<table class="table table-striped" border="0px" width="100%" height="7%">
			 <thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Nama Suplier</th>
				<th>Alamat Suplier</th>
				<th style=text-align:center;>Aksi</th>
			
			</tr>
<?php
$koneksi = mysqli_connect('localhost','root','','program_penjualan');
$barang = mysqli_query($koneksi, "SELECT * FROM tabel_suplier");
$no = 1;
while($baris=mysqli_fetch_array($barang)){
?>
			<tr>
				<td align="center"><?php echo $no?></td>
				<td><?php echo $baris['nama_sup'];?></td>
				<td><?php echo $baris['notelp_sup'];?></td>
				<td align="center">
					<a href="?home=detail_suplier&no=<?php echo $baris['kd_suplier'];?>" type="button" class="btn btn-info">Detail</a>
					<a href="?home=edit_suplier&no=<?php echo $baris['kd_suplier'];?>"><button type="button" class="btn btn-success">Edit</button></a>
					<a href="?home=delete_suplier&no=<?php echo $baris['kd_suplier'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
<?php
$no++;
}
?>
</table>
</div>