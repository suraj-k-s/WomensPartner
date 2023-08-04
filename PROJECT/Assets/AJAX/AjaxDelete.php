<?php 
session_start();
include("../Connection/Connection.php");
 $del = "delete from tbl_user where user_id='".$_SESSION["uid"]."'";
        if($conn->query($del))
        {
           echo "true";
          }
          else{
            echo "false";
          }
          ?>

