<?php
include('head.php');
?>
<?php
session_start();
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Untitled Document</title>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48 color: black !important;
    }

    .thumb {
      background-color: #ffffff;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
      padding-top: 2rem;
    }

    img {
      max-height: 400px !important;
      width: auto !important;
    }

    #post {
      padding: 3rem 8rem;
    }

    .post_header {
      padding-bottom: 17px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0 4rem;
    }

    .action {
      padding: 1rem 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0 4rem;
    }

    .dark {
      color: black !important;
      transition: .3s;
    }

    .dark:hover {
      color: blue !important;
    }
  </style>
</head>

<body>
  <div id="tab" align="center">
    <!-- Loop Start -->
    <?php
    $display="select * from tbl_post where user_id!=".$_SESSION['uid'];
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
 	  while($data=$res->fetch_assoc())
	  {
      $name = "";
      $photo = "";
      if($data['user_id']=="0")
      {

     
      $nameQry="select * from tbl_doctor where doctor_id='".$data['doctor_id']."'";
  $res1=$conn->query($nameQry);
  if($data1=$res1->fetch_assoc())
  {
    $name = $data1['doctor_name'];
      $photo = $data1['doctor_photo'];
  }
}
if($data['doctor_id']=="0")
      {

     
      $nameQry="select * from tbl_user where user_id='".$data['user_id']."'";
      $res1=$conn->query($nameQry);
      if($data1=$res1->fetch_assoc())
      {
        $name = $data1['user_name'];
          $photo = $data1['user_photo'];
      }
}
 	  
		  ?>


    <div class="container" id="post">
      <div class="row">
        <div class="col-lg-12">
          <div class="meeting-single-item">
            <div class="thumb">
              <div class="description post_header" style="padding-bottom:17px">
                <div class="user_name">
                  <div class="fill" 
                    style="background-image: url('../Assets/Images/<?php echo $photo?>'); width: 50px; height: 50px; border-radius: 50%; background-size: cover;">
                  </div>
                  <span style="padding-left: 11px;">
                    <?php echo $name?>
                  </span>
                </div>
                <div>
                  <a class="dark" href="Postcomplaint.php?pid=<?php echo $data['post_id']?>">Report</a>
                </div>
              </div>
              <?php
            if($data['post_file']!=0){
              ?>
              <img src="../Assets/Images/<?php echo $data['post_file']?>" alt="<?php echo $data['post_file']?>">
              <?php
          }
          ?>
            </div>
            <div class="down-content">
              <h4 class="title">
                <?php echo $data['post_title']?>
              </h4>
              <p align="center" class="description">
                <?php echo $data['post_content']?>
              </p>
              <div class="action">

                <a href="Comment.php?pid=<?php echo $data['post_id']?>"><span class="material-symbols-outlined dark ">
                    Comment
                  </span></a>
                  <?php if($data['user_id']!=0){ ?>
                  <a href="UChat.php?id=<?php echo $data['user_id']?>">Talk</a>
                  <?php } else {?>
                    <a href="DChat.php?id=<?php echo $data['doctor_id']?>">Talk</a>
                    <?php
                  }
                  ?>
                <p class="datetime">
                  <?php echo $data['post_datetime']?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Loop End -->
    <?php
  }
  }
  ?>
  </div>
</body>
<?php
include('footer.php');
?>

</html>