<?PHP
 include_once("logincheck.php");
 include_once("../includes/dbClass.php");
 $cmdClass = new dbClass();
 /* control menu list based on login*/
 if($_SESSION['ses_type'] == 1){
  $sql   = "select * from adminsections order by sec_order";
 }else{
  $sql   = "select adminsections.* from adminsections,loginprivileges where adminsections.sec_id=loginprivileges.pri_section and loginprivileges.pri_admid=".$_SESSION['ses_id'];
 }
  $cmdClass ->getConnection();
 $result = $cmdClass->ExecuteQuery($sql);
 /* control menu list based on login*/
 
?>
<html>
<head>
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="51" align="left" valign="top"> 
      <?PHP include_once("header.htm")?>
    </td>
  </tr>
  <tr> 
    <td height="485" valign="top">
	<table width="654" height="311" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
		<?php
		/*listing of sections*/
		$cnt = 1;
		while($obj = $cmdClass->getObject($result)){
		?>
          <td width="163" height="107" align="center" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td height="164" align="center" valign="bottom"><a href="<?PHP echo $obj->sec_link;?>?sec_id=<?PHP echo $obj->sec_id;?>" class="toptxt"><img src="images/<?PHP echo $obj->sec_image; ?>" border="0" ></a></td>
              </tr>
              <tr> 
                <td height="22" align="center" valign="top" class="toptxt"><a href="<?PHP echo $obj->sec_link;?>?sec_id=<?PHP echo $obj->sec_id;?>"  class="toptxt"><?PHP echo $obj->sec_name; ?></a></td>
              </tr>
              <tr>
                <td height="22" align="center" valign="top" class="toptxt">&nbsp;</td>
              </tr>
            </table></td>
                <?PHP
			  if($cnt == 4){
				echo "</tr><tr>";
				$cnt  = 1;
			   }else{
				$cnt++;
			   }
		  }
		  ?>
	        </tr>
      </table></td>
  </tr>
  <tr> 
    <td align="left" valign="bottom"> 
      <?PHP include_once("footer.htm")?>
    </td>
  </tr>
</table>

</body>
</html>
