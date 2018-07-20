<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
 
	 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <a href="index.php" class="navbar-brand"> Website Perpustakaan</a>
    <div class="navbar-header">

    </div>
  </nav>

  
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <ul class="nav nav-pills nav-stacked">
          <br>


          <li><a href="index.php">Dashboard</a></li>
          <li><a href="anggota.php">Anggota</a></li>
          <li><a href="buku.php">Buku</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="peminjaman.php">Peminjaman</a></li>
          <li><a href="penerbit.php">Penerbit</a></li>
          <li><a href="penulis.php">Penulis</a></li>
          <li><a href="petugas.php">Petugas</a></li>
          <li><a href="logout.php">Logout</a></li>
        
        </ul>
      </div>

      <div class="col-sm-9">
 
 	<h3>Edit Data Kategori</h3>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from kategori where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_kategori.php">
						
				<div class="form-group row">
      			<div class="col-xs-4">         
      				<label for="ex2">Nama Kategori</label>

						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
						<br>
					
					<input type="submit" value="Simpan" class="btn btn-info">
			</form>
		<?php 
	}
	?>
 
 </div>
</div>
</div>

</body>
</html>