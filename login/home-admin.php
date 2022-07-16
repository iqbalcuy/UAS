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
            <table border="1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Level</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      require '../koneksi.php';
                      $sql = "SELECT * FROM users ORDER BY id ASC";
                      $query = mysqli_query($koneksi,$sql);
                      $no=1;
                      while ($mhs = mysqli_fetch_array($query)) {
                    ?>
                  <tr align="center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo "$mhs[username] "; ?></td>
                    <td><?php echo "$mhs[id] "; ?></td>
                    <td><?php echo "$mhs[email] "; ?></td>
                    <td><?php echo "$mhs[password]"; ?></td>
                    <td><?php echo "$mhs[level]"; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
        <p>Jumlah User: <?php echo mysqli_num_rows($query) ?></p>
      </section>
    </div>
    </body>
</html>