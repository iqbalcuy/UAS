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
    <title>Komentar</title>

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
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KueAnda</a>
        </div>
      </nav>
      <aside class="sidebar">
      <img src="../img/akun.png" width="100px" style=" display: block; margin-left: auto; margin-right: auto;">
        <p class="text"><h3>Selamat Datang <?php echo $_SESSION['username']; ?></h3></p>
        <menu>
          <ul class="menu-content">
            <li><a href="home-admin.php"><i class="fa fa-user"></i> Data User</a></li>
            <li><a href="produk.php"><i class=""></i> +<span>input</span></a></li>
            <li><a href="komentar.php"><i class="fa fa-comments-o"></i> <span>Komentar</span></a></li>
            <li><a href="../index.html"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
            <table border="1">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Komentar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      require '../koneksi.php';
                      $sql = "SELECT * FROM komentar ORDER BY nama ASC";
                      $query = mysqli_query($koneksi,$sql);
                      $no=1;
                      while ($mhs = mysqli_fetch_array($query)) {
                    ?>
                  <tr align="center">

                    
                    <td><?php echo "$mhs[nama]"; ?></td>
                    <td><?php echo "$mhs[email] "; ?></td>
                    <td><?php echo "$mhs[komen] "; ?></td>
                    <td>
                    <a href="hapuskomen.php?id=<?php echo$mhs['id_pass'] ?>"> hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                  <?php 
                  $batas = 1; // jumlah data yang akan di tampilkan diubah sesuai keibginan biasanya 10 halaman
                  // Cari halaman variabel GET jika tidak ditemukan defaultnya adalah 1.
                  if (isset($_GET["halaman"])) {
                  $halaman = $_GET["halaman"];
                  }
else {
$halaman=1;
}
//Menentukan angka awal (LIMIT sql) untuk jumlah data yang ditampilkan
$posisi = ($halaman-1) * $batas;
$sql = "SELECT * FROM komentar LIMIT $posisi, $batas"; 
$query = mysqli_query ($koneksi, $sql);
$no=1;
 ?>
                </tbody>
            </table>
        </div>
        <div>
          <?php
$sql = "SELECT COUNT(*) FROM komentar";
$rs_result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_row($rs_result);
$jumlah_data = $row[0];
echo "</br>";
// Jumlah halaman yang dibutuhkan
$jumlah_halaman = ceil($jumlah_data / $batas);
$pagLink = "";
if($halaman>=1){
echo "Halaman : <a href='komentar.php?halaman=".($halaman-1)."'>| Prev </a>";
}
for ($i=1; $i<=$jumlah_halaman; $i++) {
if ($i == $halaman) {
$pagLink .= "<a href='komentar.php?halaman=".$i."'>| ".$i." |</a>";
}
else {
$pagLink .= "<a href='komentar.php?halaman=".$i."'> ".$i." </a>";
}
};
echo $pagLink; 
if($halaman<$jumlah_halaman){
  echo "<a href='komentar.php?halaman=".($halaman+1)."'> Next </a>";
  }
  ?> 
      </section>
    </div>
    </body>
</html>