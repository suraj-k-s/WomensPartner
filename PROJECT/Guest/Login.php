<?php
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$email=$_POST["txtemailid"];
	$password=$_POST["txtpassword"];
	$user="select * from tbl_user where user_email='".$email."' and user_password= '".$password."'";
	$doctor="select * from tbl_doctor where doctor_email='".$email."' and doctor_password= '".$password."'";
	$admin="select * from tbl_admin where admin_email='".$email."'and admin_password='".$password."'";
	$res1=$conn->query($user);
	$res2=$conn->query($doctor);
	$res3=$conn->query($admin);
    if($res1->num_rows>0)
	{
		$data=$res1->fetch_assoc();
		$_SESSION['uid']=$data['user_id'];
		$login="select * from tbl_login where user_id=".$data['user_id'];
		$res4=$conn->query($login);
		if($res4->num_rows>0)
		{
			$updQry="update tbl_login set login_status=1, login_date=curdate() where user_id=".$data['user_id'];
			$conn->query($updQry);
		}
		else{
			$insQry="insert into tbl_login(user_id, login_date) values(".$data['user_id'].",curdate())";
			$conn->query($insQry);
		}
		header("location: ../User/Homepage.php");
		
	}
	else if($res2->num_rows>0)
	{
		$data=$res2->fetch_assoc();
		$_SESSION['did']=$data['doctor_id'];
		header("location: ../Doctor/Homepage.php");
		
	}
	else if($res3->num_rows>0)
	{
		$data=$res3->fetch_assoc();
		$_SESSION['aid']=$data['admin_id'];
		header("location: ../Admin/Homepage.php");
	    
	}
	else
	{
	?><script>alert("invalid credentials");</script><?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/Template/Guest/Login/css/style.css">
	<title>Document</title>
	<style>
		.messagecolor{
			font-size:11px;
		}
		</style>
</head>
<body>
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form class="login" name="form1" method="post" action="">
					<div class="login__field">
						<input style="padding-left:0px;" type="text" class="login__input" placeholder="Email-id" id="txtemailid" name="txtemailid" onblur="validateEmail()"/>
						<br>
						<span  class="messagecolor" id="emailValidationMessage"></span>
					</div>
					<div class="login__field">
						<input style="padding-left:0px;" type="password" class="login__input" placeholder="Password" id="txtpassword" onkeyup="validatePassword()" name="txtpassword" />
						<br><span class="messagecolor"  id="passwordValidationMessage"></span>
					</div>
					<input type="submit" name="btnsubmit" class="button login__submit" value="Log In Now">
				</form>
				
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>		
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>		
		</div>
	</div>
</body>
<script>

  function validatePassword() {
    const passwordInput = document.getElementById('txtpassword');
    const passwordValidationMessage = document.getElementById('passwordValidationMessage');
    const password = passwordInput.value;

    // Regular expression for password validation
    // Here, we are checking for a minimum of 8 characters and at least one uppercase letter and one number
    const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (password === '') {
      passwordValidationMessage.textContent = 'Password is required';
      passwordValidationMessage.style.color = 'red';
    } else if (!passwordRegex.test(password)) {
      passwordValidationMessage.textContent = 'Password must be at least 8 characters  contain at least one uppercase letter  and one number';
      passwordValidationMessage.style.color = 'red';
    } else {
      passwordValidationMessage.textContent = 'Password is strong';
      passwordValidationMessage.style.color = 'green';
    }
  }

  function validateEmail() {
    const emailInput = document.getElementById('txtemailid');
    const emailValidationMessage = document.getElementById('emailValidationMessage');
    const email = emailInput.value.trim();

    // Regular expression for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === '') {
      emailValidationMessage.textContent = 'Email address is required';
      emailValidationMessage.style.color = 'red';
    } else if (!emailRegex.test(email)) {
      emailValidationMessage.textContent = 'Invalid email address';
      emailValidationMessage.style.color = 'red';
    } else {
      emailValidationMessage.textContent = 'Email address is valid';
      emailValidationMessage.style.color = 'green';
    }
  }
</script>

</html>