<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
if(isset($_REQUEST['del_id'])){
 $sql ="DELETE FROM newsletter  WHERE NL_ID =".$_REQUEST['del_id'];
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=8&cat=3");
 exit();
}
if(isset($_REQUEST['edit_mail'])){
 $sql ="select * from newsletter where  NL_EMAIL ='".$_REQUEST['email']."'";
 $result=$cmdClass->ExecuteQuery($sql);
 $num  = $cmdClass->getNumberRows($result);
 if($num == 0){
 $sql="UPDATE newsletter  SET NL_EMAIL ='".trim($_REQUEST['email'])."' WHERE NL_ID =".$_REQUEST['edit_mail'];
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=8&cat=2&msg=Mail id updated");
 exit();
} else{
 header("location:controlsystem.php?sec_id=8&cat=2&msg=This mail id exists");
 exit();
 }
}

if(isset($_REQUEST['Submit'])){
 $sql ="select * from newsletter where  NL_EMAIL ='".$_REQUEST['email']."'";
 $result=$cmdClass->ExecuteQuery($sql);
 $num  = $cmdClass->getNumberRows($result);
 if($num == 0){
 $sql="INSERT INTO newsletter   (NL_EMAIL ) VALUES('".trim($_REQUEST['email'])."')";
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=8&cat=2&msg=Mail id Added");
 exit();
 }else{
 header("location:controlsystem.php?sec_id=8&cat=2&msg=This mail id exists");
 exit();
 }
}
if(isset($_REQUEST['edid'])){
 $sql ="select * from newsletter where  NL_ID =".$_REQUEST['edid'];
 $result=$cmdClass->ExecuteQuery($sql);
 $obj = $cmdClass->getObject($result);
 $mail = $obj->NL_EMAIL ;
}
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function mailvalidate() // mail validation
{
if(document.frm_mail.email.value=="")
  {
 alert("Please Enter the mailid");
 document.frm_mail.email.focus();
 return false;
  }
  if (echeck(document.frm_mail.email.value)==false)
  {
	document.frm_mail.email.focus();
	return false;
  }
}
function echeck(str) { //check mail id in correct format

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }	
	}
</script>
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center"><br>
  <span class="logintext"> Newsletter Subscriber</span></div>
<form name="frm_mail" method="post" action="" onSubmit="return mailvalidate();">
  <table width="401" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="89" height="29">&nbsp;</td>
      <td width="312" class="errortxt"><?php echo $_REQUEST['msg']; ?></td>
    </tr>
    <tr> 
      <td height="25" class="labeltxt">E-Mail Id</td>
      <td><input name="email" type="text" class="longtxtbox" id="state2" value="<?PHP echo $mail; ?>"></td>
    </tr>
    <tr> 
      <td height="29">&nbsp;</td>
      <td align="center">
	  <?PHP
	  if(isset($_REQUEST['edid'])){
	   echo "<input type='hidden' name='edit_mail' value=".$_REQUEST['edid'].">";
	  }
	  ?>
	  <input name="Submit" type="submit" class="subbox" value="Submit"></td>
    </tr>
  </table>

</form>
  </body>
</html>
