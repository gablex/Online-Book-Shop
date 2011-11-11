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
			header("location:controlsystem.php?sec_id=2&cat=4&msg='Record is Deleted Sucessfully'");
			exit();
     } //*********end of delete record from table
   //****** end of sumbit status is changing to the database
   $con = $cmdClass->getConnection();
   $sql="SELECT BK_ID,BK_TITLE ,AUTH_ID ,PUB_NAME FROM bookmaster,publishermaster,authermaster WHERE bookmaster.BK_PUBLISHER = publishermaster.PUB_ID AND BK_LANSTAT = 2  order by BK_CDATE DESC"; //select record from tha table
   $res = $cmdClass->ExecuteQuery($sql);
   $num = $cmdClass->getNumberRows($res);
   if ($num!=0){
   while($obj = $cmdClass->getObject($res)){
    $myData[] =array($obj->BK_ID,$obj->BK_TITLE ,$obj->AUTH_ID,$obj->PUB_NAME);
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
<table width="795" align="center" cellspacing="1" class="tableborder">
  <tr align="center" bgcolor="#999999" class="toptxt"> 
    <td width="30" >SLNo</td>
    <td width="287" height="18" >Book Title</td>
    <td width="177" >Auther</td>
    <td width="144" >Publisher</td>
    <td width="49">Sp.Offer</td>
    <td width="32">Edit</td>
    <td width="52" >Delete</td>
  </tr>
</table>
<table width="795" border="0" align="center" cellpadding="0" cellspacing="1" class="tableborder" id="thetable">
  <?php 
     $i=1;
  
	foreach ($page_data as $datarray){
	 ?>
  <tr align="center"> 
    <td width="31" ><?php echo $i;?></td>
    <td width="291" height="19" align="left" class="maltxt" >&nbsp;&nbsp;<?php echo stripslashes($datarray[1]); ?>&nbsp;&nbsp;</td>
    <td width="178" align="left" >&nbsp;&nbsp;<?php echo $datarray[2]; ?></td>
    <td width="148" align="left" >&nbsp;&nbsp;<?php echo $datarray[3]; ?></td>
    <td width="52" align="center"><a href="#"><img src="images/icon_forwarded.gif" alt="Special Offer" width="14" height="17" border="0" onClick="window.open('specialoffer.php?id=<?PHP echo $datarray[0]; ?>','mywin','left=20,top=20,width=500,height=200,toolbar=0,resizable=0'); "></a></td>
    <td width="33" height="19" align="center"><a href="controlsystem.php?sec_id=2&cat=2&edid=<?php echo $datarray[0];?>"><img src="images/b_edit.png" border="0" alt="Edit"></a></td>
    <td width="52" height="19" align="center"><a href="controlsystem.php?sec_id=2&cat=4&del_id=<?php echo $datarray[0];?>" onClick="return confirm_delete();"><img src="images/b_drop.png" border="0" alt="Delete"></a></td>
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
?>

</body>
</html>
