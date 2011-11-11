<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
if(isset($_REQUEST['edit_subject'])){
 $sql="UPDATE sectionmaster SET SEC_NAME='".trim($_REQUEST['subject'])."' WHERE SEC_ID=".$_REQUEST['edit_subject'];
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=7&cat=2");
 exit();
}

if(isset($_REQUEST['Submit'])){
 $sql="INSERT INTO sectionmaster  (SEC_NAME) VALUES('".trim($_REQUEST['subject'])."')";
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=7&cat=1");
 exit();
}
if(isset($_REQUEST['edid'])){
 $sql ="select * from sectionmaster where  SEC_ID=".$_REQUEST['edid'];
 $result=$cmdClass->ExecuteQuery($sql);
 $obj = $cmdClass->getObject($result);
 $subject = $obj->SEC_NAME;
}
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function validate(){
if(document.form.state.value==""){
alert("Enter State Name");
document.form.state.focus();
return false;
}
}
function delete_validate()//COnfirmation to delete
 
{
  if (confirm("Are you sure you want to delete the classifieds Watch Details?")==true)
    return true;
  else
    return false;
}
</script>
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"><br>
  <span class="logintext"> Subject </span></div>
<form name="form" method="post" action="" onSubmit="return validate();">
  <table width="342" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="89">&nbsp;</td>
      <td width="253">&nbsp;</td>
    </tr>
    <tr> 
      <td height="53" class="labeltxt">Subject</td>
      <td><input name="subject" type="text" class="longtxtbox" id="state2" value="<?PHP echo $subject; ?>"></td>
    </tr>
    <tr> 
      <td height="29">&nbsp;</td>
      <td align="center">
	  <?PHP
	  if(isset($_REQUEST['edid'])){
	   echo "<input type='hidden' name='edit_subject' value=".$_REQUEST['edid'].">";
	  }
	  ?>
	  <input name="Submit" type="submit" class="subbox" value="Submit">&nbsp;
        <input name="Submit2" type="reset" class="subbox" value="Reset"> </td>
    </tr>
  </table>

</form>
  </body>
</html>
