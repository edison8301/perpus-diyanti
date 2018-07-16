<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user_role values('','$nama')");
 
// mengalihkan halaman kembali ke index.php
header("location:user_role.php");
 
?>