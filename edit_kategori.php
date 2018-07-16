<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan </title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="kategori.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data Kategori</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from kategori where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_kategori.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>