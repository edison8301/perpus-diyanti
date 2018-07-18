<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link href="../assets/css/style_admin.css" rel="stylesheet">
  
</head>
<body>
  <!-- Header -->

  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <a href="index.php" class="navbar-brand"> Website Perpustakaan</a>
    <div class="navbar-header">

    </div>
  </nav>

  
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav">
        <ul class="nav nav-pills nav-stacked">

          <li><a href="index.php?page=index">Dashboard</a></li>
          <li><a href="index.php?page=anggota">Anggota</a></li>
          <li><a href="buku.php">Buku</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="peminjaman.php">Peminjaman</a></li>
          <li><a href="penerbit.php">Penerbit</a></li>
          <li><a href="penulis.php">Penulis</a></li>
          <li><a href="petugas.php">Petugas</a></li>
          <li><a href="user_role.php">User_role</a></li>
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </div>
      <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span> -->

        <div class="col-sm-9">

          <?php
          include 'konten.php';
          ?>

 <!-- <table class="table table-hover">
  <?php
//include 'index.php'
  ?> -->
<!--     <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table> -->

</div>
</div>
</div>

<!-- <footer class="container-fluid">
  <a href="anggota.php"></a>

</footer>
-->
</body>
</html>
