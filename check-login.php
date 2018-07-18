<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config/koneksi_login.php';
 if (isset($_POST['username']) && isset($_POST['password']) ) {
	    
		$sql = "SELECT * FROM user WHERE username=? AND password=? LIMIT 1";

	    $check = $dbconnect->prepare($sql);
	    $check->bind_param('ss', $username, $password);
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
 	    $check->execute();
	    $check->store_result();

		if ( $check->num_rows == 1 ) {
	        $check->bind_result($username, $password);
	        
	        while ( $check->fetch() ) {
	            $_SESSION['password']    = $password;
	            $_SESSION['nama']       = $username;
	            
	        }


	        $check->close();
	        header('location:index.php');
	        exit();
	    }
	    else {
	        header('location: login.php?error='.base64_encode('Username atau Password Salah!!!'));
	        exit();
	    }
	}
    else {
    	// header('location:login.php');
    	// exit();
    	var_dump($sql);
	}


menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>