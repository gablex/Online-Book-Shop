<?php
/*Project Name : commodity online.com
  purpose      : Sub Admin allocated control 
  created date : 15 nov /2006
  created by   : Aneesh:B.S   
  */
include_once("../includes/dbClass.php");
$Cmdclass=new dbClass();
$Cmdclass ->getConnection();
  //list all the section name from admin section table
           $sql="SELECT sec_id,sec_name  from adminsections "; 
           $res=$Cmdclass->ExecuteQuery($sql); 
 if(isset($_REQUEST["Submit"]))//form submit
   {
	 $username   = $_REQUEST["username"];
	 $password   = $_REQUEST["passwd"];
	 $insrtQuery = "insert into adminlogin (AD_NAME ,AD_PASSWORD,AD_TYPE,AD_LASTLOGIN) values ('$username','$password',2,NOW())";
	 $Cmdclass->ExecuteQuery($insrtQuery);
	 $id         = $Cmdclass->getlastid();
	  foreach($_REQUEST["section"] as $sec){ //for each start 
	   
	   $subinsert  = "insert into loginprivileges (pri_admid,pri_section,pri_crt_by,pri_crt_date,pri_md_date) values('$id','$sec','1',now(),now())";
	   $Cmdclass->ExecuteQuery($subinsert);
	      }//for each end
	  header("location:controlsystem.php?cat=3&sec_id=1&msg=New+user+created"); 
	  exit();
	} //end of form submit

?>
<html>
<head>
<script>
function check(){

 
}



function adminvalidate() //validattion
{
 if(document.frmadmange.username.value=="")
  {
   alert("please enter the username!");
   document.frmadmange.username.focus();
   return false;
  }
 if(document.frmadmange.passwd.value=="")
   {
	alert("please enter the password!");
	document.frmadmange.passwd.focus();
	return false;
    }
  var len=document.frmadmange.sec.length;
  var stat="false";
  for (var i=0;  i< len; i++){
   if(document.frmadmange.sec[i].checked==true){
    stat="true";
   }
  }
  if(stat=="false"){
   alert("Check at least one category");
   return false;
  }

  
  return true;	 

}
</script>
<title>Manage Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/commoditystyle.css" rel="stylesheet" type="text/css">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="javascript:document.frmadmange.username.focus();">
<form name="frmadmange" method="post" action="manageadmin.php"  onSubmit="return adminvalidate();">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center">
      <td height="38" class="logintext">NEW USER</td>
    </tr>
  </table>
  <table width="368" border="0" align="center" cellpadding="0" cellspacing="0" class="tableborder">
    <tr align="center"> 
      <td height="18" colspan="4" class="errortext"><?php echo $_REQUEST['msg'];?></td>
    </tr>
    <tr> 
      <td width="28">&nbsp;</td>
      <td width="140" height="36" class="labeltxt">Username</td>
      <td colspan="2"><input name="username" type="text" class="logintxtbox"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td height="42" class="labeltxt">Password</td>
      <td colspan="2"><input name="passwd" type="password" class="logintxtbox"></td>
    </tr>
    <tr> 
      <td valign="top">&nbsp;</td>
      <td height="37" valign="top" class="labeltxt">Roles</td>
      <td colspan="2" valign="top" class="normaltxt"> 
        <?php while($obj=$Cmdclass->getObject($res))
	        { //start while loop
	          $sec_id=$obj->sec_id;
		      $sec_name=$obj->sec_name;
	    
       echo"<input type='checkbox' name='section[]' value='".$sec_id."' id=sec>&nbsp;".$sec_name."<br> ";
        
        
	  }
	  ?>
        <br>
      </td>
    </tr>
    <tr align="center"> 
      <td height="41">&nbsp; </td>
      <td align="right"><input name="Submit" type="submit" class="subbox" value="Submit"></td>
      <td width="1" height="41" align="left">&nbsp;</td>
      <td width="197" align="left"><input name="Submit2" type="reset" class="subbox" value="Reset"></td>
    </tr>
  </table>
</form>
</body>
</html>
