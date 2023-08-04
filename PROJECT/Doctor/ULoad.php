<?php
include("../Assets/Connection/Connection.php");
session_start();

$selQry = "select * from tbl_chat c inner join tbl_doctor d on (c.from_doctorid=d.doctor_id) or (c.to_doctorid=d.doctor_id) inner join tbl_user u on (u.user_id=c.from_userid) or (u.user_id=c.to_userid) where (c.to_doctorid='" . $_SESSION["did"] . "' or c.from_doctorid='" . $_SESSION["did"] . "') and u.user_id='".$_GET['id']."' order by c.chat_id";

$rowdis = $conn->query($selQry);
while ($datadis = $rowdis->fetch_assoc()) {
    if ($datadis["from_userid"] == $_GET["id"]) {

?>

        <div class="chat-message is-received">
            <img src="../Assets/Images/<?php echo $datadis["user_photo"] ?>" alt="">
            <div class="message-block">
                <span><?php echo $datadis["user_name"] ?></span>
                <div class="message-text"><?php echo $datadis["chat_content"] ?></div>
            </div>
        </div>
        <div class="chat-message" style="margin: 0px; padding: 0px">

        </div>

    <?php
    } else{

    ?>
        <div class="chat-message is-sent">
            <img src="../Assets/Images/<?php echo $datadis["doctor_photo"] ?>" alt="">
            <div class="message-block">
                <span><?php echo $datadis["doctor_name"] ?></span>
                <div class="message-text"><?php echo $datadis["chat_content"] ?></div>
            </div>
        </div>
        <div class="chat-message" style="margin: 0px; padding: 0px">

        </div>
<?php
    }
}



?>