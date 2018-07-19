<?php 
// koneksi database 
include 'koneksi.php';
// menangkap data 
$nama = $_POST['nama'];
$tahun_terbit = $_POST['tahun_terbit'];
$id_penulis = $_POST['id_penulis'];
$id_penerbit = $_POST['id_penerbit'];
$id_kategori = $_POST['id_kategori'];
$sinopsis = $_POST['sinopsis'];
 //$berkas = $_POST['berkas']; -->
$target_sampul = "image/";
$target_berkas = "documents/";

 //upload file berkas -->
$namaBerkas = $_FILES['berkas']['name'];
$namaBerkasSementara = $_FILES['berkas']['tmp_name'];

 // upload file sampul -->
$namaSampul = $_FILES['sampul']['name'];
$namaSementara = $_FILES['sampul']['tmp_name']; 

 // Check if image file is a actual image or fake  -->

    // echo $nama;
    // echo $tahun_terbit;
    // echo $sinopsis;
    // echo $kategori;

    // exit();

    $uploadBerkas = move_uploaded_file($namaBerkasSementara, $target_berkas.$namaBerkas);
    $uploadSampul = move_uploaded_file($namaSementara, $target_sampul.$namaSampul);
    if($uploadBerkas && $uploadSampul){
    	$input = mysqli_query($koneksi,"insert into buku(id, nama, tahun_terbit, id_penulis, id_penerbit, id_kategori, sinopsis, sampul, berkas) values('','$nama','$tahun_terbit','$id_penulis','$id_penerbit','$id_kategori','$sinopsis','$namaSampul','$namaBerkas')");
    	if($input){
    		 // mengalihkan halaman kembali ke  -->index.php
			header("location:buku.php");
		}else{
			echo mysqli_error($koneksi);
		}
    }else{
    	echo "berkas". $_FILES['berkas']['error'];
    	echo "sampul". $_FILES['sampul']['error'];
    }

?>