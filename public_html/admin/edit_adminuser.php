<?php
include_once("../includes/dbClass.php");
		 $cmdClass  = new dbClass();
		 $cmdClass ->getConnection();
		 $ed_id     = $_REQUEST["edid"];
		 $dispquery = "SELECT * from adminlogin where  AD_ID=$ed_id"; //display admin login table from the database
		 $result    = $cmdClass->ExecuteQuery($dispquery);
		 $obj       = $cmdClass->getObject($result);
		 $Dispquery2= "SELECT pri_section from loginprivileges where pri_admid =$ed_id";
		 $result2   = $cmdClass->ExecuteQuery($Dispquery2);
		 $prev      = array();
		 while($obj2= $cmdClass->getObject($result2))
			{
			 $prev[] = $obj2->pri_section;
			}
if(isset($_REQUEST["Submit"])) //Submit For updation 
 {
  $adm_id   =$_REQUEST["adm_id"];
  $username =$_REQUEST["username"];
  $password =$_REQUEST["password"];
  
  $updaQuery="UPDATE adminlogin SET AD_NAME='$username',AD_PASSWORD ='$password' WHERE AD_ID=$adm_id"; //update Adminlogin table
  $cmdClass->ExecuteQuery($updaQuery);
  $delquery ="DELETE from loginprivileges  WHERE  pri_admid=$adm_id"; //delete oldetails of loginrivileges table
  $cmdClass->ExecuteQuery($delquery);
  foreach($_REQUEST["section"] as $sec){ //foreach loop start
  $insertLpri="insert into  loginprivileges (pri_admid,pri_section,pri_crt_by,pri_crt_date,pri_md_date)
                                     values($adm_id,$sec,1,now(),now())";
  $cmdClass->ExecuteQuery($insertLpri);
  } // end of foreach
 header("location:controlsystem.php?sec_id=1&cat=2"); 
 exit;
 }	//end of Submit 
	
?>
<html>
<head>
<title>Edit Admin user</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/commoditystyle.css" rel="stylesheet" type="text/css">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<form name="edit_adminuser" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center">
      <td height="38" class="logintext">UPDATE USER</td>
    </tr>
  </table>
  <table width="49%" height="156" border="0" align="center" cellpadding="0" cellspacing="1" class="table">
    <tr>
      <td width="2%">&nbsp;</td>
      <td width="41%" height="34" class="labeltxt">Username</td>
      <td width="57%"><input name="username" type="text" class="txtbox" value="<?php echo $obj->AD_NAME; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="32" class="labeltxt">Password</td>
      <td><input name="password" type="password" class="txtbox" value="<?php echo $obj->AD_PASSWORD;?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="28" class="labeltxt">Roles</td>
      <td class="normaltxt"> 
        <?php 
	  //list all the section name from admin section table
        $sql    = "SELECT sec_id,sec_name  from adminsections "; 
        $res    = $cmdClass->ExecuteQuery($sql); 
	  while($obj= $cmdClass->getObject($res))
	    { //start while loop
	     $sec_id=$obj->sec_id;
		 $sec_name=$obj->sec_name;
	    
       echo"<input type='checkbox' name='section[]' value='".$sec_id."' id=sec";
	   if(in_array($sec_id,$prev)){ //if start 
	    echo " checked";
	        } //end if 
	   echo ">&nbsp;".$sec_name."<br> ";
        
        
	  } //End while loop
	  ?>
      </td>
    </tr>
    <tr align="center"> 
      <input type="hidden" name="adm_id" value="<?PHP echo  $ed_id; ?>">
      <td height="55" colspan="3" ><input name="Submit" type="submit" class="subbox" value="Submit"></td>
    </tr>
  </table>
</form>
</body>
</html>
