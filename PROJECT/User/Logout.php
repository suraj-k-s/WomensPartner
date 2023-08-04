<?php
include("../Assets/Connection/Connection.php");
session_start();
$updQry="update tbl_login set login_status=0 where user_id=".$_SESSION['uid'];
$conn->query($updQry);
$_SESSION["uid"]="";
header("location:../Guest/")
?>