<?php 
if ($_GET){
if ($_GET['no']){
$no = $_GET['no'];
$koneksi = mysqli_connect('localhost','root','','program_penjualan');
$barang = mysqli_query($koneksi,"delete from tabel_suplier where kd_suplier='$no'");
  
header("Location:?home=tabel_suplier");
}
}
?>