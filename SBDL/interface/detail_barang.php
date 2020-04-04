 <?php
 $koneksi = mysqli_connect('localhost','root','','program_penjualan');
 ?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
 <div class="container">
 <div class="row justify-content-md-center my-5">
 <div class="col-md-5">
        <?php
        $no=mysqli_real_escape_string($koneksi, $_GET['no']);
        $barang=mysqli_query($koneksi, "select * from tabel_barang where kd_brg='$no'")or die(mysqli_error());
		while($baris=mysqli_fetch_array($barang)){
            ?>				
			<table class="table table-striped">
				<tr>
				
					<td colspan="2" >
					<h3 align="center">Detail Barang</h3>
					</td>
				</tr>
				<tr>
                    <td>Kode Barang</td>
                    <td><?php echo $baris['kd_brg'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $baris['nama_brg'] ?></td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><?php echo $baris['jenis_brg'] ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>Rp.<?php echo number_format($baris['harga_brg']) ?></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><?php echo $baris['stok_brg'] ?></td>
                </tr>
           </table>
            <?php 
        }
        ?>
                <a href="home.php?home=data_barang" class="btn btn-primary">Kembali</a>
    </div>
    </div>
</div>