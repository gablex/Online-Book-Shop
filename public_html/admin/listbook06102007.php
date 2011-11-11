<?php
 require_once 'Pager/Pager.php';
 include_once("../includes/dbClass.php");
 $cmdClass = new dbClass();
 if(isset($_REQUEST['del_id']))//*******Submission Delete record from a table 
     { 
			$del_id   = $_REQUEST["del_id"];
			$delquery = "Delete from bookmaster where BK_ID='$del_id'";
			$con = $cmdClass->getConnection();
			$cmdClass->ExecuteQuery($delquery);
			$cmdClass->closeConnection($con);
			header("location:controlsystem.php?sec_id=2&cat=3&msg='Record is Deleted Sucessfully'");
			exit();
     } //*********end of delete record from table
   //****** end of sumbit status is changing to the database
  
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
<form action="" method="post" name="form1" class="toptxt">
  <div align="center"> Parent Category : 
    <select name="bookcatparent" class="txtbox" id="parent" onChange="document.form1.submit();">
	<option value="0">Select category....</option>
      <?php 
	     $con = $cmdClass->getConnection();
		
	    $selQuery = "SELECT * FROM categorymaster WHERE cat_parent = 0 order by CAT_NAME ";
        $result   = $cmdClass->ExecuteQuery($selQuery); 
	    while($obj = $cmdClass->getObject($result))
	       {//while loop start
	       if($_REQUEST['bookcatparent'] == $obj->CAT_ID)
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
    </select>
  </div>
</form>
<br>
<form action="" method="post" name="form2" class="toptxt">
<input type="hidden" name="bookcatparent" value="<?PHP echo $_REQUEST['bookcatparent'];?>">
  <div align="center" class="toptxt">Select Category : 
    <select name="bookcat" class="txtbox" id="parent" onChange="document.form2.submit();">
	<option value="0">Select category....</option>
      <?php 
	  if(isset($_REQUEST['bookcatparent'])){
	     $con = $cmdClass->getConnection();
		 $cmd =$_REQUEST['bookcat'];
	    $selQuery = "SELECT * FROM categorymaster where cat_parent = ".$_REQUEST['bookcatparent']." order by CAT_NAME";
        $result   = $cmdClass->ExecuteQuery($selQuery); 
	    while($obj = $cmdClass->getObject($result))
	       {//while loop start
	      if($obj->CAT_ID==$cmd)			
		   {
		   $sel = "selected";
		   }else{
		   $sel = "";
		   }		
	      ?>
      <option value="<?php echo $obj->CAT_ID;?>"  <?php echo $sel; ?>><?php echo $obj->CAT_NAME ;?></option>
      <?php 
		  }
		  } 
		   ?>
    </select>
  </div>
</form>
<br>
<br>
<?PHP
if(isset($_REQUEST['bookcat'])){
	
   $sql="SELECT BK_ID,BK_TITLE ,BK_AUTH ,PUB_NAME FROM bookmaster,publishermaster WHERE  bookmaster.BK_PUBLISHER = publishermaster.PUB_ID AND BK_LANSTAT = 1 AND BK_CAT =".$_REQUEST['bookcat']." order by BK_CDATE DESC"; //select record from tha table
   $res = $cmdClass->ExecuteQuery($sql);
   $num = $cmdClass->getNumberRows($res);
   if ($num!=0){
   while($obj = $cmdClass->getObject($res)){
    $myData[] =array($obj->BK_ID,$obj->BK_TITLE ,$obj->BK_AUTH ,$obj->PUB_NAME);
   }
   $cmdClass->closeConnection($con);
   $params = array(
    'itemData' => $myData,
    'perPage' => 500,
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

 $selQuery = "SELECT * FROM categorymaster where cat_id = ".$_REQUEST['bookcat'];
 $con = $cmdClass->getConnection();
 $result = $cmdClass->ExecuteQuery($selQuery);
 $obj = $cmdClass->getObject($result);
 echo '<div align="center" class="toptxt">';
 echo $obj->CAT_NAME;
 echo '</div>';
 $cmdClass->closeConnection($con);
?>
<br>

<table width="775" align="center" cellspacing="1" class="tableborder">
  <tr align="center" bgcolor="#999999" class="toptxt"> 
    <td width="30" >SLNo</td>
    <td width="252" height="18" >Book Title</td>
    <td width="185" >Auther</td>
    <td width="153" >Publisher</td>
    <td width="49">Sp.Offer</td>
    <td width="40">Edit</td>
    <td width="42" >Delete</td>
  </tr>
</table>
<table width="775" border="0" align="center" cellpadding="0" cellspacing="1" class="tableborder" id="thetable">
  <?php 
     $i=1;
  
	foreach ($page_data as $datarray){
	 ?>
  <tr align="center"> 
    <td width="31" ><?php echo $i;?></td>
    <td width="255" height="19" align="left" >&nbsp;&nbsp;<?php echo $datarray[1]; ?>&nbsp;&nbsp;</td>
    <td width="187" align="left" >&nbsp;&nbsp;<?php echo $datarray[2]; ?></td>
    <td width="154" align="left" >&nbsp;&nbsp;<?php echo $datarray[3]; ?></td>
    <td width="54" align="center"><a href="#"><img src="images/icon_forwarded.gif" alt="Special Offer" width="14" height="17" border="0"  onClick="window.open('specialoffer.php?id=<?PHP echo $datarray[0]; ?>','mywin','left=20,top=20,width=500,height=200,toolbar=0,resizable=0'); "></a></td>
    <td width="42" height="19" align="center"><a href="controlsystem.php?sec_id=2&cat=1&edid=<?php echo $datarray[0];?>"><img src="images/b_edit.png" border="0" alt="Edit"></a></td>
    <td width="42" height="19" align="center"><a href="controlsystem.php?sec_id=2&cat=3&del_id=<?php echo $datarray[0];?>" onClick="return confirm_delete();"><img src="images/b_drop.png" border="0" alt="Delete"></a></td>
  </tr>
  <?php
	$i++;}
	?>
  <tr bgcolor="#999999"> 
    <form action="" method="GET" name="viewmember">
      <td height="19" colspan="8" align="center" valign="middle" class="normaltxt"> 
        <input type="hidden" name="cat" value="2"> &nbsp; <?php echo $links['all']; ?></td>
    </form>
  </tr>
</table>
<?php
}else{
echo "<font class='errortext' align=centre>No records found !!!</font>";
}
}
?>
</body>
</html>
