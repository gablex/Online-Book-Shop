<?PHP
 include_once("logincheck.php");
?>
<html>
<head>
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/commoditystyle.css" rel="stylesheet" type="text/css">
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
    <td height="500">
<table width="797" height="360" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr valign="bottom"> 
          <td width="234" height="138" align="center"><a href="controlsystem.php?sec_id=1"><img src="images/login.jpg" width="94" height="83" border="0"></a></td>
          <td width="166" align="center"><img src="images/learning.jpg" width="78" height="83"></td>
          <td width="175" align="center"><img src="images/research.jpg" width="110" height="83"></td>
          <td width="222" align="center"><img src="images/advtimg.jpg" width="94" height="85"></td>
        </tr>
        <tr class="toptxt"> 
          <td height="19" align="center">Login Management</td>
          <td align="center">Book Management</td>
          <td align="center">Category Management</td>
          <td align="center">Special Offer Management</td>
        </tr>
        <tr valign="bottom">
          <td height="168" align="center"><img src="images/miscellonious.jpg" width="94" height="86"></td>
          <td align="center"><img src="images/newletter.png" width="48" height="48"></td>
          <td align="center"><img src="images/tech.jpg" width="116" height="87"></td>
          <td align="center"><img src="images/news-letters.jpg" width="90" height="83"></td>
        </tr>
        <tr class="toptxt">
          <td height="35" align="center">Auther Management</td>
          <td align="center">Publisher Management</td>
          <td align="center">Subject Management</td>
          <td align="center">News Letter Management</td>
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
