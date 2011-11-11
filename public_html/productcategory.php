<?PHP
session_start();
include_once("includes/dbClass.php");
require_once 'Pager/Pager.php';
$cmdClass = new dbClass();
$cmdClass ->getConnection();
$sql = "SELECT CAT_NAME FROM categorymaster WHERE CAT_ID =".$_REQUEST['catid'];
$result = $cmdClass->ExecuteQuery($sql);
$obj = $cmdClass->getObject($result);
$name = $obj->CAT_NAME; 
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
<table width="983" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          
        <td width="137" align="left" valign="top"> 
          <?PHP include_once("leftmenu.php");?>
        </td>
          <td width="426" align="left" valign="top" class="menu"><table width="426" border="0" cellpadding="0" cellspacing="0">
              
            <tr> 
              <td width="600">
                <?PHP include_once("search.php");?>
              </td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="426" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                      
                    <td width="426" align="left" valign="top">
					<table width="600" border="0" cellpadding="0" cellspacing="0">
                        <tr > 
                          <td width="1" height="374" colspan="2" align="center" valign="top">
<table width="600" height="393" border="0" cellpadding="0" cellspacing="0">
                              <tr> 
                                <td height="15" align="center" valign="bottom" class="blackbold"><?PHP echo strtoupper($name); ?></td>
                              </tr>
                              <tr> 
                                <td align="center" valign="top" width="600"> 
                               <?PHP
								$count = 0;
								$sql = "SELECT CAT_ID,CAT_NAME FROM categorymaster WHERE CAT_PARENT =".$_REQUEST['catid'] ." ORDER BY CAT_NAME";
								$res = $cmdClass->ExecuteQuery($sql);
								$num =  $cmdClass->getNumberRows($res);
								$rowcount = ($num/3);
								$fstrNum = floor($rowcount);
								$lstrNum = ceil($rowcount);
								while($obj = $cmdClass->getObject($res)){
								$rec[$count]['CAT_ID']   = $obj->CAT_ID;
								$rec[$count]['CAT_NAME'] = $obj->CAT_NAME;
								$count++;
								}
								if($num >0){
							?>
								  
								  
								  <table width="600" border="0" cellspacing="0" cellpadding="0">
                                    <tr> 
                                      <td colspan="3"><img src="images/cattop.jpg" width="600" height="34"></td>
                                    </tr>
                                    <tr> 
                                      <td width="12" background="images/catleft.jpg">&nbsp;</td>
                                      <td width="575" align="center" valign="top"><table width="574" border="0">
                                          <tr>
                                            <td align="center" valign="top"> 
                                           <table width="100%" height="40" border="0" cellpadding="0" cellspacing="2">
                                             <?PHP
											for($i =0;$i< $fstrNum;$i++){
											  ?>
                                                 <tr> 
												  <td width="12" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$i]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><img src="images/dot.gif" border="0"></a></td>
                                                  <td width="144" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$i]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><?PHP echo $rec[$i]['CAT_NAME']; ?></a></td>
                                             <?PHP
											 }
											  ?>
                                              </table> 
                                              <table width="100%" height="40" border="0" cellpadding="0" cellspacing="2">
											
    										</table>
											</td>
                                            <td align="center" valign="top"><table width="100%" height="40" border="0" cellpadding="0" cellspacing="2">
                                                <?PHP
											for($j =$fstrNum;$j<(2*$fstrNum);$j++){
											  ?>
                                                <tr> 
                                                  <td width="12" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$j]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><img src="images/dot.gif" border="0"></a></td>
                                                  <td width="144" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$j]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><?PHP echo $rec[$j]['CAT_NAME']; ?></a></td>
                                                  <?PHP
											 }
											  ?>
                                              </table></td>
                                            <td align="center" valign="top"><table width="100%" height="40" border="0" cellpadding="0" cellspacing="2">
                                                <?PHP
											for($k =(2*$fstrNum);$k< (2*$fstrNum + $lstrNum );$k++){
											  ?>
                                                <tr> 
                                                  <td width="12" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$k]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><img src="images/dot.gif" border="0"></a></td>
                                                  <td width="144" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$k]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><?PHP echo $rec[$k]['CAT_NAME']; ?></a></td>
                                                  <?PHP
											 }
											  ?>
                                              </table></td>
                                          </tr>
                                        </table> </td>
                                      <td width="13" valign="top" background="images/catright.jpg">&nbsp;</td>
                                    </tr>
                                    <tr> 
                                      <td height="31" colspan="3"><img src="images/catbottom.jpg" width="600" height="31"></td>
                                    </tr>
                                  </table>
								  <?PHP
								  }
								  ?>
								  </td>
                              </tr>
                              <tr> 
                                <td height="270" align="center" valign="top">
<table width="600" border="0" cellpadding="0" cellspacing="0">
                                    <tr align="right"> 
                                      <td colspan="3"><div align="left"><img src="images/index_13.jpg" width="600" height="31"></div></td>
                                    </tr>
                                    <tr> 
                                      <td width="595" align="center" valign="top"> 
                          
                                        <table width="179" height="195" border="0" cellpadding="0" cellspacing="0">
                                          <tr> 
                                            <?PHP
								 $sql="SELECT BK_ID,BK_AUTH,authermaster.AUTH_NAME,BK_TITLE,BK_CURRENCY,BK_SHOPPRICE,BK_IMAGE,BK_PRICE  FROM bookmaster,authermaster WHERE authermaster.AUTH_ID = bookmaster.BK_AUTH AND BK_FEATURED=1 AND BK_CAT IN (SELECT CAT_ID FROM categorymaster WHERE CAT_PARENT =".$_REQUEST['catid'].") order by BK_CDATE DESC LIMIT 9"; //select record from tha table
   								 $res = $cmdClass->ExecuteQuery($sql);
								 $cnt = 0;
								 while($obj = $cmdClass->getObject($res)){
								 
								 if($obj->BK_CURRENCY == "Rs")
									{
										$currency  = "US$";
										$price     = $cmdClass->getRate($obj->BK_PRICE,"RS");
										$shopprice = $cmdClass->getRate($obj->BK_SHOPPRICE,"RS");
									}
									elseif($obj->BK_CURRENCY == "Euro")
									{
										$currency  = "US$";
										$price     = $cmdClass->getRate($obj->BK_PRICE,"EURO");
										$shopprice = $cmdClass->getRate($obj->BK_SHOPPRICE,"EURO");
									}
									else
									{
										$currency = $obj->BK_CURRENCY;
										$price    = $obj->BK_PRICE;
								        $shopprice = $obj->BK_SHOPPRICE;

									}
									
								 ?>
                                            <td width="175"><table width="181" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr align="center" valign="top"> 
                         <td height="138" colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $obj->BK_ID; ?>"><img src="images/<?PHP echo $obj->BK_IMAGE; ?>" alt="View Details" width="100" height="130" border="0"></a></td>
                        </tr>
                        <tr align="left" class="itemtitle"> 
                         <td height="30" colspan="2" class="normaltxt"><a href="bookdetails.php?prdid=<?PHP echo $obj->BK_ID; ?>"><span class="prred">&nbsp;&nbsp;</span><?PHP echo $obj->BK_TITLE; ?></a></td>
                        </tr>
                        <tr align="left" class="itemtitle"> 
                         <td height="27" colspan="2"><span class="prred">&nbsp;&nbsp;By : 
                          </span> &nbsp;<a href="bookauther.php?auth=<?=$obj->BK_AUTH?>"><?PHP echo $obj->AUTH_NAME ; ?></a></td>
                        </tr>
                        <tr align="left" class="prred"> 
                         <td width="145" height="24">&nbsp;&nbsp;Price : $ 
                          <?=$price; ?>
                         </td>
                         <td width="36"><a href="add_to_cart.php?prdid=<?PHP echo $obj->BK_ID ; ?>"><img src="images/cart.jpg" alt="Add to Cart" width="25" height="20" border="0"></a></td>
                        </tr>
                        <tr align="left" class="prred"> 
                         <td height="22">
						 <?PHP
						 if( $shopprice<$price && $shopprice !="" && $shopprice!=0 )
						 {
						 	echo "&nbsp;&nbsp;Our Price :&nbsp;".$shopprice;
						 }
						?> 
						 </td>
                         <td>&nbsp;</td>
                        </tr>
                        <tr align="left" class="prred">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
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
                                        </table></td>
                                      <td width="5" background="images/index_41.jpg">&nbsp;</td>
                                      <td width="1">&nbsp;</td>
                                    </tr>
                                    <tr align="right"> 
                                      <td colspan="3"><img src="images/index_42.jpg" width="600" height="19"></td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table>
                            </td>
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
          <td width="420">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
