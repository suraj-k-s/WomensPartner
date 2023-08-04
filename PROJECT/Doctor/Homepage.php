<?php
include('head.php');
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>womens partner</title>
<style>
    .thumb {
      background-color: #ffffff;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
      padding-top: 2rem;
    }

    img {
      max-height: 200px !important;
      width: auto !important;
    }

    #post {
      padding: 3rem 8rem;
    }
    .text-white>p{
      color:white !important;
      font-size:16px;
    }

    .doctorprofile{
      padding: 3rem 8rem; 
    }

    .profilepicture{
      margin-right: 2rem;
    }

    .profiletop{
      display: flex;
    }

    .profiletitle{
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }
    p.subtitle{
      font-size: 16px;
    font-weight: 400;
    text-transform: uppercase;
    }
    .profiledetails{
      margin: 2rem 0;
      display: flex;
      gap:1rem;
      margin-left: 180px;
    }
    .actionbtn{
      display: flex;
      flex-direction: column;
      gap: 1rem;
      align-items: flex-end;
      justify-content: flex-end;
      width: 100%;
    }
    
  </style>
</head>
<?php
$selqry="select * from tbl_doctor r inner join tbl_place p on p.place_id=r.place_id inner join tbl_district d on d.district_id=p.district_id inner join tbl_department n on n.department_id where doctor_id='".$_SESSION['did']."'";
$res=$conn->query($selqry);
$data=$res->fetch_assoc();
?>
<body>
 <div class="doctorprofile">
    <div class="profiletop text-white">
      
        <div class="profilepicture"> <img src="../Assets/Images/<?php echo $data['doctor_photo']?>" /></div>
        <div class="profiletitle text-white">
          <h1>Dr.<?php echo $data['doctor_name'];?></h1>
          <p class="subtitle">MBBS <?php echo $data['department_name'];?></p> 
        </div>
        <div class="actionbtn">
        <a class="btn btn-primary" href="Editprofile.php">Edit Profile</a>
        <a class="btn btn-primary" href="Changepassword.php">Change Password</a>
      </div>
        
    </div>
    <div class="profiledetails">
      <div class="lefthanddetails text-white">
        <p>Email:</p>
        <p>Contact:</p>
        <p>Address:</p>
        <p>District:</p>
        <p>Place:</p>
      </div>
      <div class="rightdhanddetails text-white">
        <p><?php echo $data['doctor_email'];?></p>
        <p><?php echo $data['doctor_contact'];?></p>
        <p><?php echo $data['doctor_address'];?></p>
        <p><?php echo $data['district_name'];?></p>
        <p><?php echo $data['place_name'];?></p>
      </div>
      

    </div>
  </div>
<?php
include('footer.php');
?>
</html>