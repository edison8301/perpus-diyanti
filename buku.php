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
  <table class="table table-bordered">
    <thead>
       <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tahun Terbit</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th>Sampul</th>
        <th>Berkas</th>
        <th>Aksi</th>
      </tr>
    </thead>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){ ?>
			<tbody>
  			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tahun_terbit']; ?></td>
				<td><?php echo $d['id_penulis']; ?></td>
				<td><?php echo $d['id_penerbit']; ?></td>
				<td><?php echo $d['id_kategori']; ?></td>
				<td><img src="image/<?php echo $d['sampul']; ?>" width="100" height="100" /></td>
				<td><a href="download.php?id=<?php echo $d['berkas'] ?>">Download Berkas</a></td>	
				<td>
					<a href="edit_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
					<a href="hapus_buku.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin dihapus ?');" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
					<a href="detail_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-view"></span>View</a>
				</td>
		<?php } ?>
			</tr>
    </tbody>
  </table> 
</div>
</body>
</html>


