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
        $suplier=mysqli_query($koneksi, "select * from tabel_suplier where kd_suplier='$no'")or die(mysqli_error());
		while($baris=mysqli_fetch_array($suplier)){
            ?>				
			<table class="table table-striped">
				<tr>
				
					<td colspan="2" >
					<h3 align="center">Detail Suplier</h3>
					</td>
				</tr>
				<tr>
                    <td>Kode Suplier</td>
                    <td><?php echo $baris['kd_suplier'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $baris['nama_sup'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $baris['alamat_sup'] ?></td>
                </tr>
                <tr>
                    <td>No Telp</td>
                     <td><?php echo $baris['notelp_sup'] ?></td>
                </tr>
           </table>
            <?php 
        }
        ?>
                <a href="home.php?home=tabel_suplier" class="btn btn-primary">Kembali</a>
    </div>
    </div>
</div>