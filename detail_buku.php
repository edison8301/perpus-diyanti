<!DOCTYPE html>
<html>
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
<h3>Detail Buku</h3>
<br>
<br>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Sinopsis</th>
		<th>Sampul</th>

	</tr>
<?php 
		include 'koneksi.php';
		$id = $_GET['id'];
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM buku WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['id_kategori']; ?></td>
				<td><?php echo $d['sinopsis']; ?></td>
				<td><img src="image/<?php echo $d['sampul']; ?>" width="100" height="100" /></td>
			</tr> 
			<?php 
		}
		?>
	</table>
	</form>
	</div>
</div>
</div>
</body>
</body>
</html>
