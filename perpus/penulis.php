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
<h3>Data Penulis</h3>
<br>
<a href="index.php">Kembali</a>
<br>
<a href="tambah_penulis.php"> +Tambah Penulis</a>
<br>
<br>
<div class="container"> 
<table class="table table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Email</th>
		<th>OPSI</th>
	</tr>
	</thead>
	    <tbody>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penulis");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['telepon']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td>
					<a href="edit_penulis.php?id=<?php echo $d['id']; ?>"class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
					<a href="hapus_penulis.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin dihapus ?');" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
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

