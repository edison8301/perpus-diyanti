<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan </title>
</head>
<body>
 
	<h2>Edit Anggota</h2>
	<br/>
	<a href="anggota.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data Anggota</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from anggota where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_anggota.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="text" name="telepon" value="<?php echo $d['telepon']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
					<tr>
					<td>Status Aktif</td>
					<td><input type="text" name="status_aktif" value="<?php echo $d['status_aktif']; ?>"></td>
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