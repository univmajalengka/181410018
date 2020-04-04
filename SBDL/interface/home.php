<html>
<title>Toko Deras</title>
<body>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.mid{width:50%;
margin-top:100px;
margin-left:25%;
height:90%;
text-align:center;
}
</style>

<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">A/LO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?home=data_barang">Tabel Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?home=tabel_beli">Tabel Beli</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="?home=tabel_jual">Tabel Jual</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="?home=tabel_suplier">Tabel Suplier</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>


    </ul>
    <span class="navbar-text">

    </span>
  </div>
</nav>
<div class="mid">

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	 
<?php

if (isset($_GET['home'])){
include_once($_GET['home'].".php");
}else{
echo'<h3>WELCOME</h3>';
}
?>
	</div>
	</body>
	</html>