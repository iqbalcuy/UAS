<?php
include '../koneksi.php';
    $delete = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = '".$_GET["id"]."' ");
    if ($delete) {
        header('location:produk.php');
        
    }else{
        echo'gagal';
    }

?>