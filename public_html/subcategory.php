<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass->getConnection();
$sql="SELECT t1.CAT_ID, t1.CAT_NAME,t2.CAT_NAME AS PARENT FROM categorymaster t1,categorymaster t2 WHERE  t1.CAT_PARENT = t2.CAT_ID AND t1.CAT_PARENT =".$_REQUEST['catid']." order by t1.CAT_NAME  "; //slect record from tha table
$res = $cmdClass->ExecuteQuery($sql);
$cmdClass->getNumberRows($res);
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
<body topmargin="0">
<?PHP include("header.php"); ?>
  <tr> 
    <td align="left" valign="top">
<table width="983" border="0" cellpadding="0" cellspacing="0">
        
      <tr> 
        <td width="137" align="left" valign="top" background="images/index_50.jpg"> 
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="531" align="left" valign="top" class="menu"><table width="650" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td width="650" height="497" align="left" valign="top"><table width="650" border="0">
                  <tr> 
                    <td width="644" height="45" align="left" valign="top"><table width="209" height="52" border="0" cellspacing="2">
                        <tr> 
                          <td valign="bottom" background="images/bandbook.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                              <tr> 
                                <td width="64">&nbsp;</td>
                                <td width="145" class="wtlogin">Book Details</td>
                              </tr>
                            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td height="405" align="left" valign="top">&nbsp;</td>
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
