<?php
/*********
 Project name   : Commodity online.com
 purpose        : view admin all users
 Created Date   : 16/nov/2006
 Created By     : Aneesh:B.S
 ***********/
 require_once 'Pager/Pager.php';
 include_once("../includes/dbClass.php");
 $cmdClass = new dbClass();
 if(isset($_REQUEST['del_id']))//*******Submission Delete record from a table 
     { 
			$del_id   = $_REQUEST["del_id"];
			$delquery = "Delete from categorymaster where  CAT_ID  ='$del_id'";
			$con = $cmdClass->getConnection();
			$cmdClass->ExecuteQuery($delquery);
			$cmdClass->closeConnection($con);
			header("location:controlsystem.php?sec_id=3&cat=2&msg='Record is Deleted Sucessfully'");
			exit();
     } //*********end of delete record from table
   //****** end of sumbit status is changing to the database
   
if(isset($_REQUEST["bsec"]))
   {
       $cmd_sec = $_REQUEST["bsec"];
	   $con = $cmdClass->getConnection();
	   $sql="SELECT t1.CAT_ID,t1.CAT_NAME  FROM categorymaster t1 where t1.CAT_PARENT= ".$_REQUEST["bsec"]; //slect record from tha table
	   $res = $cmdClass->ExecuteQuery($sql);
	   $num = $cmdClass->getNumberRows($res);
  	 if ($num!=0){
		   while($obj = $cmdClass->getObject($res)){
			$myData[] =array($obj->CAT_ID ,$obj->SEC_ID ,$obj->CAT_NAME,$obj->CAT_PARENT);
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
}
?>
<html>
<head>
<script>
function confirm_delete() //delete Confirmation
{
  if (confirm("Are you sure you want to delete the user?")==true)
    return true;
  else
    return false;
}
function active_validate() //status change confirmation
  {
  if(confirm("Are You sure want to status is changed?")==true)
     return true;
   else	 
    return false;
  }//end of status change validation
</script>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/commoditystyle.css" rel="stylesheet" type="text/css">
<style> 
 .odd{
	background-color: white;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: normal;
	color: #000000;
	text-decoration: none;
} 
 .even{
	background-color: #CCCCCC;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: normal;
	color: #000000;
	text-decoration: none;
} 
</style>
<script language="JavaScript">
function alternate(id){ // colour changing in table
 if(document.getElementsByTagName){  
   var table = document.getElementById(id);   
   var rows = table.getElementsByTagName("tr");   
   for(i = 0; i < rows.length; i++){           
 //manipulate rows 
     if(i % 2 == 0){ 
       rows[i].className = "even"; 
     }else{ 
       rows[i].className = "odd"; 
     }       
   } 
 } 
}



</script>
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body onload="alternate('thetable')">
<form name="form" method="post" action="">
  <table width="314" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="148" height="35" class="toptxt">Select Category</td>
      <td width="150"><select name="bsec" class="txtbox" onChange="document.form.submit();">
	  <option value="0">Select...</option>
          <?PHP 
		$con = $cmdClass->getConnection();
	   $selQuery = "SELECT * FROM  categorymaster where CAT_PARENT=0";
       $result   = $cmdClass->ExecuteQuery($selQuery); 
	    while($obj = $cmdClass->getObject($result))
		{
		 if($cmd_sec == $obj->CAT_ID)
		 {
		 $chk="selected";
		 }
		 ?>
          <option value="<?php echo $obj->CAT_ID;?>"  <?php echo $chk; ?>><?php echo $obj->CAT_NAME ;?></option>
          <?php
		 $chk=""; 
		}
		$cmdClass->closeConnection($con);
	  ?>
        </select></td>
    </tr>
  </table>
</form>
<br>
<?PHP
   if(isset($_REQUEST["bsec"]) && $num !=0)
   {
   ?>
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
    <td width="36" height="25" align="center"><a href="controlsystem.php?sec_id=3&cat=1&edid=<?php echo $datarray[0];?>"><img src="images/b_edit.png" border="0" alt="Edit"></a></td>
    <td width="46" height="25" align="center"><a href="controlsystem.php?sec_id=3&cat=2&del_id=<?php echo $datarray[0];?>" onClick="return confirm_delete();"><img src="images/b_drop.png" border="0" alt="Delete"></a></td>
  </tr>
  <?php
	$i++;
	}
	?>
  <tr bgcolor="#999999"> 
    <form action="" method="GET" name="viewmember">
      <td height="26" colspan="6" align="center" valign="middle" class="normaltxt"> 
        <input type="hidden" name="cat" value="2"> &nbsp; <?php echo $links['all']; ?></td>
    </form>
  </tr>
</table>
<?php
	}else{
	echo "<font class='errortext' align=centre>No records found !!!</font>";
	}
?>

</body>
</html>
