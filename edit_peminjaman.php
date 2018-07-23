<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="../assets/css/style_admin.css" rel="stylesheet">
</head>
<body>
	
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <a href="index.php" class="navbar-brand"> Website Perpustakaan</a>
    <div class="navbar-header">
    </div>
  </nav>

   <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <ul class="nav nav-pills nav-stacked">
          <br>

          <li><a href="index.php">Dashboard</a></li>
          <li><a href="anggota.php">Anggota</a></li>
          <li><a href="buku.php">Buku</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="peminjaman.php">Peminjaman</a></li>
          <li><a href="penerbit.php">Penerbit</a></li>
          <li><a href="penulis.php">Penulis</a></li>
          <li><a href="petugas.php">Petugas</a></li>
          <li><a href="logout.php">Logout</a></li>
          
       </ul>
      </div>

       <div class="col-sm-9">

	<h3>Edit Data Peminjaman</h3>
 
	<?php
	
  include "koneksi.php";
   if (isset($_GET['id'])) {

                    $id = ($_GET["id"]);

                    $query = "SELECT * FROM peminjaman WHERE id='$id'";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result){
                        die ("Query Error: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                    }

                    $data = mysqli_fetch_assoc($result);
                                    
                    } else {

                    header("location:peminjaman.php");
                    }

		?>	

		<form method="post" action="update_peminjaman.php">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<br>
			<div class="form-group row">
      			<div class="col-xs-4">
              <label for="ex2">Buku</label>
              <select name="buku" class="form-control">
        <?php
        $query = "SELECT * FROM buku";
        $hasil = mysqli_query($koneksi, $query);
        $tampil = mysqli_num_rows($hasil);

        if ($tampil> 0) {
          while ($dat = mysqli_fetch_assoc($hasil)) {
            if($dat['id']==$data['id_buku']){
              ?>
              <option value="<?php echo $dat['id']; ?>" selected="selected" ><?php echo $dat['nama'];?></option>
              <?php
             }else{
              ?>
              <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
              <?php
             }
          }
        }
        ?>
</select>
  
      <br>

      <label for="ex2">Anggota</label>
      <select name="anggota" class="form-control">
        <?php
        $query = "SELECT * FROM anggota";
        $hasil = mysqli_query($koneksi, $query);
        $tampil = mysqli_num_rows($hasil);

        if ($tampil> 0) {
          while ($dat = mysqli_fetch_assoc($hasil)) {
            if($dat['id']==$data['id_anggota']){
              ?>
              <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
              <?php
             }else{
              ?>
              <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
              <?php
             }
          }
        }
        ?>
</select>
<br>

<label for="ex2">Tanggal Pinjam</label>
          <input type="date" class="form-control" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam']; ?>">
          <br>
<label for="ex2">Tanggal Kembali</label>
          <input type="date" class="form-control" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali']; ?>">
          <br>

          <input type="submit" value="Simpan" class="btn btn-info">
            
      </table>
    </form>
 </div>
</div>
</div>

</body>
</html>