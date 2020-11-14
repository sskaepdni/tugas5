<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUNDA FASHION</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    
<div class="login-page">
    <div class="login-left"></div>
    <div class="login-right">

        <div class="card card-login">
            <div class="card-header">
                <a href="" class="login-logo">FORM REGISTRASI</a>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <i class="material-icons">assignment_ind</i>
                    </div>
                    <input type="text" name="nama_user" class="form-control" placeholder="Nama lengkap ..."  autocomplete="off" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <i class="material-icons">person</i>
                    </div>
                    <input type="text" name="username_user" class="form-control" placeholder="Username ..."  autocomplete="off" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <i class="material-icons">lock</i>
                    </div>
                    <input type="text" name="password_user" class="form-control" placeholder="Password ..."  autocomplete="off" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-block mt-5 mr-auto">REGISTRASI</button>
                </form>
            </div>
            <div class="card-footer">
                <h3 class="slases">--- SUDAH PUNYA AKUN ? ---</h3>
                <a href="login.php" class="btn btn-link btn-block">Login disini</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>


<?php 

include 'admin/koneksi.php';
if (isset($_POST['login'])) {

    $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
    $password_user = $_POST['password_user'];



    $mysqlCek = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_user='$nama_user'");
    $ada = mysqli_num_rows($mysqlCek);

    if ($ada == 1) {
        echo "<script>alert('Maaf $username_user yang anda gunakan sudah ada silahkan gunakan username yg lain');</script>";
        echo "<meta http-equiv='refresh' content='0; url=registrasi.php'>";
    }else{

        $input = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama_user', '$username_user', '$password_user')");
        if ( $input) {
            echo "<script>alert('Sukses');</script>";
            echo "<meta http-equiv='refresh' content='0; url=registrasi.php'>";
        }else{
             echo "<script>alert('Terjadi kesalahan, coba ulangi kembali');</script>";
            echo "<meta http-equiv='refresh' content='0; url=registrasi.php'>";
        }

    }



}


 ?>