<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

 $sql="SELECT * FROM specialoffer";
 $res = $cmdClass->ExecuteQuery($sql);
 $obj = $cmdClass->getObject($res);
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function validate() 
{
if(document.frm_mail.image.value=="")
  {
 alert("Please browse an Image");
 document.frm_mail.image.focus();
 return false;
  }
  
}


</script>
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center">
  <p><br>
    <span class="logintext"> Special Offer Banner</span></p>
  <p>&nbsp;</p>
</div>
</body>
</html>
