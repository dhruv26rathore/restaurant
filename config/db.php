<?php
$server = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "database";
$conn = mysqli_connect($server,$user,$pass,$dbname);
if (!$conn){
 die("connection failed!". mysqli_connect_error());	
}
?>