<?php 
if ($_GET){
if ($_GET['no']){
$no = $_GET['no'];
$koneksi = mysqli_connect('localhost','root','','program_penjualan');
$barang = mysqli_query($koneksi,"delete from tabel_jual where no_jual='$no'");
  
header("Location:?home=tabel_jual");
}
}
?>