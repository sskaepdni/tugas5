    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA PRODUK</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a href="?page=produk/tambah" class="btn btn-success">
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
                                            <th><center>Harga</center></th>
                                            <th><center>Keterangan</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $no = 1;
                                            $mysql = mysqli_query($koneksi, "SELECT * FROM produk");
                                            while ($data = mysqli_fetch_array($mysql)) {
                                         ?>
                                        <tr>
                                            <td><center><?php echo $no++ ?></center></td>
                                            <td><center><?php echo $data['nama_produk'] ?></center></td>
                                            <td><center><?php echo $data['harga_produk'] ?></center></td>
                                            <td><center><?php echo $data['keterangan_produk'] ?></center></td>
                                            <td>
                                                <center>
                                                    <a href="?page=produk/edit&id_produk=<?php echo $data['id_produk'] ?>" class="btn btn-primary">
                                                        <i class="material-icons">update</i>
                                                    </a>
                                                    <a href="?page=produk/hapus&id_produk=<?php echo $data['id_produk'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?');">
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