<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan </title>
</head>
<body>
 
	<h2>Edit User Role</h2>
	<br/>
	<a href="user_role.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data User Role</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user_role where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_user_role.php">
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