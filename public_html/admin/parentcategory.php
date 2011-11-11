<?php
 require_once 'Pager/Pager.php';
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

 if(isset($_REQUEST['del_id']))//*******Submission Delete record from a table 
     { 
			$del_id   = $_REQUEST["del_id"];
			$delquery = "Delete from categorymaster where  CAT_PARENT  ='$del_id'";
			$cmdClass->ExecuteQuery($delquery);
			$delquery = "Delete from categorymaster where  CAT_ID  ='$del_id'";
			$cmdClass->ExecuteQuery($delquery);
			$cmdClass->closeConnection($con);
			header("location:controlsystem.php?sec_id=3&cat=4&msg=Record is Deleted Sucessfully");
			exit();
     }


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
   $sec       = $_REQUEST['bsec'];
   $catname   = $_REQUEST["category"];
   $parent    = 0;
    if($edit_id!="") //check update or insertion
	 {  
		   $upquery   = "UPDATE categorymaster SET SEC_ID = $sec,CAT_NAME='$catname',CAT_PARENT='$parent' where CAT_ID ='$edit_id'";	
		   $cmdClass->ExecuteQuery($upquery);
		   header("location:controlsystem.php?sec_id=3&cat=4");
		   exit();
	  }
	else{  
		$insquery    = "insert into categorymaster (SEC_ID,CAT_NAME,CAT_PARENT) values ($sec,'$catname','$parent')";
		$result      = $cmdClass->ExecuteQuery($insquery);
		$msg         = "Details+entered+Sucessfully"; 
		header("location:controlsystem.php?sec_id=3&cat=4");
		exit();								  									
       }
	   
	 
 } //End of form submit database inserted values
	   $sql="SELECT t1.CAT_ID,t1.CAT_NAME  FROM categorymaster t1 where t1.CAT_PARENT=0"; //slect record from tha table
	   $res = $cmdClass->ExecuteQuery($sql);
	   $num = $cmdClass->getNumberRows($res);
  	 if ($num!=0){
		   while($obj = $cmdClass->getObject($res)){
			$myData[] =array($obj->CAT_ID ,$obj->SEC_ID ,$obj->CAT_NAME,$obj->CAT_PARENT);
   		}
		$params = array(
		'itemData' => $myData,
		'perPage' => 30,
		'delta' => 8,             // for 'Jumping'-style a lower number is better
		'append' => true,
		'separator' => ' | ',
		'clearIfVoid' => false,
		'urlVar' => 'entrant',
		'useSessions' => true,
		'closeSession' => true,
		'mode'  => 'Sliding',    //try switching modes
		//'mode'  => 'Jumping',

	);
$pager = & Pager::factory($params);
$page_data = $pager->getPageData();
$links = $pager->getLinks();
$selectBox = $pager->getPerPageSelectBox();
}
?>
<html>
<head>
<script>//script for validation 
function subcmdtyvalidate()
{
if(document.addsub_cmdty.category.value=="")
  {
   alert("please enter the category name!");
   document.addsub_cmdty.category.focus();
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
  <p align="center" class="logintext">NEW PARENT CATEGORY</p>
  <table width="616" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center" > 
      <td colspan="4" class="errortext" ><?php echo $msg;?></td>
    </tr>
    <tr> 
      <td width="3%" height="32" class="cpbold">&nbsp;</td>
      <td width="33%" class="labeltxt">Browse Section</td>
      <td class="normaltxt"> <select name="bsec" class="txtbox">
          <?PHP 
	   $selQuery = "SELECT * FROM  categorysection";
       $result   = $cmdClass->ExecuteQuery($selQuery); 
	    while($obj = $cmdClass->getObject($result))
		{
		 if($cmd_sec == $obj->catsec_id)
		 {
		 $chk="selected";
		 }
		 ?>
          <option value="<?php echo $obj->catsec_id;?>"  <?php echo $chk; ?>><?php echo $obj->catsec_name ;?></option>
          <?php
		 $chk=""; 
		}
	  ?>
        </select> </td>
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
 
  <p><br>
    <?PHP
   if( $num !=0)
   {
   ?>
  </p>
  <table width="515" align="center" cellspacing="1" class="tableborder">
    <tr align="center" bgcolor="#999999" class="toptxt"> 
      <td width="43" >SLNo</td>
      <td width="233" height="27" >Category Name</td>
      <td width="140" >Section</td>
      <td width="34">Edit</td>
      <td width="47" >Delete</td>
    </tr>
  </table>
  <table width="515" border="0" align="center" cellpadding="0" cellspacing="1" class="tableborder" id="thetable">
    <?php 
     $i=1;
  
	foreach ($page_data as $datarray){
	 if($datarray[3] == 0){
	  $cls="labeltxt";
	 }else{
	  $cls = "normaltxt";
	 }
	 ?>
    <tr align="center"> 
      <td width="46" ><?php echo $i;?></td>
      <td width="234" height="27" align="left" class="<?=$cls?>" >&nbsp;&nbsp;<?php echo $datarray[2]; ?>&nbsp;&nbsp;</td>
      <td width="145" align="left" >&nbsp; 
        <?PHP
		echo $sec;
	?>
      </td>
      <td width="36" height="25" align="center"><a href="controlsystem.php?sec_id=3&cat=4&edid=<?php echo $datarray[0];?>"><img src="images/b_edit.png" border="0" alt="Edit"></a></td>
      <td width="46" height="25" align="center"><a href="controlsystem.php?sec_id=3&cat=4&del_id=<?php echo $datarray[0];?>" onClick="return confirm_delete();"><img src="images/b_drop.png" border="0" alt="Delete"></a></td>
    </tr>
    <?php
	$i++;
	}
	?>
    <tr bgcolor="#999999"> 
      <td height="26" colspan="6" align="center" valign="middle" class="normaltxt"> 
        &nbsp; <?php echo $links['all']; ?></td>
    </tr>
  </table>
  <?php
	}else{
	echo "<font class='errortext' align=centre>No records found !!!</font>";
	}
?>
</form>

</body>
</html>
