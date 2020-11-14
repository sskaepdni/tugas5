    <section class="content">
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header text-center">
                            <h2>TAMBAH DATA USER</h2>
                        </div>
                        <div class="body">
                            <form method="post" action="">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <label>Nama</label>
                                            <input type="text" name="nama_user" class="form-control" placeholder="nama user ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Username</label>
                                            <input type="text" name="username_user" class="form-control" placeholder="USername user ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>
                                            <label>Password</label>
                                            <input type="text" name="password_user" class="form-control" placeholder="Password user ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td align="right">
                                           <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        </div>
    </section>



<?php 

if (isset($_POST['simpan'])) {

    $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
    $password_user = $_POST['password_user'];



    $mysqlCek = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_user='$nama_user'");
    $ada = mysqli_num_rows($mysqlCek);

    if ($ada == 1) {
        echo "<script>alert('Maaf nama user sudah ada silahkan input nama user yang lain');</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/tambah'>";
    }else{

        $input = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama_user', '$username_user', '$password_user')");
        if ( $input) {
            echo "<script>alert('Sukses');</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=user/index'>";
        }else{
            echo "<meta http-equiv='refresh' content='0; url=?page=user/tambah'>";
        }

    }



}


 ?>