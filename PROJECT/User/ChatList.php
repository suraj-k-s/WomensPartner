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
                $selchat = "select * from tbl_chatlist where from_id='".$_SESSION['uid']."' or to_id='".$_SESSION['uid']."'";
                $res=$conn->query($selchat);
                while($data=$res->fetch_assoc())
                {
                    if($data['chat_type']=='USER' && $data['from_id']!=$_SESSION['uid']){
                        $selUser="select * from tbl_user where user_id=".$data['from_id'];
                        $resUser=$conn->query($selUser);
                        $rowUser=$resUser->fetch_assoc();
                        $chatPath="UChat.php?id=".$data['from_id'];
                        $name=$rowUser['user_name'];
                        $photo=$rowUser['user_photo'];
                    }
                    else if($data['chat_type']=='USER' && $data['to_id']!=$_SESSION['uid']){
                        $selUser="select * from tbl_user where user_id=".$data['to_id'];
                        $resUser=$conn->query($selUser);
                        $rowUser=$resUser->fetch_assoc();
                        $chatPath="UChat.php?id=".$data['to_id'];
                        $name=$rowUser['user_name'];
                        $photo=$rowUser['user_photo'];
                    }
                    else if($data['chat_type']=='DOCTOR' && $data['to_id']!=$_SESSION['uid']){
                        $selUser="select * from tbl_doctor where doctor_id=".$data['to_id'];
                        $resUser=$conn->query($selUser);
                        $rowUser=$resUser->fetch_assoc();
                        $chatPath="DChat.php?id=".$data['to_id'];
                        $name=$rowUser['doctor_name'];
                        $photo=$rowUser['doctor_photo'];
                    }
                    else{
                        $selUser="select * from tbl_doctor where doctor_id=".$data['from_id'];
                        $resUser=$conn->query($selUser);
                        $rowUser=$resUser->fetch_assoc();
                        $chatPath="DChat.php?id=".$data['from_id'];
                        $name=$rowUser['doctor_name'];
                        $photo=$rowUser['doctor_photo'];
                    }
                ?>
                <hr>
                <a href="<?php echo $chatPath ?>" class="chatlink">
                    <div class="msg">
                        <div class="chatphoto">
                            <img src="../Assets/Images/<?php echo $photo ?>" alt="avatar">
                        </div>
                        <div class="chat_details">
                            <div class="user_details">
                                <div class="name">
                                    <?php echo $name; ?>
                                </div>
                                <div class="message">
                                    <?php echo $data['chat_content']; ?>
                                </div>
                            </div>
                            <div class="datetime">
                                <?php echo $data['chat_datetime']; ?>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
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