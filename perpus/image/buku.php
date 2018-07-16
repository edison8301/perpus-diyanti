
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<h3>Data Buku</h3>
<a href="index.php" class="btn btn-info" role="button" padding = "50px">Kembali ke Awal</a>
<br>
<br>
<a href="tambah_buku.php" class="btn btn-success" role="button">+Tambah Buku</a>
<br>
<br>
<div class="container">            
  <table class="table table-striped">
    <thead>
       <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tahun Terbit</th>
        <th>Sinopsis</th>
        <th>Sampul</th>
        <th>Berkas</th>
        <th>Aksi</th>
      </tr>
    </thead>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<tbody>
  			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tahun_terbit']; ?></td>
				<td><?php echo $d['sinopsis']; ?></td>
				<td><?php echo $d['sampul']; ?></td>
				<td><a href="download.php?id=<?php echo $row['berkas'] ?>">Download Berkas</a></td>	
				<td>
					<a href="edit_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-warning" role="button">Edit</a>
					<a href="hapus_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-danger" role="button">Hapus</a>
				</td>
			</tr>
    </tbody>
  </table>
</div>
		<?php 
		}
		?>
	</table>
</div>
</body>
</html>

</table>
</body>
</html>