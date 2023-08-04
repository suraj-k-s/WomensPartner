<?php
$name="";
$gender="";
$marital="";
$department="";
$basicsalary="";
$TA="";
$DA="";
$HRA="";
$LIC="";
$PF="";
$DEDUCTION="";
$NET="";
if(isset($_POST["btnsubmit"]))
{
	$firstname=$_POST["txtfname"];
	$lastame=$_POST["txtlname"];
	$gender=$_POST["radiogender"];
	$marital=$_POST["radiomarital"];
	$department=$_POST["seldept"];
    $basicsalary=$_POST["txtsal"];
	$name=$firstname." ".$lastame;
	if($basicsalary>10000)
	{
		$DA=$basicsalary*.35;
		$TA=$basicsalary*.40;
		$HRA=$basicsalary*.30;
		$LIC=$basicsalary*.25;
		$PF=$basicsalary*.20;
	}
	elseif($basicsalary>=5000&&$basicsalary<10000)
	{
		$TA=$basicsalary*.35;
		$DA=$basicsalary*.30;
		$HRA=$basicsalary*.25;
		$LIC=$basicsalary*.20;
		$PF=$basicsalary*.15;
	}
	elseif($basicsalary<5000)
	{
		$TA=$basicsalary*.30;
		$DA=$basicsalary*.20;
		$HRA=$basicsalary*.20;
		$LIC=$basicsalary*.15;
		$PF=$basicsalary*.10;
	}
	$DEDUCTION=$LIC+$PF;
	$NET=$basicsalary+$TA+$DA+$HRA-($LIC+$PF);
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
<form id="form1" name="form1" method="post" action="">
  <table width="400" border="1">
    <tr>
      <td width="207">Firstname</td>
      <td width="177"><label for="txtfname"></label>
      <input type="text" name="txtfname" id="txtfname" /></td>
    </tr>
    <tr>
      <td>Lastname</td>
      <td><label for="txtlname"></label>
      <input type="text" name="txtlname" id="txtlname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="radiogender" id="radgender" value="male" />
        Male
          <label for="radgender"></label>
      <input type="radio" name="radiogender" id="radgender2" value="female" />
      Female
      <label for="radgender2"></label></td>
    </tr>
    <tr>
      <td>Marital</td>
      <td><input type="radio" name="radiomarital" id="radmarital" value="single" />
        Single 
          <input type="radio" name="radiomarital" id="radmarital2" value="married" />
          Married
          <label for="radmarital2"></label>        <label for="radmarital"></label></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="seldep"></label>
        <label for="seldept"></label>
        <select name="seldept" id="seldept">
          <option>Select dept</option>
          <option>IT</option>
          <option>English</option>
      </select></td>
    </tr>
    <tr>
      <td height="50">Basic salary      </td>
      <td><label for="txtsal"></label>
      <input type="text" name="txtsal" id="txtsal" /></td>
    </tr>
    <tr>
      <td  align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />        </td>
      <td align="center"><input type="submit" name="btnreset" id="btnreset" value="cancel" />      
      </td>
    </tr>
  </table>
  
</form>
<table width="491" border="1">
    <tr>
      <td width="233"><p>Name</p></td>
      <td width="351"><?php echo $name;?></td>
    </tr>
    
    <tr>
      <td>Gender</td>
      <td><?php echo $gender;?></td>
    </tr>
    <tr>
    <td>Marital</td>
    <td><?php echo $marital;?></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><?php echo $department;?></td>
    </tr>
    <tr>
      <td>Basic salary</td>
      <td><?php echo $basicsalary;?></td>
    </tr>
    <tr>
      <td>T.A</td>
      <td><?php echo $TA;?></td>
    </tr>
    <tr>
      <td>D.A</td>
      <td><?php echo $DA;?></td>
    </tr>
    <tr>
      <td>HRA</td>
      <td><?php echo $HRA;?></td>
    </tr>
    <tr>
      <td>LIC</td>
      <td><?php echo $LIC;?></td>
    </tr>
    <tr>
      <td>PF</td>
      <td><?php echo $PF;?></td>
    </tr>
    <tr>
      <td>DEDUCTION</td>
      <td><?php echo $DEDUCTION;?></td>
    </tr>
    <tr>
      <td height="35">NET</td>
      <td><?php echo $NET;?></td>
    </tr>
  </table>
</body>
</html>
