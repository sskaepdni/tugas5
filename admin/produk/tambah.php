    <section class="content">
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header text-center">
                            <h2>TAMBAH DATA PRODUK</h2>
                        </div>
                        <div class="body">
                            <form method="post" action="">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <label>Nama</label>
                                            <input type="text" name="nama_produk" class="form-control" placeholder="nama produk ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Harga</label>
                                            <input type="number" name="harga_produk" class="form-control" placeholder="Harga produk ..." required="" autocomplete="off">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Keterangan</label>
                                            <textarea rows="3"  name="keterangan_produk" class="form-control" placeholder="Keterangan ..." required="" autocomplete="off"></textarea>
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

    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $keterangan_produk = $_POST['keterangan_produk'];



    $mysqlCek = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk='$nama_produk'");
    $ada = mysqli_num_rows($mysqlCek);

    if ($ada == 1) {
        echo "<script>alert('Maaf nama produk sudah ada silahkan input nama produk yang lain');</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=produk/tambah'>";
    }else{

        $input = mysqli_query($koneksi, "INSERT INTO produk VALUES('', '$nama_produk', '$harga_produk', '$keterangan_produk')");
        if ( $input) {
            echo "<script>alert('Sukses');</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'>";
        }else{
            echo "<meta http-equiv='refresh' content='0; url=?page=produk/tambah'>";
        }

    }



}


 ?>