<?PHP
session_start();
unset($_SESSION['cart']);
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass->getConnection();

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
                          <td colspan="2"><br> <br>
                            <span class="normaltxt">Thank You For Your Purchase</span><span class="blackbold"><strong>.Your 
                            puchase ID is <?PHP echo $_SESSION['purid'];?></strong></span><span class="normaltxt">.Use 
                            this number for future queries.The shipment will take 
                            atleast seven working days. Our cusWe will contact 
                            you soon</span><br> <br> </td>
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
