<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
if(isset($_REQUEST["Submit"])) // submit form
{
$section        = $_REQUEST["section"];
$Description = addslashes($_REQUEST["Description"]);
$id=  $_REQUEST["id"];
 if(!$id)
  {
$insrtsql    = "insert into miscsections (misc_cat,misc_content) values('$section','$Description')";
$result      = $cmdClass->ExecuteQuery($insrtsql);
$id          = $cmdClass->getlastid();
header("location:controlsystem.php?sec_id=9&cat=1&msg=Details+Entered+Sucessfully");
exit();
  }
 else
   {
  $updatQuery="UPDATE  miscsections SET misc_cat=$section,misc_content='$Description' WHERE misc_id='$id'";
  $result=$cmdClass->ExecuteQuery($updatQuery);
  header("location:controlsystem.php?sec_id=9&cat=1&msg=Details+Edited+Sucessfully");
  exit();
   
   } 


} // End Of submit form
if(isset($_REQUEST["section"]))
 {
$edid   = $_REQUEST["section"];
$disquery   = "SELECT * from miscsections WHERE misc_id='$edid'";
$res        = $cmdClass->ExecuteQuery($disquery);
$obj        = $cmdClass->getObject($res);
$cat    = $obj->misc_cat;
$ex_details = stripslashes($obj->misc_content);
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
  <div align="center"><span class="logintext">Miscellanious Section</span><br>
  </div>
  <table width="82%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center"><td height="29" colspan="2" class="errortxt"><?php echo $_REQUEST["msg"];?></td></tr>
	<tr> 
      <td width="18%" height="36" class="labeltxt">Name</td>
      <td width="82%"><select name="section" class="txtbox" id="section" onChange="document.frm_exchange.submit();">
          <option value="0">Select</option>
          <option value="1" <?PHP if($edid==1) echo "selected";?>>About Us</option>
          <option value="2" <?PHP if($edid==2) echo "selected";?>>Privacy Policy</option>
        </select></td>
    </tr>
    <tr> 
      <td height="23" class="labeltxt">Details</td>
      <td><textarea name="Description" class="bigtxteng" id="Description"><?PHP echo $ex_details; ?></textarea></td>
    </tr>
	<?PHP
	if(isset($_REQUEST['section'])){
	?> 
	<input type="hidden" name="id" value="<?php echo $_REQUEST['edid'];?>">
	<?PHP
	}
	?>
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
if(document.frm_exchange.section.value=="")
  {
   alert("please select section");
   document.frm_exchange.section.focus();
   return false;
  }
if(document.frm_exchange.Description.value=="")
  {
   alert("please enter the Description!");
   document.frm_exchange.Description.focus();
   return false;
  } 
return true;

}
</script>