<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
<h3>Detail Buku</h3>
<a href="buku.php">Kembali</a>
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
		$data = mysqli_query($koneksi,"select * from buku where id='$id'");
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
</body>
</html>
