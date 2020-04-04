<?php 
if ($_GET){
if ($_GET['no']){
$no = $_GET['no'];
$koneksi = mysqli_connect('localhost','root','','program_penjualan');
$barang = mysqli_query($koneksi,"delete from tabel_beli where no_beli='$no'");
  
header("Location:?home=tabel_beli");
}
}
?>