<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$contact=$_POST["txtcontact"];
	$place=$_POST["selplace"];
	$address=$_POST["txtaddress"];
	$password=$_POST["txtpassword"];
	$confirmpassword=$_POST["txtconfirm"];
	$photo=$_FILES["filephoto"]["name"];
	$temp=$_FILES["filephoto"]["tmp_name"];
	move_uploaded_file($temp,'../Assets/Images/'.$photo);
	$proof=$_FILES["fileproof"]["name"];
	$temp=$_FILES["fileproof"]["tmp_name"];
	move_uploaded_file($temp,'../Assets/Images/'.$proof);
    $insqry="insert into tbl_user (user_name,user_email,user_contact,place_id,user_address,user_password,user_photo,user_proof) value('".$name."','".$email."','".$contact."','".$place."','".$address."','".$password."','".$photo."','".$proof."')";
if($conn->query($insqry))
		{
            ?>
            <script>alert("Registerd Successfully");</script>
           <?php 
		
		}
		else
		{
            ?>
			<script>alert("Registration Failed");</script>
            <?php
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Assets/Template/Guest/Registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Assets/Template/Guest/Registration/css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../Assets/Template/Guest/Registration/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" enctype="multipart/form-data" action="" id="register-form">
                        <h2>user registration form</h2>
                        
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="txtname" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email ID :</label>
                                <input type="email" name="txtemail" id="txtemailid" onblur="validateEmail()" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com|in)$"/>
                                

                                <span  class="messagecolor" id="emailValidationMessage"></span>
                            </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="txtaddress" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>                           
                            <input type="text" name="txtcontact" id="phoneNumberInput" onblur="validatePhoneNumber()" required/>
                            <span id="phoneNumberValidationMessage"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district">District :</label>
                                <div class="form-select">
                                    <select name="seldistrict" id="state" onchange="getPlace(this.value)">
                                        <option value=""></option>
                                        <?php
	  $district="select * from tbl_district";
	  $res=$conn->query($district);
	  if($res->num_rows>0)
		 {
			 while($data=$res->fetch_assoc())
			 {
				 ?>
                 <option value="<?php echo $data['district_id'];?>"><?php echo $data['district_name'];?></option>
                 <?php
			 }
		 }
		 ?>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="place">Place :</label>
                                <div class="form-select">
                                    <select name="selplace" id="selplace">
                                        <option value=""></option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo :</label>
      <input type="file" name="filephoto"id="filephoto" />
                        </div>
                        <div class="form-group">
                            <label for="proof">Proof :</label>
                            <input type="file" name="fileproof"id="proof">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Password :</label>
                                <div class="form-select">
                                    <input type="password" name="txtpassword" id="txtpassword" onkeyup="validatePassword()" id="password">
                                </div>
                                <span class="messagecolor"  id="passwordValidationMessage"></span>
                            </div>
                            <div class="form-group">
                                <label for="city">Confirm Password :</label>
                                <div class="form-select">
                                    <input type="password" name="txtconfirm" id="confirmpassword">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Register" class="submit" name="btnsubmit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../Assets/Template/Guest/Registration/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/Template/Guest/Registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script src="../Assets/JQ/jQuery.js"></script>
<script>
    function validatePhoneNumber() {
    const phoneNumberInput = document.getElementById('phoneNumberInput');
    const phoneNumberValidationMessage = document.getElementById('phoneNumberValidationMessage');
    const phoneNumber = phoneNumberInput.value.trim();

    // Regular expression for Indian phone number validation
    // Supports mobile numbers and landline numbers with area codes
    const phoneNumberRegex = /^[6-9]\d{9}$|^[0-9]{2,4}-[0-9]{7,8}$/;

    if (phoneNumber === '') {
      phoneNumberValidationMessage.textContent = 'Phone number is required';
      phoneNumberValidationMessage.style.color = 'red';
    } else if (!phoneNumberRegex.test(phoneNumber)) {
      phoneNumberValidationMessage.textContent = 'Invalid phone number';
      phoneNumberValidationMessage.style.color = 'red';
    } else {
      phoneNumberValidationMessage.textContent = 'Phone number is valid';
      phoneNumberValidationMessage.style.color = 'green';
    }
  }
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
function getPlace(did)
{
	$.ajax({
		url:"../Assets/AJAX/AjaxPlace/AjaxPlace.php?pid="+did,
		success: function(html){
			$("#selplace").html(html);
		}
	});
}
</script>
</html>