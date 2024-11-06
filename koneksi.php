<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_online_shop_2024";

$conn = mysqli_connect($servername,$username,$password,$db);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>