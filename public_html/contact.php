<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
$con = $cmdClass->getConnection();
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
          
        <td width="114" align="left" valign="top"> 
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="601" align="left" valign="top" class="menu">
<table width="600" border="0" cellpadding="0" cellspacing="0">
              
            <tr> 
              <td height="537" align="left" valign="top">
<table width="600" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="600" align="left" valign="top"><table width="600" height="519" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="53">&nbsp;</td>
                          <td valign="bottom" class="bigtitle"><table width="209" height="52" border="0" cellspacing="2">
                              <tr> 
                                <td valign="bottom" background="images/contactband.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="64">&nbsp;</td>
                                      <td width="145" class="wtlogin">Contact 
                                        Us </td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td width="10" height="363" rowspan="2">&nbsp;</td>
                          <td width="621" height="100" align="center" valign="top" class="bigtitle">
<table width="379" height="138" border="0">
                              <tr>
                                <td width="373" height="134" class="normaltxt"><span class="blackbold">ONLINE 
                                  BOOK SHOP</span><br>
                                  1st FLOOR, ORIENTAL COMPLEX,<br>
                                  BANERJI ROAD - MARKET ROAD JN.,<br>
                                  ERNAKULAM, COCHIN,<br>
                                  KERALA, INDIA,PIN - 682 018. <br>
                                  TEL: +91 - 484 - 2397895 / 2398484 <br>
                                  FAX: +91 - 484 - 2398484 <br>
                                  E-mail: lawbookshop@vsnl.net ,mail@lawbookshop.net 
                                </td>
                              </tr>
                            </table>
                            
                          </td>
                        </tr>
                        <tr>
                          <td height="340" align="center" valign="top" class="bigtitle"><table width="90%" border="0" align="center" cellpadding="3" cellspacing="3">
                              <tr class="content"> 
                                <td width="39%" class="searlstxt">NAME</td>
                                <td width="61%"><input name="f_name" type="text" class="regbox" id="f_name" title="Name"> 
                                  <font color="#FF0000">*</font> </td>
                              </tr>
                              <tr class="content"> 
                                <td valign="top" class="searlstxt">ADDRESS</td>
                                <td valign="top"> <textarea name="f_add" cols="25" class="regarea" id="f_add" title="Address"></textarea> 
                                  <font color="#FF0000">*</font> </td>
                              </tr>
                              <tr class="content"> 
                                <td class="searlstxt">TELEPHONE</td>
                                <td><input name="f_tel" type="text" class="regbox" id="f_tel" title="Telephone"> 
                                  <font color="#FF0000">*</font> </td>
                              </tr>
                              <tr class="content"> 
                                <td class="searlstxt">E-MAIL</td>
                                <td><input name="f_email" type="text" class="regbox" id="f_email" title="E-Mail"> 
                                  <font color="#FF0000">*</font> </td>
                              </tr>
                              <tr class="content"> 
                                <td class="searlstxt">COMMENTS/ENQUIRY</td>
                                <td><textarea name="f_comment" cols="25" rows="5" class="regarea" id="f_comment" title="Comments/Enquriy"></textarea> 
                                  <font color="#FF0000">*</font> </td>
                              </tr>
                              <tr class="content"> 
                                <td class="searlstxt">[<font color="#FF0000">*</font> 
                                  ] Must be Completed</td>
                                <td><input type="hidden" name="f_mail_data" value="1"> 
                                  <input name="Submit" type="submit" class="regsub" title="Submit" value="Submit"> 
                                  <input name="Reset" type="reset" class="regsub" id="Reset" title="Reset" value="Reset"></td>
                              </tr>
                            </table></td>
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
          <td width="268">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
