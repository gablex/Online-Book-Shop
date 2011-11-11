<?PHP
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
<STYLE TYPE="text/css">
<!-- /* $WEFT -- Created by: Anand (phpanand@gmail.com) on 5/27/2007 -- */
  @font-face {
    font-family: ML-TTKarthika;
    font-style:  normal;
    font-weight: normal;
    src: url(MLTTKAR0.eot);
  }
-->
</STYLE>
</head>
<body topmargin="0">
<?PHP include("header.php"); ?>
  <tr> 
    <td align="left" valign="top">
<table width="983" border="0" cellpadding="0" cellspacing="0">
        <tr>
          
        <td width="137" align="left" valign="top"><?PHP include_once("leftmenu.php");?></td>
          <td width="531" align="left" valign="top" class="menu"><table width="650" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="650" height="44"><table width="642" height="48" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td background="images/index_10.jpg"><table width="560" border="0">
                          <tr>
                            <td width="108">&nbsp;</td>
                            <td width="234"><input name="textfield" type="text" class="searchtxtbox"></td>
                            <td width="204"><img src="images/index_16.jpg" width="41" height="22"></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="650" border="0">
                    <tr>
                      <td width="644">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="638" border="0" cellpadding="0" cellspacing="0">
                          <tr align="right"> 
                            <td colspan="3"><img src="images/index_13.jpg" width="642" height="33"></td>
                          </tr>
                          <tr> 
                            <td width="636" height="443" align="center" valign="top"> 
                              <table width="215" border="0">
                                <tr>
								<?PHP
								 $sql="SELECT BK_ID,BK_TITLE ,BK_SHOPPRICE,BK_IMAGE  FROM bookmaster WHERE BK_LANSTAT = 2 order by BK_CDATE DESC LIMIT 9"; //select record from tha table
   								 $res = $cmdClass->ExecuteQuery($sql);
								 $cnt = 0;
								 while($obj = $cmdClass->getObject($res)){
									
								 ?>
                                  <td><table width="209" border="0">
                                      <tr align="center"> 
                                        <td height="57" colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $obj->BK_ID; ?>"><img src="images/<?PHP echo $obj->BK_IMAGE; ?>" alt="View Details" width="100" height="130" border="0"></a></td>
                                      </tr>
                                      <tr align="center" class="itemtitle"> 
                                        <td colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $obj->BK_ID; ?>" class="maltitle"><?PHP echo $obj->BK_TITLE; ?></a></td>
                                      </tr>
                                      <tr class="prred"> 
                                        <td width="134">Price : <?PHP echo $obj->BK_SHOPPRICE; ?></td>
                                        <td width="65" align="left"><a href="add_to_cart.php?prdid=<?PHP echo $obj->BK_ID ; ?>"><img src="images/cart.jpg" alt="Add to Cart" width="25" height="20" border="0"></a></td>
                                      </tr>
                                    </table></td>
									<?PHP
									$cnt++;
										if($cnt ==3 ){
										 $cnt =0 ;
										 echo " </tr><tr>";
										}
									 }
									  ?>
                                </tr>
                              </table> </td>
                            <td width="2" background="images/index_41.jpg">&nbsp;</td>
                            <td width="6">&nbsp;</td>
                          </tr>
                          <tr align="right"> 
                            <td colspan="3"><img src="images/index_42.jpg" width="644" height="20"></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><table width="639" border="0">
                          <tr class="ashlabel"> 
                            <td width="121">&nbsp;</td>
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
</table>
</body>
</html>
