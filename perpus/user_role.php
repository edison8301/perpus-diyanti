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
<h3>Data User Role</h3>
<a href="index.php" class="btn btn-info" role="button" padding = "50px">Kembali ke menu utama</a>
<br>
<br>
<a href="tambah_user_role.php" class="btn btn-success" role="button"> +Tambah User Role</a>
<br>
<br>
<div class="container">         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
		<th>Nama</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>

	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user_role");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td>
					<a href="edit_user_role.php?id=<?php echo $d['id']; ?>"class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil">Edit</a>
					<a href="hapus_user_role.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin dihapus ?');" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
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
