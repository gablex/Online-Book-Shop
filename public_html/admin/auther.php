<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

include("FCKeditor/fckeditor.php") ;
	$oFCKeditor1 = new FCKeditor('Description') ;
	$oFCKeditor1->BasePath = 'FCKeditor/';
	$oFCKeditor1->Width    = '100%' ;
	$oFCKeditor1->Height   = '500' ;
	
if(isset($_REQUEST["Submit"])) // submit form
{
$name        = $_REQUEST["name"];
$Description = addslashes($_REQUEST["Description"]);
$id=  $_REQUEST["edid"];
 if(!$id)
  {
$insrtsql    = "insert into authermaster (AUTH_NAME ,AUTH_DESC) values('$name','$Description')";
$result      = $cmdClass->ExecuteQuery($insrtsql);
header("location:controlsystem.php?sec_id=5&cat=1&msg=Details+Entered+Sucessfully");
exit();
  }
 else
   {
  $updatQuery="UPDATE  authermaster SET AUTH_NAME='$name',AUTH_DESC='$Description' WHERE AUTH_ID='$id'";
  $result=$cmdClass->ExecuteQuery($updatQuery);
  header("location:controlsystem.php?sec_id=5&cat=2&edit_id=$id&msg=Details+Updated+Sucessfully");
  exit();
   
   } 


} // End Of submit form
if(isset($_REQUEST["edid"]))
 {
$edit_id   = $_REQUEST["edid"];
$disquery   = "SELECT * from authermaster WHERE AUTH_ID='$edit_id'";
$res        = $cmdClass->ExecuteQuery($disquery);
$obj        = $cmdClass->getObject($res);
$ex_name    = $obj->AUTH_NAME;
$ex_details = stripslashes($obj->AUTH_DESC);
$oFCKeditor1->Value=$ex_details;
}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="frm_exchange" method="post" action="" onSubmit="return validate();">
  <div align="center"><span class="logintext">Auther Details</span><br>
  </div>
  <table width="82%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center"><td height="29" colspan="2" class="errortxt"><?php echo $_REQUEST["msg"];?></td></tr>
	<tr> 
      <td width="18%" height="36" class="labeltxt">Name</td>
      <td width="82%"><input name="name" type="text" class="longtxtbox" value="<?php echo $obj->AUTH_NAME;?>"></td>
    </tr>
    <tr> 
      <td height="23" class="labeltxt">Details</td>
      <td>
        <?php $oFCKeditor1->Create(); ?>
      </td>
    </tr>
	<input type="hidden" name="edid" value="<?php echo $edit_id;?>">
    <tr align="center"> 
      <td colspan="2"><input name="Submit" type="submit" class="subbox" value="Submit"></td>
      
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

</body>
</html>
<script>
function validate()
{
if(document.frm_exchange.name.value=="")
  {
   alert("please enter the name!");
   document.frm_exchange.name.focus();
   return false;
  }
/*if(document.frm_exchange.Description.value=="")
  {
   alert("please enter the Description!");
   document.frm_exchange.Description.focus();
   return false;
  } */
return true;

}
</script>