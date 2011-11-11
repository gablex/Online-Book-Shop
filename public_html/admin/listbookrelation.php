<?php
 require_once 'Pager/Pager.php';
 include_once("../includes/dbClass.php");
 $cmdClass = new dbClass();
    $con = $cmdClass->getConnection();
 if(isset($_REQUEST['Submit'])){
 		$sub = "delete from relatedbook where rel_masterbook=".$_REQUEST["book"];
	    $cmdClass->ExecuteQuery($sub);
		$rels = $_REQUEST["rel"];
if(count($rels)>0){
 foreach($_REQUEST["rel"] as $sec){ //for each start 
	   $subinsert  = "insert into relatedbook (rel_masterbook,re_book) values(".$_REQUEST["book"].",$sec)";
	   $cmdClass->ExecuteQuery($subinsert);
	      }//for each end
	}
	 // header("location:controlsystem.php?cat=6&sec_id=2"); 
	 // exit();
 
 }
 
 
 
    //****** end of sumbit status is changing to the database

   $sql="SELECT BK_ID,BK_TITLE ,BK_AUTH ,PUB_NAME FROM bookmaster,publishermaster WHERE  bookmaster.BK_PUBLISHER = publishermaster.PUB_ID AND BK_LANSTAT = 1 order by BK_CDATE DESC"; //select record from tha table
   $res = $cmdClass->ExecuteQuery($sql);
   $num = $cmdClass->getNumberRows($res);
   if ($num!=0){
   while($obj = $cmdClass->getObject($res)){
    $myData[] =array($obj->BK_ID,$obj->BK_TITLE ,$obj->BK_AUTH ,$obj->PUB_NAME);
   }
  // $cmdClass->closeConnection($con);
   $params = array(
    'itemData' => $myData,
    'perPage' => 1000,
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
<div align="center"><span class="logintext">Set Related Books</span><br>
  <form name="form" method="post" action="">
    <p class="toptxt"><br>
      Select Master Book : 
      <select name="book" class="longtxtbox">
        <?PHP
   $sql="SELECT BK_ID,BK_TITLE FROM bookmaster"; //select record from tha table
   $res = $cmdClass->ExecuteQuery($sql);
   while($obj = $cmdClass->getObject($res)){
    //$myData[] =array(, ,$obj->BK_AUTH ,$obj->PUB_NAME);
	echo '<option  value="'.$obj->BK_ID.'">'.$obj->BK_TITLE.'</option>';
   }
	  
	  ?>
      </select>
      <br>
    </p>
    <div align="center"> </div>
    <table width="643" align="center" cellspacing="1" class="tableborder">
      <tr align="center" bgcolor="#999999" class="toptxt"> 
        <td width="47" >Check</td>
        <td width="241" height="18" >Book Title</td>
        <td width="185" >Auther</td>
        <td width="155" >Publisher</td>
      </tr>
    </table>
    <table width="643" border="0" align="center" cellpadding="0" cellspacing="1" class="tableborder" id="thetable">
      <?php 
if ($num!=0){
	foreach ($page_data as $datarray){
	 ?>
      <tr align="center"> 
        <td width="49" ><input type="checkbox" name="rel[]" value="<?php echo $datarray[0]; ?>"></td>
        <td width="239" height="19" align="left" >&nbsp;&nbsp;<?php echo $datarray[1]; ?>&nbsp;&nbsp;</td>
        <td width="190" align="left" >&nbsp;&nbsp;<?php echo $datarray[2]; ?></td>
        <td width="158" height="19" align="left" >&nbsp;&nbsp;<?php echo $datarray[3]; ?></td>
      </tr>
      <?php
	$i++;}
	?>
      <tr bgcolor="#999999"> 
        <td height="19" colspan="5" align="center" valign="middle" class="normaltxt"> 
 <?php echo $links['all']; ?></td>
      </tr>
    </table>
    <br>
    <input name="Submit" type="submit" class="subbox" value="Submit">
    <br>
    <?php
}else{
echo "<font class='errortext' align=centre>No records found !!!</font>";
}
?>
    <p>&nbsp;</p></form>
  <br>
</div>
</body>
</html>
