<?php
/*Project Name : commodity online.com
  purpose      : Admin password Changed
  created date : 15 nov /2006
  created by   : Aneesh:B.S   
  */
 include_once("../includes/dbClass.php");
 include_once("logincheck.php");
 $cmdClass = new dbClass();
 $cmdClass ->getConnection();
if(isset($_REQUEST["Submit"])) //submit for password change 
 {
  $old_pass=$_REQUEST["oldpass"];
  $cpass   =$_REQUEST["cpass"]; 
   
  $sql="SELECT * FROM adminlogin WHERE AD_PASSWORD='$old_pass' AND AD_ID ='".$_SESSION['ses_id']."'";
  $result=$cmdClass->ExecuteQuery($sql);
  $num=$cmdClass->getNumberRows($result);
  if($num!=0)
      {
	  $sql2="UPDATE adminlogin SET AD_PASSWORD='$cpass' WHERE AD_ID ='".$_SESSION['ses_id']."'";
	 $result=$cmdClass->ExecuteQuery($sql2);
	  header("location:controlsystem.php?sec_id=1&cat=1&msg=Your Password changed Sucessfully");
	  exit();
		}
		
	else {
	      header("location:controlsystem.php?sec_id=1&cat=1&msg=Your old password is incorrect");
		  exit();
	
	    }	 
  
 } //end of form submit


?>

<html>
<head>
<script>
function validate() //validate
{
if(document.frmpasswd.oldpass.value=="")
  {
  alert("please enter the oldpassword!");
  document.frmpasswd.oldpass.focus();
  return false;
    }
if(document.frmpasswd.newpass.value=="")
   {
   alert("please enter the newpassword");
   document.frmpasswd.newpass.focus();
   return false;
    }
	if(document.frmpasswd.cpass.value=="")
   {
   alert("please enter the confirmpassword");
   document.frmpasswd.cpass.focus();
   return false;
    }
 if(document.frmpasswd.cpass.value!=document.frmpasswd.newpass.value)
   { 
    alert("password mismatched");
	document.frmpasswd.newpass.value="";
	document.frmpasswd.cpass.value="";
	document.frmpasswd.newpass.focus();
	return false;
	}	
	
return true;

}
</script>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/commoditystyle.css" rel="stylesheet" type="text/css">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="javscript:document.frmpasswd.oldpass.focus();">
<form name="frmpasswd" method="post" action="" onSubmit="javascript:return validate();">
  <table width="337" height="166" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="center"> 
      <td height="26" colspan="2" class="errortxt"><?php echo $_REQUEST['msg']; ?></td>
    </tr>
    <tr> 
      <td width="166" height="33" class="labeltxt">Old password</td>
      <td width="174"><input name="oldpass" type="password" class="txtbox"></td>
    </tr>
    <tr> 
      <td height="39" class="labeltxt">New password</td>
      <td><input name="newpass" type="password" class="txtbox"></td>
    </tr>
    <tr> 
      <td height="26" class="labeltxt">Confirm Password</td>
      <td><input name="cpass" type="password" class="txtbox"></td>
    </tr>
    <tr align="center"> 
      <td colspan="2"><input name="Submit" type="submit" class="subbox" value="Submit"></td>
    </tr>
  </table>
</form>
</body>
</html>
