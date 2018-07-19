<?php

error_reporting(0);
include 'koneksi.php';
$get=$_GET['page'];
 
if ( empty($get))
{
   include ('login.php');    
}
//======================================================== > ADMIN
elseif ($get=='dashboard_admin')
{
  include ('fungsi/Admin/dashboard.php');
}