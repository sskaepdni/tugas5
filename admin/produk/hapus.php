<?php 

    $mysql = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$_GET[id_produk]'");
   
    if ($mysql) {
    	echo "<script>alert('Sukses');</script>";
    	echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'>";
    }else{
    	echo "<script>alert('Terjadi kesalahan saat input data, coba ulangi kembali');</script>";
    	echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'>";
    }

?>