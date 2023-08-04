<?php
session_start();
include("../Assets/Connection/Connection.php");
$selqry="select * from tbl_doctor where doctor_id='".$_SESSION['did']."'";
$res=$conn->query($selqry);
$data=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Template Mo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>WOMEN'S PARTNER</title>

  <!-- Bootstrap core CSS -->
  <link href="../Assets/Template/User/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../Assets/Template/User/assets/css/fontawesome.css">
  <link rel="stylesheet" href="../Assets/Template/User/assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="../Assets/Template/User/assets/css/owl.css">
  <link rel="stylesheet" href="../Assets/Template/User/assets/css/lightbox.css">
  <link rel="stylesheet" href="../Assets/Template/css/form.css" />

</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              WOMEN'S PARTNER
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="homepage.php">Home</a></li>
              <li><a href="Addpost.php">Add Post</a></li>
              <li><a href="Mypost.php">My Post</a></li>
              <li><a href="ChatList.php">My Chat</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)"><?php echo $data['doctor_name'];?></a>
                <ul class="sub-menu">
                  <!-- <li><a href="Myprofile.php">MY PROFILE</a></li> -->
                  <!-- <li><a href="Mycomplaint.php">MY COMPLAINT</a></li> -->
                  <li><a href="../Guest/">LOG OUT</a></li>
                </ul>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>WELCOME TO</h6>
          <h2>WOMEN'S PARTNER</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="meetings-page" id="meetings">