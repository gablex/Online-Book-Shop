<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

if(isset($_REQUEST["Submit"])) // submit form
{
$name        = $_REQUEST["name"];
$Description = addslashes($_REQUEST["Description"]);
$insrtsql    = "insert into authermaster (AUTH_NAME) values('$name')";
$result      = $cmdClass->ExecuteQuery($insrtsql);
?>
<script language="JavaScript">
window.opener.location.reload(true);
window.close();
</script>
<?PHP
} // End Of submit form
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
  <table width="72%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center">
      <td height="29" colspan="2" class="errortxt"><?php echo $_REQUEST["msg"];?></td>
    </tr>
    <tr> 
      <td width="18%" height="36" class="labeltxt">Name</td>
      <td width="82%"><input name="name" type="text" class="longtxtbox" value="<?php echo $obj->AUTH_NAME;?>"></td>
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
return true;

}
</script>