<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
</head>
<body>
<h3>Tambah Data Buku</h3>
<br>
<a href="buku.php"><input type="button" value="kembali"></a>
<br>
<br>
<h3>Tambah Data Buku</h3>
<form method="post" action="aksi_tambah_buku.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="date" name="tahun_terbit">
				
				</td>
			</tr>

			<tr>
			<td>Penulis </td>
			<td>
			<?php
			include 'koneksi.php';
			$read_penulis = mysqli_query($koneksi, "SELECT * FROM penulis"); 
			?>
			<select name="penulis">
				<option>Pilih penulis</option>
				<?php
				if ($read_penulis->num_rows> 0 ) {
					while ($data = $read_penulis->fetch_assoc()) {
						?>
						<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
					<?php
					}
				}
				  ?>
				  </td>
			</select>
			</tr>
			<tr>

			<tr>
			<td>Penerbit </td>
			<td>
			<?php
			include 'koneksi.php';
			$read_penerbit = mysqli_query($koneksi, "SELECT * FROM penerbit"); 
			?>
			<select name="penerbit">
				<option>Pilih penerbit</option>
				<?php
				if ($read_penerbit->num_rows> 0 ) {
					while ($data = $read_penerbit->fetch_assoc()) {
						?>
						<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
					<?php
					}
				}
				  ?>
				  </td>
			</select>
			</tr>
			<tr>
				
			<td>Kategori </td>
			<td>
			<?php
			include 'koneksi.php';
			$read_kategori = mysqli_query($koneksi, "SELECT * FROM kategori"); 
			?>
			<select name="kategori">
				<option>Pilih kategori</option>
				<?php
				if ($read_kategori->num_rows> 0 ) {
					while ($data = $read_kategori->fetch_assoc()) {
						?>
						<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
					<?php
					}
				}
				  ?>
				  </td>
			</select>
			</tr>

			<tr>
				<td>Sinopsis</td>
				<td><textarea name="sinopsis"></textarea></td>
			</tr>
			<tr>
				<td>Sampul</td>
				<td><input type="file" name="sampul" class="inputfile"></td>
				
			</tr>
			<tr>
				<td>Berkas</td>
				<td><input type="file" name="berkas" class="inputfile"></td>		
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-info"></td>
			</tr>		
		</table>
	</form>
</body>
</html>