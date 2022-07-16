<?php 
  require '../koneksi.php';
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/home-admin.css">
    <link rel="stylesheet" href="../account.css">
  </head>
  <body>
    <div class="wrapper">
      <aside class="sidebar">
        <img src="../img/akun.png" width="100px" style=" display: block; margin-left: auto; margin-right: auto;">
        <p class="text"><h3>Selamat Datang <?php echo $_SESSION['username']; ?></h3></p>
        <menu>
          <ul class="menu-content">
            <li><a href="home-admin.php"><i class="fa fa-user"></i> Data User</a></li>
            <li><a href="produk.php"><i class=""></i> +input</a></li>
            <li><a href="komentar.php"><i class="fa fa-comments-o"></i> <span>Komentar</span></a></li>
            <li><a href="../index.html"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="foto" id=""><br>
          <input type="text" name="nama" placeholder="kue"><br>
          <input type="text" name="keterangan" placeholder="keterangan"><br>
          <input type="text" name="harga" placeholder="harga"><br>
          <input type="submit" name="simpan" value="simpan">
          </form>
          <?php
          if(isset($_POST['simpan'])){
            $folder='./produk/';
            $nama_k=$_FILES['foto']['name'];
            $sumber_p=$_FILES['foto']['tmp_name'];
           
            $insert=mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL,'".$nama_k."','".$_POST['nama']."','".$_POST['keterangan']."','".$_POST['harga']."',NULL)");
            if($insert){
              echo "berhasil disimpan";
            }else{
              echo " gagal disimpan";
            }
          }
          
               ?>
                <h2>Data Gambar</h2>
               <?php 
               $query = mysqli_query($koneksi,"SELECT * FROM produk");
               while($row = mysqli_fetch_array($query)){
                 ?>
                  <div class="datagambar">
           
            <table border="1" style="width: 100px;">
            
              <tr>
                <td><?php echo$row['nama'] ?></td>
                <td><?php echo$row['foto'] ?></td>
                <td><?php echo$row['harga'] ?></td>
                <td>
                  <a href="edit.php?id=<?php echo$row['id_produk'] ?>" >edit</a>
                  <a href="hapus.php?id=<?php echo$row['id_produk'] ?>"> hapus</a>
                </td>
              </tr>
            </table>
          </div>
            <?php   } ?>
               
         
      </section>
    </div>
    </body>
</html>