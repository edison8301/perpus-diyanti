<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<h3>Data Peminjaman</h3>
<br>
<a href="tambah_peminjaman.php" class="btn btn-info" role="button"> Tambah Peminjaman</a>
<br>
<br>

<div class="table-responsive">         
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>No</th>
		<th>Buku</th>
		<th>Anggota</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>

	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from peminjaman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_buku']; ?></td>
				<td><?php echo $d['id_anggota']; ?></td>
				<td><?php echo $d['tanggal_pinjam']; ?></td>
				<td><?php echo $d['tanggal_kembali']; ?></td>
				<td>
					<a href="edit_peminjaman.php?id=<?php echo $d['id']; ?>"class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></a>

					<a href="hapus_peminjaman.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin dihapus ?');" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<?php 
		}
		?>
 </tbody>
 </table>
</div>
</div>
</div>
</div>
</body>
</html>
