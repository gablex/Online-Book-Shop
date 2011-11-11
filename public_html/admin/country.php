<?php
include_once("../includes/dbClass.php");
 require_once 'Pager/Pager.php';
$cmdClass = new dbClass();
$con = $cmdClass ->getConnection();

 if(isset($_REQUEST['del_id']))//*******Submission Delete record from a table 
     { 
			$del_id   = $_REQUEST["del_id"];
			$delquery = "Delete from countrymaster where  cnt_id  ='$del_id'";
			$cmdClass->ExecuteQuery($delquery);
			header("location:controlsystem.php?sec_id=9&cat=2&msg=Record is Deleted Sucessfully");
			exit();
     } 
if(isset($_REQUEST["edid"])){
	$edid=$_REQUEST["edid"];
	$selQuery="select * from countrymaster where cnt_id = $edid";
	$res=$cmdClass->ExecuteQuery($selQuery);
	$objedit=$cmdClass->getObject($res);
	$cmd_name    = $objedit->cnt_name ;
}

if(isset($_REQUEST["Submit"])) //form submit database inserted values
  {
   $edit_id   = $_REQUEST["edit_id"];  
   $sec       = $_REQUEST['section'];
      if($edit_id!="") //check update or insertion
	 {  
		   $upquery   = "UPDATE countrymaster SET cnt_name = '$sec' where cnt_id ='$edit_id'";	
		   $cmdClass->ExecuteQuery($upquery);
		   header("location:controlsystem.php?sec_id=9&cat=2");
		   exit();
	  }
	else{  
		$insquery    = "insert into countrymaster(cnt_name) values ('$sec')";
		$result      = $cmdClass->ExecuteQuery($insquery);
		$msg         = "Details+entered+Sucessfully"; 
		header("location:controlsystem.php?sec_id=9&cat=2");
		exit();								  									
       }
	   
	 
 } //End of form submit database inserted values
 
   $sql="SELECT cnt_name,cnt_id FROM countrymaster order by cnt_name"; //slect record from tha table
   $res = $cmdClass->ExecuteQuery($sql);
   $num = $cmdClass->getNumberRows($res);
   if ($num!=0){
   while($obj = $cmdClass->getObject($res)){
    $myData[] =array($obj->cnt_id ,$obj->cnt_name);
   }
   $cmdClass->closeConnection($con);
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
function confirm_delete() //delete Confirmation
{
  if (confirm("Are you sure you want to delete the user?")==true)
    return true;
  else
    return false;
}
function subcmdtyvalidate()
{

if(document.addsub_cmdty.section.value=="")
  {
   alert("please enter the section name!");
   document.addsub_cmdty.section.focus();
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
  <p align="center" class="logintext">COUNTRY</p>
  <table width="616" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center" > 
      <td colspan="4" class="errortext" ><?php echo $msg;?></td>
    </tr>
    <tr> 
      <td width="3%" height="34" class="cpbold">&nbsp;</td>
      <td width="33%" class="labeltxt">Country Name</td>
      <td><input name="section" type="text" class="txtbox" id="section" value="<?php echo $cmd_name ;?>"></td>
    </tr>
    <input type="hidden" name="edit_id" value="<?php echo $edid;?>">
    <tr align="center"> 
      <td height="21" colspan="3"><input name="Submit" type="submit" class="subbox" value="Submit"></td>
    </tr>
    <tr align="center">
      <td height="22" colspan="3"><br> 
	  <?PHP 
	     if ($num!=0){
	  ?>
	  <table width="515" align="center" cellspacing="1" class="tableborder">
          <tr align="center" bgcolor="#999999" class="toptxt"> 
            <td width="43" >SLNo</td>
            <td width="233" height="27" >Country Name</td>
            <td width="34">Edit</td>
            <td width="47" >Delete</td>
          </tr>
        </table>
        <table width="515" border="0" align="center" cellpadding="0" cellspacing="1" class="tableborder" id="thetable">
          <?php 
     $i=1;
  
	foreach ($page_data as $datarray){
	  ?>
          <tr align="center"> 
            <td width="64" ><?php echo $i;?></td>
            <td width="324" height="27" align="left" class="<?=$cls?>" >&nbsp;&nbsp;<?php echo $datarray[1]; ?>&nbsp;&nbsp;</td>
            <td width="53" height="25" align="center"><a href="controlsystem.php?sec_id=9&cat=2&edid=<?php echo $datarray[0];?>"><img src="images/b_edit.png" border="0" alt="Edit"></a></td>
            <td width="67" height="25" align="center"><a href="controlsystem.php?sec_id=9&cat=2&del_id=<?php echo $datarray[0];?>" onClick="return confirm_delete();"><img src="images/b_drop.png" border="0" alt="Delete"></a></td>
          </tr>
          <?php
	$i++;}
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
      </td>
    </tr>
  </table>
</form>
<br>
</body>
</html>
