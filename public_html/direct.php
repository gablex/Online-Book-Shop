<?PHP
session_start();
if($_SESSION['login'] == "logged" && !empty($_SESSION['cart'])){
   header("location:shipmentdetails.php");
   exit(); 
}
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
if(isset($_REQUEST['Login'])){
 $sql = "SELECT USER_ID ,USER_FNAME ,USER_LNAME FROM userdetails WHERE USER_EMAIL ='".$_POST['email']."' AND USER_PASSWORD='".$_POST['pwd']."'";
 $res = $cmdClass->ExecuteQuery($sql);
 $num = $cmdClass->getNumberRows($res);
 if($num != 0){
   $obj = $cmdClass->getObject($res);
   $_SESSION['userid']=$obj->USER_ID;
   $_SESSION['username']=$obj->USER_FNAME." ".$obj->USER_LNAME;
   $_SESSION['login'] ="logged";
   if(!empty($_SESSION['cart'])){	
   header("location:shipmentdetails.php");
   exit(); 
   }else{
   header("location:index.php");
   exit(); 
   }
 
 }else{
   header("location:direct.php?msg=1");
   exit(); 
 }
}
?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function frmValidate(){
 if(document.logfrm.email.value==""){
  alert("Please enter your email id");
  document.logfrm.email.focus();
  return false;
 }
if(document.logfrm.pwd.value==""){
  alert("Please enter your password");
  document.logfrm.pwd.focus();
  return false;
 }
 return true;
}

</script>
</head>
<body leftmargin="0" topmargin="0">
<?PHP include("header.php"); ?>
  <tr> 
    <td align="left" valign="top">
<table width="983" border="0" cellpadding="0" cellspacing="0">
        
      <tr> 
        <td width="137" align="left" valign="top"> 
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="531" align="left" valign="top" class="menu"><table width="650" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td width="650" height="497"><table width="650" border="0">
                  <tr> 
                    <td width="644" height="429" align="left" valign="top">
<table width="650" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="28">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td width="650" height="55"><table width="209" height="55" border="0">
                              <tr> 
                                <td height="51" valign="bottom" background="images/register.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="57" height="21">&nbsp;</td>
                                      <td width="152" class="wtlogin">New Customer</td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                          <td width="650"><table width="209" height="55" border="0">
                              <tr> 
                                <td height="51" valign="bottom" background="images/registerband.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="57" height="21">&nbsp;</td>
                                      <td width="152" class="wtlogin">Registered 
                                        Customer</td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td height="317" align="center" valign="top"><br>
                            <br>
                            <br>
                            <form name="form1" method="post" action="user_register.php">
                              <table width="148" border="0">
                                <tr> 
                                  <td width="142"><input name="Submit3" type="submit" class="regsub" value="Click Here To Register"></td>
                                </tr>
                              </table>
                            </form>
                            
                          </td>
                          <td align="center" valign="top" class="error"><?PHP if(isset($_REQUEST['msg'])) echo "Invalid Login"; ?><br>
                            <form name="logfrm" method="post" action="" onSubmit="return frmValidate();">
                              <table width="247" height="99" border="0" cellspacing="2">
                                <tr> 
                                  <td width="110" height="35" class="logtxt">E 
                                    Mail ID</td>
                                  <td width="133"><input name="email" type="text" class="logbox"></td>
                                </tr>
                                <tr> 
                                  <td height="32" class="logtxt">Password</td>
                                  <td><input name="pwd" type="password" class="logbox"></td>
                                </tr>
                                <tr align="center"> 
                                  <td height="32" colspan="2"><input name="Login" type="submit" class="regsub" id="Login" value="Submit"> 
                                    &nbsp;&nbsp; <input name="Submit2" type="reset" class="regsub" value="Reset"></td>
                                </tr>
                              </table>
                            </form>
                            
                          </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr> 
                    <td><table width="639" border="0">
                        <tr class="ashlabel"> 
                          <td width="121" height="37">&nbsp;</td>
                          <td width="104" align="center">About Us</td>
                          <td width="10" align="center"><img src="images/index_52.jpg" width="4" height="16"></td>
                          <td width="109" align="center">Contact Us</td>
                          <td width="20" align="center"><img src="images/index_52.jpg" width="4" height="16"></td>
                          <td width="103" align="center">Privacy Policy</td>
                          <td width="142">&nbsp;</td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="330">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</body>
</html>
