<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Peminjaman</title>
</head>
<body>
<h3>Tambah Data Peminjaman</h3>
<br>
<a href="peminjaman.php">Kembali</a>
<br>
<br>
<form method="post" action="aksi_tambah_peminjaman.php">
		<table>

			<tr>	
			<td>Buku </td>
			<td>
			<?php
			
			$read_buku = mysqli_query($koneksi, "SELECT * FROM buku"); 
			?>
			<select name="id_buku">
				<option>Pilih buku</option>
				<?php
				if ($read_buku->num_rows> 0 ) {
					while ($data = $read_buku->fetch_assoc()) {
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
			<td>Anggota</td>
			<td>
			<?php
			
			$read_anggota = mysqli_query($koneksi, "SELECT * FROM anggota"); 
			?>
			<select name="id_anggota">
				<option>Pilih Anggota</option>
				<?php
				if ($read_buku->num_rows> 0 ) {
					while ($data = $read_anggota->fetch_assoc()) {
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
				<td>Tanggal Pinjam</td>
				<td><input type="date" name="tanggal_pinjam"></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="date" name="tanggal_kembali"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>