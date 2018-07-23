<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>

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

<h3>Tambah Data Peminjaman</h3>

<form method="post" action="aksi_tambah_peminjaman.php">
	<br>
		
				<div class="form-group row">
      			<div class="col-xs-4">

			<label for="sel1">Buku</label>

			<?php
			
			$read_buku = mysqli_query($koneksi, "SELECT * FROM buku"); 
			?>
			<select name="id_buku" class="form-control">
				<option>Pilih Buku</option>
				<?php
				if ($read_buku->num_rows> 0 ) {
					while ($data = $read_buku->fetch_assoc()) {
						?>
						<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
					<?php
					}
				}
				  ?>
				  
			</select>
			<br>
			
			<label for="sel1">Anggota</label>			
			<?php
			
			$read_anggota = mysqli_query($koneksi, "SELECT * FROM anggota"); 
			?>
			<select name="id_anggota" class="form-control">
				<option>Pilih Anggota</option>
				<?php
				if ($read_buku->num_rows> 0 ) {
					while ($data = $read_anggota->fetch_assoc()) {
						?>
						<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
					<?php
					}
				}
				  ?>
				  
			</select>
			<br>

			<label for="sel1">Tanggal Pinjam</label>
			<input type="date" name="tanggal_pinjam" class="form-control">
			<br>

			<label for="sel1">Tanggal Kembali</label>
			 <input type="date" name="tanggal_kembali" class="form-control">
			 <br>

				<input type="submit" value="Simpan" class="btn btn-info">		
		</table>
	</form>
	</div>
</div>
</div>
</body>
</html>