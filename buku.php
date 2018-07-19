<!DOCTYPE html>
<html lang="en">
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
          <br>
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
        <h3>Data Buku</h3>
        <br>

      <a href="tambah_buku.php" class="btn btn-info" role="button">Tambah Buku</a>
    <br>
    <br>
<div class="table-responsive">         
  <table class="table table-bordered table-striped table-hover">
    <thead>
       <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tahun Terbit</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th>Sampul</th>
        <th>Berkas</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){ ?>
			<tbody>
  			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tahun_terbit']; ?></td>
				<td><?php echo $d['id_penulis']; ?></td>
				<td><?php echo $d['id_penerbit']; ?></td>
				<td><?php echo $d['id_kategori']; ?></td>
				<td><img src="image/<?php echo $d['sampul']; ?>" width="100" height="100" /></td>
				<td><a href="download.php?id=<?php echo $d['berkas'] ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>	

				<td>
					<a href="edit_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="hapus_buku.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin dihapus ?');" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a>

					<a href="detail_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-paperclip"></span></a>
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


