<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass->getConnection();
if(isset($_GET['del'])){
 $sql = "DELETE FROM specialoffer";
 $cmdClass->ExecuteQuery($sql);

}

if(isset($_REQUEST['Submit'])){
 $image      = $_FILES['image']['name'];
 move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
 $sql = "DELETE FROM specialoffer";
 $cmdClass->ExecuteQuery($sql);
 $sql="INSERT INTO specialoffer (SP_BOOK_ID,SP_IMAGE) VALUES('".$_REQUEST['book_id']."','".$image ."')";
 $cmdClass->ExecuteQuery($sql);
 header("location:controlsystem.php?sec_id=2&cat=5");
 exit();
}

   $sql="SELECT * FROM specialoffer";
							$offer = $cmdClass->ExecuteQuery($sql);
							if($cmdClass->getNumberRows($offer)>0){
							$obj = $cmdClass->getObject($offer);
							$banner = '<img src="../images/'.$obj->SP_IMAGE.'" width="478" height="155" border="0"><br><br>';
							}
 
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
<div align="center"><br>
  <span class="logintext"> </span>
<table width="686" height="90" border="0" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="543"><?PHP echo $banner; ?></td>
      <td width="143" align="center" class="logintext"><a href="http://onlinebookshop.in/admin/controlsystem.php?sec_id=2&cat=5&del=1"  class="logintext">Remove 
        Banner</a></td>
    </tr>
  </table>
</div>
 
<div align="center"><span class="logintext"> <br>
  Upload New Special Offer Banner</span> </div>
<form action="" method="post" enctype="multipart/form-data" name="frm_mail" onSubmit="return validate();">
  <table width="401" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="89" height="29">&nbsp;</td>
      <td width="312" class="errortxt"><?php echo $_REQUEST['msg']; ?></td>
    </tr>
    <tr> 
      <td height="25" class="labeltxt">New Banner</td>
      <td><input name="image" type="file" class="toptxt"></td>
    </tr>
    <tr> 
      <td height="29">&nbsp;</td>
      <td align="left">
	  <input type="hidden" name="book_id" value="<?PHP echo $_REQUEST['id'];?>"> 
        <input name="Submit" type="submit" class="subbox" value="Submit">
        <input name="Submit2" type="reset" class="subbox" value="Reset"></td>
    </tr>
  </table>
</form>
  </body>
</html>
