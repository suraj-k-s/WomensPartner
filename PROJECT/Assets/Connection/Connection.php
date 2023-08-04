<?php
$username="root";
$servername="localhost";
$password="";
$database="db_wp";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
	die("Connection Failed" .mysqli_connect_error());
}
?>