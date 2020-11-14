        <?php 

    $mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_GET[id_user]'");
    $data = mysqli_fetch_array($mysql);
?>

    <section class="content">
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header text-center">
                            <h2>EDIT DATA USER</h2>
                        </div>
                        <div class="body">
                            <form method="post" action="">
                                 <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <label>Nama</label>
                                            <input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>" class="form-control" placeholder="nama user ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Username</label>
                                            <input type="text" name="username_user" value="<?php echo $data['username_user'] ?>" class="form-control" placeholder="USername user ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>
                                            <label>Password</label>
                                            <input type="text" name="password_user" value="<?php echo $data['password_user'] ?>" class="form-control" placeholder="Password user ..." required="" autocomplete="off">
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


    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
    $password_user = $_POST['password_user'];



        $input = mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_user', username_user='$username_user', password_user='$password_user' WHERE id_user='$id_user'");
        if ( $input) {
            echo "<script>alert('Sukses');</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=user/edit&id_user=$id_user'>";
        }else{
            echo "<meta http-equiv='refresh' content='0; url=?page=user/edit&id_user=$id_user'>";
        }




}


 ?>