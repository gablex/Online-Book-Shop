<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
$con = $cmdClass->getConnection();
$sql="SELECT BK_ID,BK_STOCK,BK_TITLE ,authermaster.AUTH_NAME ,PUB_NAME, BK_EDITION,BK_PAGES ,BK_BINDING,BK_PRICE ,BK_SHOPPRICE,BK_ISBNONE ,BK_ISBNTWO,BK_SHIPDAY,BK_DESC,BK_TABLECNT,BK_AUTHDETAILS,BK_IMAGE,BK_AUTH,PUB_ID   FROM bookmaster,publishermaster,authermaster WHERE bookmaster.BK_PUBLISHER = publishermaster.PUB_ID AND bookmaster.BK_AUTH  = authermaster.AUTH_ID AND BK_ID = ".$_REQUEST['prdid']; //select record from tha table
$res = $cmdClass->ExecuteQuery($sql);
$objBook = $cmdClass->getObject($res);
?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<table width="559" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="29">&nbsp;</td>
    <td class="bigtitle"><?PHP echo $objBook->BK_TITLE; ?></td>
  </tr>
  <tr> 
    <td width="4">&nbsp;</td>
    <td width="555"><table width="555" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="147" height="211" align="center" valign="middle"><img src="images/<?PHP echo $objBook->BK_IMAGE;?>" width="100" height="130"></td>
          <td width="408" align="left" valign="top"><table width="412" border="0">
              <?PHP 
				if($objBook->AUTH_NAME  !="0")
				{ 
			  ?>
              <tr> 
                <td width="163" height="25" class="ashlabel">Author</td>
                <td class="menu">:</td>
                <td class="txtblack"><?PHP echo $objBook->AUTH_NAME ; ?></td>
              </tr>
              <?PHP
				}
				if($objBook->BK_ISBNTWO !="0")
				{ 
			  ?>
              <tr> 
                <td height="24" class="ashlabel">ISBN 10 | ISBN 13</td>
                <td width="10" class="menu">:</td>
                <td width="228" class="txtblack"> <?PHP echo $objBook->BK_ISBNONE; ?> 
                  : <?PHP echo $objBook->BK_ISBNTWO; ?></td>
              </tr>
              <?PHP
				}
				if($objBook->BK_ISBNONE !="0")
				{
				 ?>
              <?PHP
									}if($objBook->PUB_NAME !="0"){
									?>
              <tr> 
                <td height="26" class="ashlabel">Publisher</td>
                <td class="menu">:</td>
                <td class="txtblack"><?PHP echo $objBook->PUB_NAME; ?></td>
              </tr>
              <?PHP 
									}if($objBook->BK_PRICE !="0"){
									?>
              <tr> 
                <td height="24" class="ashlabel">List Price</td>
                <td class="menu">:</td>
                <td class="txtblack"><?PHP echo $objBook->BK_PRICE; ?></td>
              </tr>
              <?PHP 
									}if($objBook->BK_SHOPPRICE < $objBook->BK_PRICE && $objBook->BK_SHOPPRICE !="" && $objBook->BK_SHOPPRICE !=0 ){
									?>
              <tr> 
                <td height="23" class="ashlabel">Our Price</td>
                <td class="menu">:</td>
                <td class="txtblack"><?PHP echo $objBook->BK_SHOPPRICE; ?></td>
              </tr>
              <?PHP 
									}if($objBook->BK_EDITION !="0"){
									?>
              <tr> 
                <td class="ashlabel">Edition</td>
                <td class="menu">:</td>
                <td class="txtblack"><?PHP echo $objBook->BK_EDITION; ?></td>
              </tr>
              <?PHP
									 } if($objBook->BK_PAGES !="0"){
									 ?>
              <tr> 
                <td height="25" class="ashlabel">Pages | Binding</td>
                <td class="menu">:</td>
                <td class="txtblack"><?PHP echo $objBook->BK_PAGES; ?> <span class="menu"> 
                  : </span> <?PHP echo $objBook->BK_BINDING; ?></td>
              </tr>
              <?PHP 
									}if($objBook->BK_BINDING !="0"){
									?>
              <?PHP 
									}
									
									if($objBook->BK_SHIPDAY !="0"){
									?>
              <tr> 
                <td height="25" class="ashlabel">Shipping Time</td>
                <td class="menu">:</td>
                <td class="txtblack">Normaly <?PHP echo $objBook->BK_SHIPDAY; ?> 
                  working days</td>
              </tr>
              <?PHP 
									}
									?>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <?PHP 
						if(trim($objBook->BK_DESC) !="0" ){
						?>
  <tr> 
    <td height="30">&nbsp;</td>
    <td class="blackbold">Description</td>
  </tr>
  <tr> 
    <td rowspan="2">&nbsp;</td>
    <td class="normaltxt"><?PHP echo stripslashes($objBook->BK_DESC); ?></td>
  </tr>
  <tr> 
    <td height="2" class="normaltxt"></td>
  </tr>
  <tr> 
    <td></td>
    <td height="1" bgcolor="#990000"></td>
  </tr>
  <?PHP 
						}
						if(trim($objBook->BK_TABLECNT) != "0" ){
						?>
  <tr> 
    <td height="28">&nbsp;</td>
    <td class="blackbold">Table Of Contents</td>
  </tr>
  <tr> 
    <td height="21">&nbsp;</td>
    <td class="normaltxt"><?PHP echo stripslashes($objBook->BK_TABLECNT); ?></td>
  </tr>
  <tr> 
    <td height="2" class="normaltxt"></td>
  </tr>
  <tr> 
    <td></td>
    <td height="1"  bgcolor="#990000" ></td>
  </tr>
  <?PHP
						 }
						if(trim($objBook->BK_AUTHDETAILS) != "0"){
						?>
  <tr> 
    <td height="31">&nbsp;</td>
    <td class="blackbold">Author Details</td>
  </tr>
  <tr> 
    <td >&nbsp;</td>
    <td height="21" class="normaltxt"><?PHP echo stripslashes($objBook->BK_AUTHDETAILS); ?></td>
  </tr>
  <tr> 
    <td height="2" class="normaltxt"></td>
  </tr>
  <tr> 
    <td></td>
    <td height="1"  bgcolor="#990000" ></td>
  </tr>
  <?PHP
  }
 ?>
  <tr align="center"> 
    <td height="26" colspan="2"><a href="http://www.onlinebookshop.in" target="_blank">www.onlinebookshop.in </a></td>
  </tr>
  <tr align="center">
    <td colspan="2"><label>
      <input type="button" name="Button" value="Print" onClick="window.print();">
      </label></td>
  </tr>
</table>
</body>
</html>
