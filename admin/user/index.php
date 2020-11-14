    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA USER</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a href="?page=user/tambah" class="btn btn-success">
                                <i class="material-icons">add</i>
                            </a>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th><center>No.</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Username</center></th>
                                            <th><center>Password</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $no = 1;
                                            $mysql = mysqli_query($koneksi, "SELECT * FROM user");
                                            while ($data = mysqli_fetch_array($mysql)) {
                                         ?>
                                        <tr>
                                            <td><center><?php echo $no++ ?></center></td>
                                            <td><center><?php echo $data['nama_user'] ?></center></td>
                                            <td><center><?php echo $data['username_user'] ?></center></td>
                                            <td><center><?php echo $data['password_user'] ?></center></td>
                                            <td>
                                                <center>
                                                    <a href="?page=user/edit&id_user=<?php echo $data['id_user'] ?>" class="btn btn-primary">
                                                        <i class="material-icons">update</i>
                                                    </a>
                                                    <a href="?page=user/hapus&id_user=<?php echo $data['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?');">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        </div>
    </section>