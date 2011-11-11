<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function validate(){
if(document.myform.email.value==""){
	alert("Enter Your Email Address");
	document.myform.email.focus();
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
          
        <td width="137" height="470" align="left" valign="top">
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="600" align="left" valign="top" class="menu"><table width="600" border="0" cellpadding="0" cellspacing="0">
              <tr>
                
              <td width="600" height="44">
                <?PHP include_once("search.php");?>
              </td>
              </tr>
              <tr>
                <td height="434" align="left" valign="top"><table width="600" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="600" height="416"><table width="600" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="53">&nbsp;</td>
                          <td valign="bottom" class="bigtitle"><table width="209" height="52" border="0" cellspacing="2">
                              <tr> 
                                <td valign="bottom" background="images/forgotband.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="62">&nbsp;</td>
                                      <td width="147" class="wtlogin">Password 
                                        Recovery </td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td height="44">&nbsp;</td>
                          <td align="center" class="bigtitle"><form name="myform" method="post" action="" onSubmit="return validate();">
                              <p class="normaltxt"><br>
                                Send your email address which you have provided 
                                at the time of registration.<br>
                                <br>
                                <input name="email" type="text" class="searchtxtbox" id="email">
                                <br>
                                <br>
                                <input name="Submit" type="submit" class="regsub" value="Send EMail Address">
                              </p>
                            </form></td>
                        </tr>
                        <tr> 
                          <td width="10" height="223">&nbsp;</td>
                          <td width="621">&nbsp;</td>
                        </tr>
                        <?PHP 
						if($objBook->BK_DESC !="0" ){
						?>
                        <?PHP 
						}
						if($objBook->BK_TABLECNT != "0" ){
						?>
                        <?PHP
						 }
						if($objBook->BK_AUTHDETAILS != "0"){
						?>
                        <?PHP } ?>
                      </table></td>
                  </tr>
                  <tr> 
                    <td>
                      <?PHP include_once("footermenu.php");?>
                    </td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          <td width="330">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
