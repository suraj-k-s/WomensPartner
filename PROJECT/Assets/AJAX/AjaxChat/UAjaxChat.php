<?php
include("../../Connection/Connection.php");
session_start();

    $insQry="insert into tbl_chat (chat_datetime, from_doctorid, to_userid, chat_content) values(CURRENT_TIMESTAMP(),'".$_SESSION['did']."','".$_GET["id"]."','".$_GET["chat"]."')";
    if($conn->query($insQry))
    {
        echo "sended";
    }
    else
    {
        echo "failed";
    }
    $selQry="SELECT * from tbl_chatlist where (from_id='".$_SESSION['did']."' or to_id='".$_SESSION['did']."') and (from_id='".$_GET["id"]."' or to_id='".$_GET["id"]."')";
    $result=$conn->query($selQry);
    if($result->num_rows>0)
    {
        $updQry="UPDATE tbl_chatlist set chat_content='".$_GET['chat']."', chat_datetime=CURRENT_TIMESTAMP() where (from_id='".$_SESSION['did']."' or to_id='".$_SESSION['did']."') and (from_id='".$_GET["id"]."' or to_id='".$_GET["id"]."')";
        if($conn->query($updQry))
        {
            echo "List Updated";
        }
        else
        {
            echo "List Updation failed";
        }
    }
    else
    {
        $insQryL="insert into tbl_chatlist(from_id, to_id, chat_content, chat_datetime, chat_type) values('".$_SESSION['did']."','".$_GET['id']."','".$_GET['chat']."',CURRENT_TIMESTAMP(), 'DOCTOR')";
        if($conn->query($insQryL))
        {
            echo "List Inserted";
        }
        else
        {
            echo "List Insertion Failed";
        }
    }
?>
