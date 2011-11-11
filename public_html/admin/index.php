<?PHP
 session_start();
 include_once("../includes/dbClass.php");
 include_once("../includes/class.bookClass.php");
 $bookClass = new bookClass();
 /* login checking in database*/ 
  if(isset($_REQUEST["username"]))
    {
	 $userName     = trim($_REQUEST["username"]);
	 $userPassword = trim($_REQUEST["password"]);
	 if($bookClass->checkLogin($userName,$userPassword))
	   {
	    header("location:cpanel.php");
	    exit(); 							   
	   }
	 else 
	   {							   
	   header("location:index.php?msg=Invalid Username Or password");
	   exit();					    
	   }
	} 
/* login checking in database*/ 
?>
<html>
<head>
<script>

function validate() //validatation
 {
 
 if(document.loginfrm.username.value=="")
    {
	   alert("please enter the username!");
	   document.loginfrm.username.focus();
	   return false;
    }
  if(document.loginfrm.password.value=="")
     {
		 alert("please enter the password!");
		 document.loginfrm.password.focus();
		 return false;
	
	 } 
	 return (document.loginfrm.submit());
 }
</script>
<title>Administrator Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0"   onLoad="javascript: document.loginfrm.username.focus();" bgcolor="#797777">
<table width="1002" border="0" cellpadding="0" cellspacing="0" bgcolor="#797777">
  <tr>
    <td width="1021" height="561" align="right"> 
      <table width="640" height="480" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="719" valign="top"><table width="652" height="416" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="339" height="175">&nbsp;</td>
                <td width="313">&nbsp;</td>
              </tr>
              <tr>
                <td height="181">&nbsp;</td>
                <td><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginfrm" id="loginfrm"  onSubmit="javascript:return validate();">
                    <table width="254" border="0" align="center" >
					  
					<tr align="center" valign="top"><td height="32" colspan="2" class="errortxt"><?php if(isset($_REQUEST['msg']))echo $_REQUEST['msg'];?> </td></tr>
					
                      <tr> 
                        <td width="82" class="logintext">Username</td>
                        <td width="162"><input name="username" type="text" class="logintxtbox" tabindex="1"></td>
                      </tr>
                      <tr> 
                        <td class="logintext">Password</td>
                        <td><input name="password" type="password" class="logintxtbox"  onKeyPress="if(window.event.keyCode == 13){document.loginfrm.submit();} " tabindex="2"></td>
                      </tr>
                      <tr align="center"> 
                        <td colspan="2" ><input type="submit" name="Submit" value="Submit"></td>
                      </tr>
                    </table>
                  </form>
                  
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
