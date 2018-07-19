<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$id_anggota = $_POST['id_anggota'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into peminjaman values('','$id_buku','$id_anggota','$tanggal_pinjam','$tanggal_kembali')");
 
// mengalihkan halaman kembali ke index.php
header("location:peminjaman.php");
 
?>