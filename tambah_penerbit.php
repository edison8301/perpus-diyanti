<!DOCTYPE html>
<html>
<head>
	<title>Tambah Penerbit</title>
</head>
<body>
<h3>Tambah Data Penerbit</h3>
<br>
<a href="penerbit.php">Kembali</a>
<br>
<br>
<h3>Tambah Data Penerbit</h3>
<form method="post" action="aksi_tambah_penerbit.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea> </td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>