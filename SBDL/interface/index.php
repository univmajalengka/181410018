<html>
<title>Toko Deras</title>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href='fontawesome/css/all.css'>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>
.top{
margin-top:10%;
}
.text{
text-align:center;
}

</style>
<div class="top">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="card">
                <div class="card-header">
                   <div class="text"><strong>Login</strong></div>
                </div>
                <div class="card-body">
                    <form name="login" id="login" action="cek_login.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <span class="profile-img">
                                    <i class='fas fa-user-circle' style='font-size:120px'></i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr> <!-- other content  -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class='fas fa-user-shield'></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class='fas fa-user-secret'></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Password" name="password" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary	btn-block submit" id="login_m">Sign in</button>
                                </div>
                            </div>
                        </div>
                    <!-- <a href="#" onClick="">I forgot my password!</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>