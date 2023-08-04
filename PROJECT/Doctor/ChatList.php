<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<?php
include('head.php');
?>

<body>

    <div class="container" align="center">
        <div class="chatlist">
            <div class="chats">
                <!-- <ul class="list-unstyled chat-list mt-2 mb-0">
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                        <div class="about">
                            <div class="name">Vincent Porter</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                        </div>
                    </li>
                </ul> -->
                <div class="title">
                    <h2>Messages</h2>
                </div>
                <?php
                $sellist="select * from tbl_chatlist where from_id='".$_SESSION['did']."' or to_id='".$_SESSION['did']."'";
                $res=$conn->query($sellist);
                while($row=$res->fetch_assoc())
                {
                    if($row['chat_type']=='DOCTOR'){
                        $selUser="select * from tbl_user where user_id=".$row['from_id'];
                        $resUser=$conn->query($selUser);
                        $rowUser=$resUser->fetch_assoc();
                        $cid=$row['from_id'];
                        $count = $resUser->num_rows;
                    }
                    else{
                        $selUser="select * from tbl_user where user_id=".$row['to_id'];
                        $rowUser=$resUser->fetch_assoc();
                        $cid=$row['to_id'];
                    }
                ?>
                <hr>
                <?php
                 if($count>0)
                 {

                              ?>
                <a href="UChat.php?id=<?php echo $cid ?>" class="chatlink">
                    <div class="msg">
                        <div class="chatphoto">
                            <img src="../Assets/Images/<?php echo $rowUser['user_photo'] ?>" alt="avatar">
                        </div>
                        <div class="chat_details">
                            <div class="user_details">
                                <div class="name">
                                    <?php echo $rowUser['user_name']; ?>
                                </div>
                                <div class="message">
                                    <?php echo $row['chat_content']; ?>
                                </div>
                            </div>
                            <div class="datetime">
                                <?php echo $row['chat_datetime']; ?>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
                }
                else{
                    echo "<h4>No Messages Found</h4>";
                }
            }
                ?>
            </div>
        </div>
    </div>

</body>
<?php
include('footer.php');
?>

</html>