<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['kategori'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kategori values('','$nama')");
 
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");
 
?>