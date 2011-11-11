<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
if(isset($_REQUEST['del']) && $_REQUEST['del']=="Y"){
 $sql = "DELETE FROM specialoffer";
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=2&cat=5?msg=Banner Removed");
 exit();
}
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center"><br>
  <span class="logintext"> Offer Banner</span></div>
<form action="" method="post" enctype="multipart/form-data" name="frm_mail" onSubmit="return validate();">
  <table width="552" height="81" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td colspan="2">  <div align="center">
						   <?PHP
						    $sql="SELECT * FROM specialoffer";
							$offer = $cmdClass->ExecuteQuery($sql);
							if($cmdClass->getNumberRows($offer)>0){
							$obj = $cmdClass->getObject($offer);
							echo '<img src="../images/'.$obj->SP_IMAGE.'" width="478" height="155" border="0">';
							}else{
							 echo "No records found";
							}
							?>
                            </div></td>
      <td width="73" align="center" valign="middle"><a href="controlsystem.php?sec_id=2&cat=5&del=Y"><img src="images/b_drop.png" width="16" height="16" border="0"></a></td>
    </tr>
  </table>
</form>
  </body>
</html>
