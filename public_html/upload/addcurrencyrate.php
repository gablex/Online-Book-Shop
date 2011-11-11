<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
	
if(isset($_REQUEST["Submit"])) // submit form
{

  $updatQuery="UPDATE  currencyrate SET cur_rupeerate=".$_REQUEST['currate'];
  $result=$cmdClass->ExecuteQuery($updatQuery);
  header("location:controlsystem.php?sec_id=10&cat=1&msg=Details+Edited+Sucessfully");
  exit();

} // End Of submit form

if(isset($_REQUEST["SubmitEuro"])) // submit form
{

  $updatQuery="UPDATE  currencyrate SET cur_eurorate=".$_REQUEST['currateeuro'];
  $result=$cmdClass->ExecuteQuery($updatQuery);
  header("location:controlsystem.php?sec_id=10&cat=1&msg2=Details+Edited+Sucessfully");
  exit();

} // End Of submit form

	$sqlQuery = "SELECT cur_rupeerate,cur_eurorate FROM currencyrate";
	$result   = $cmdClass->ExecuteQuery($sqlQuery);
	$obj      = $cmdClass->getObject($result);
	$curRate  = $obj->cur_rupeerate;
	$curEuro  = $obj->cur_eurorate;
	$curId    = $obj->cur_id;
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<form name="frm_exchange" method="post" action="" onSubmit="return validate();">
  
 <div align="center"><span class="logintext">Indian Rupee Rate aganist US$ </span> 
  [For 1 US$]<br>
  </div>
  
 <table width="57%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr align="center">
   <td height="29" colspan="2" class="errortxt"><?php echo $_REQUEST["msg"];?></td>
  </tr>
  <tr> 
   <td width="53%" height="36" class="labeltxt"> Indian Rupee rate aganist US$ 
    [For 1 USD] </td>
   <td width="47%">
    <input name="currate" type="text" class="txtbox" id="currate" value="<?=$curRate?>">
   </td>
  </tr>
  <tr align="center"> 
   <td colspan="2"><input name="Submit" type="submit" class="subbox" value="UPDATE "></td>
  </tr>
 </table>
 <div align="center"></div>
 <p>&nbsp;</p>
</form>

<form name="form1" method="post" action="">
 <div align="center"> 
  <p><span class="logintext">Euro Rate aganist US$ </span> [For 1 US$]<br>
  </p>
 </div>
 <table width="57%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr align="center"> 
   <td height="29" colspan="2" class="errortxt"><?php echo $_REQUEST["msg2"];?></td>
  </tr>
  <tr> 
   <td width="53%" height="36" class="labeltxt">Euro
    rate aganist US$ [For 1 USD] </td>
   <td width="47%"> <input name="currateeuro" type="text" class="txtbox" id="currateeuro" value="<?=$curEuro ?>"> 
   </td>
  </tr>
  <tr align="center"> 
   <td colspan="2"><input name="SubmitEuro" type="submit" class="subbox" id="SubmitEuro" value="UPDATE "></td>
  </tr>
 </table>
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