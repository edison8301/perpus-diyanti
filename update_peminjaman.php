<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_buku= $_POST['buku'];
$nama_anggota = $_POST['anggota'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE peminjaman SET id_buku='$nama_buku', id_anggota='$nama_anggota', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:peminjaman.php");
 
?>