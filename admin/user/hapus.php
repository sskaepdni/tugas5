<?php 

    $mysql = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$_GET[id_user]'");
   
    if ($mysql) {
    	echo "<script>alert('Sukses');</script>";
    	echo "<meta http-equiv='refresh' content='0; url=?page=user/index'>";
    }else{
    	echo "<script>alert('Terjadi kesalahan saat input data, coba ulangi kembali');</script>";
    	echo "<meta http-equiv='refresh' content='0; url=?page=user/index'>";
    }

?>