<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
if(isset($_REQUEST["edid"])){
$edid=$_REQUEST["edid"];
$selQuery="select * from categorymaster where CAT_ID=$edid";
$res=$cmdClass->ExecuteQuery($selQuery);
$objedit=$cmdClass->getObject($res);
$cmd_id      = $objedit->CAT_ID ;
$cmd_sec     = $objedit->SEC_ID;
$cmd_parent  = $objedit->CAT_PARENT;
$cmd_name    = $objedit->CAT_NAME ;
}

if(isset($_REQUEST["Submit"])) //form submit database inserted values
  {
   $edit_id   = $_REQUEST["edit_id"];  
   $sec       = 0;
   $catname   = $_REQUEST["category"];
   $parent    = $_REQUEST["parent"];
    if($edit_id!="") //check update or insertion
	 {  
		   $upquery   = "UPDATE categorymaster SET SEC_ID = $sec,CAT_NAME='$catname',CAT_PARENT='$parent' where CAT_ID ='$edit_id'";	
		   $cmdClass->ExecuteQuery($upquery);
		   header("location:controlsystem.php?sec_id=3&cat=2");
		   exit();
	  }
	else{  
		$insquery    = "insert into categorymaster (SEC_ID,CAT_NAME,CAT_PARENT) values ($sec,'$catname','$parent')";
		$result      = $cmdClass->ExecuteQuery($insquery);
		$msg         = "Details+entered+Sucessfully"; 
		header("location:controlsystem.php?sec_id=3&cat=1");
		exit();								  									
       }
	   
	 
 } //End of form submit database inserted values

?>
<html>
<head>
<script>//script for validation 
function subcmdtyvalidate()
{
if(document.addsub_cmdty.cmd_gpname.value=="")
  {
   alert("please Select Parent category");
   document.addsub_cmdty.cmd_gpname.focus();
   return false;
  }
if(document.addsub_cmdty.cmdname.value=="")
  {
   alert("please enter the category name!");
   document.addsub_cmdty.cmdname.focus();
   return false;
  }

return true; 
}
</script>
<title>AddsubCommodity</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/commoditystyle.css" rel="stylesheet" type="text/css">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" >
<form name="addsub_cmdty" method="post" action="" onSubmit="return subcmdtyvalidate();">
  <p align="center" class="logintext">NEW CATEGORY</p>
  <table width="616" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center" > 
      <td colspan="4" class="errortext" ><?php echo $msg;?></td>
    </tr>
    <tr> 
      <td width="3%" height="32" class="cpbold">&nbsp;</td>
      <td width="33%" class="labeltxt">Parent Category</td>
      <td><select name="parent" class="txtbox" id="parent">
          <?php 
	    $selQuery = "SELECT * FROM categorymaster  WHERE CAT_PARENT  = 0";
        $result   = $cmdClass->ExecuteQuery($selQuery); 
	    while($obj = $cmdClass->getObject($result))
	       {//while loop start
	      if($obj->CAT_ID==$cmd_parent)			
		   {
		   $sel = "selected";
		   }else{
		   $sel = "";
		   }		
	      ?>
          <option value="<?php echo $obj->CAT_ID;?>"  <?php echo $sel; ?>><?php echo $obj->CAT_NAME ;?></option>
          <?php 
		  } 
		   ?>
        </select></td>
    </tr>
    <tr> 
      <td height="34" class="cpbold">&nbsp;</td>
      <td class="labeltxt">Category Name</td>
      <td><input name="category" type="text" class="txtbox" id="category" value="<?php echo $objedit->CAT_NAME ;?>"></td>
    </tr>
    <input type="hidden" name="edit_id" value="<?php echo $cmd_id;?>">
    <tr align="center"> 
      <td height="44" colspan="3"><input name="Submit" type="submit" class="subbox" value="Submit"></td>
    </tr>
  </table>
 
</form>

</body>
</html>
