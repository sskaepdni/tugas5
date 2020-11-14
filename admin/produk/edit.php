    <?php 

    $mysql = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
    $data = mysqli_fetch_array($mysql);
?>

    <section class="content">
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header text-center">
                            <h2>EDIT DATA PRODUK</h2>
                        </div>
                        <div class="body">
                            <form method="post" action="">
                                <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'] ?>">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <label>Nama</label>
                                            <input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>" class="form-control" placeholder="nama produk ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Harga</label>
                                            <input type="number" name="harga_produk" value="<?php echo $data['harga_produk'] ?>" class="form-control" placeholder="Harga produk ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Keterangan</label>
                                            <textarea rows="3"  name="keterangan_produk" class="form-control" placeholder="Keterangan ..." required="" autocomplete="off"><?php echo $data['keterangan_produk'] ?></textarea>
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


    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $keterangan_produk = $_POST['keterangan_produk'];




        $input = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', keterangan_produk='$keterangan_produk' WHERE id_produk='$id_produk'");
        if ( $input) {
            echo "<script>alert('Sukses');</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=produk/edit&id_produk=$id_produk'>";
        }else{
            echo "<script>alert('Terjadi kesalahan saat input data, coba ulangi kembali');</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=produk/edit&id_produk=$id_produk'>";
        }





}


 ?>