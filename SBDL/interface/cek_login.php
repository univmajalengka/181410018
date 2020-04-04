<?php 

session_start();
 

$koneksi = mysqli_connect('localhost','root','','program_penjualan');
$username = $_POST['username'];
$password = md5($_POST['password']);
 

$data = mysqli_query($koneksi,"select * from tabel_petugas where username='$username' and password='$password'");
 

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:login.php");
}
?>