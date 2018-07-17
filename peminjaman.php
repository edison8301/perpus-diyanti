<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h3>Data Peminjaman</h3>
<a href="index.php" class="btn btn-info" role="button" padding = "50px">Kembali ke menu utama</a>
<br>
<br>
<a href="tambah_peminjaman.php" class="btn btn-success" role="button"> +Tambah Peminjaman</a>
<br>
<br>
<div class="container">         
  <table class="table table-bordered">
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
					<a href="edit_peminjaman.php?id=<?php echo $d['id']; ?>"class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil">Edit</a>
					<a href="hapus_peminjaman.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin dihapus ?');" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
 </tbody>
 </table>
</div>
</body>
</html>
