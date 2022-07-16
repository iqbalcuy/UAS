<?php
include '../koneksi.php';
    $delete = mysqli_query($koneksi, "DELETE FROM komentar WHERE id_pass = '".$_GET["id"]."' ");
    if ($delete) {
        header('location:komentar.php');
        
    }else{
        echo'gagal';
    }

?>