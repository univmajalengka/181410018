<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="?home=input_jual">
	<button type="button" class="btn btn-primary" style='position:absolute;left:25%;top:17%;width:100px;height:40px;text-align:center;font-size:20px;'>
	Tambah
	</button>
</a>
<div style="text-align:center;height:60px;">
<h1>DATA PENJUALAN</h1>
</div>
	<div class="bawah">
<table class="table table-striped" border="0px" width="100%" height="7%">
			 <thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>No Jual</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Tanggal Jual</th>
				<th>Total</th>
				<th style=text-align:center;>Aksi</th>
			
			</tr>
<?php
$koneksi = mysqli_connect('localhost','root','','program_penjualan');
$barang = mysqli_query($koneksi, "SELECT * FROM tabel_jual");
$no = 1;
while($baris=mysqli_fetch_array($barang)){
?>
			<tr>
				<td align="center"><?php echo $no?></td>
				<td><?php echo $baris['no_jual'];?></td>
				<td><?php echo $baris['nama_brg'];?></td>
				<td><?php echo $baris['jumlah_jual'];?></td>
				<td><?php echo $baris['tgl_jual'];?></td>
				<td>Rp.<?php echo number_format($baris['total_jual']);?></td>
				<td align="center">
					<a href="?home=edit_jual&no=<?php echo $baris['no_jual'];?>"><button type="button" class="btn btn-success">Edit</button></a>
					<a href="?home=delete_jual&no=<?php echo $baris['no_jual'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
<?php
$no++;
}
?>
</table>
</div>