<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
$con = $cmdClass->getConnection();
$sql="SELECT misc_content   FROM miscsections WHERE misc_id =3"; //select record from tha table
$res = $cmdClass->ExecuteQuery($sql);
$objBook = $cmdClass->getObject($res);
$details = stripslashes($objBook->misc_content);
?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
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
          <td width="600" align="left" valign="top" class="menu"><table width="600" border="0" cellpadding="0" cellspacing="0">
              <tr>
                
              <td width="600" height="44">
                <?PHP include_once("search.php");?>
              </td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="600" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="600" height="397" align="left" valign="top"><table width="600" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="66">&nbsp;</td>
                          <td colspan="2" valign="top" class="bigtitle"><table width="209" height="52" border="0" cellspacing="2">
                              <tr> 
                                <td valign="bottom" background="images/howtobuyband.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="64">&nbsp;</td>
                                      <td width="145" class="wtlogin">How to buy</td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td height="44">&nbsp;</td>
                          <td width="9" rowspan="2" align="left" valign="top" class="normaltxt">&nbsp;</td>
                          <td width="582" rowspan="2" align="left" valign="top" class="normaltxt"><?PHP echo nl2br($details); ?></td>
                        </tr>
                        <tr> 
                          <td width="9" height="124">&nbsp;</td>
                        </tr>
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
