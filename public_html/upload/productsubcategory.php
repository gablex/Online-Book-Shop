<?PHP
session_start();
include_once("includes/dbClass.php");
require_once 'Pager/Pager.php';
$cmdClass = new dbClass();
$cmdClass ->getConnection();
$sql = "SELECT CAT_NAME FROM categorymaster WHERE CAT_ID =".$_REQUEST['subcat'];
$result = $cmdClass->ExecuteQuery($sql);
$obj = $cmdClass->getObject($result);
$name = $obj->CAT_NAME;
if(isset($_REQUEST['subcat']))
{
$_SESSION['subcat'] = $_REQUEST['subcat'];
}
$sql="SELECT BK_ID,BK_AUTH,BK_TITLE,BK_CURRENCY,BK_SHOPPRICE,BK_IMAGE,BK_EDITION,BK_PRICE,authermaster.AUTH_NAME  FROM bookmaster,authermaster WHERE  bookmaster.BK_AUTH  = authermaster.AUTH_ID AND BK_CAT =".$_SESSION['subcat']; //select record from tha table
$res = $cmdClass->ExecuteQuery($sql);
$rec = $cmdClass->getNumberRows($res);
if($rec==0)
{
}
else
{
while($obj = $cmdClass->getObject($res))
	{
		if($obj->BK_CURRENCY == "Rs")
				{
					$price     = $cmdClass->getRate($obj->BK_PRICE,"RS");
					$shopprice = $cmdClass->getRate($obj->BK_SHOPPRICE,"RS");
				}
			elseif($obj->BK_CURRENCY == "Euro")
				{
					$price     = $cmdClass->getRate($obj->BK_PRICE,"EURO");
					$shopprice = $cmdClass->getRate($obj->BK_SHOPPRICE,"EURO");
				}
			else
				{
					$price    = $obj->BK_PRICE;
					$shopprice = $obj->BK_SHOPPRICE;
				}
	
		$myData[] =array($obj->BK_ID,$obj->AUTH_NAME,$obj->BK_TITLE ,$obj->BK_CURRENCY,$shopprice,$obj->BK_IMAGE ,$obj->BK_EDITION,$price,$obj->BK_AUTH);
	}
	   $params = array(
		'itemData' => $myData,
		'perPage' => 9,
		'delta' => 8,             // for 'Jumping'-style a lower number is better
		'append' => true,
		'separator' => ' | ',
		'clearIfVoid' => false,
		'urlVar' => 'entrant',
		'useSessions' => true,
		'closeSession' => true,
		'mode'  => 'Sliding',    //try switching modes
		//'mode'  => 'Jumping',

		);
	$pager = & Pager::factory($params);
	$page_data = $pager->getPageData();
	$links = $pager->getLinks();
	$selectBox = $pager->getPerPageSelectBox();
	$tot =  $pager->numItems();
	$totpage = $pager->numPages();
	$curpage = $pager->getCurrentPageID();
	}
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
          <td width="531" align="left" valign="top" class="menu"><table width="607" border="0" cellpadding="0" cellspacing="0">
              
            <tr> 
              <td width="607">
                <?PHP include_once("search.php");?>
              </td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="600" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                      <td width="600" align="left" valign="top"><table width="600" border="0" cellpadding="0" cellspacing="0">
                        <tr align="right"> 
                          <td height="29" colspan="2"><div align="left"> 
                              <table width="600" height="22" border="0" cellpadding="0" cellspacing="0">
                                <tr> 
                                  <td height="22" align="center" valign="bottom"><table width="300" border="0" cellpadding="0" cellspacing="0">
                                      <tr> 
                                        <td height="22" align="center" valign="middle" class="ashlabel"><?PHP echo strtoupper($name); ?></td>
                                      </tr>
                                    </table></td>
                                </tr>
                              </table>
                            </div></td>
                        </tr>
                        <tr> 
                          <td align="center" valign="top">
						  <?PHP
						    $count = 0;
							$sql = "SELECT CAT_ID,CAT_NAME FROM categorymaster WHERE CAT_PARENT =".$_REQUEST['subcat']." ORDER BY CAT_NAME";
							$res = $cmdClass->ExecuteQuery($sql);
							$num =  $cmdClass->getNumberRows($res);
							if($num >0){
							$rowcount = ($num/3);
							$fstrNum = floor($rowcount);
							$lstrNum = ceil($rowcount);
							 while($obj = $cmdClass->getObject($res)){
									 $rec[$count]['CAT_ID']   = $obj->CAT_ID;
									 $rec[$count]['CAT_NAME'] = $obj->CAT_NAME;
									  $count++;
									}
							 ?>
						   <table width="600" border="0" cellspacing="0" cellpadding="0">
                              <tr> 
                                <td colspan="3"><img src="images/cattop.jpg" width="600" height="34"></td>
                              </tr>
                              <tr> 
                                <td width="12" background="images/catleft.jpg">&nbsp;</td>
                                <td width="575" align="center" valign="top"><table width="569" border="0">
                                    <tr> 
                                      <td width="162" align="center" valign="top"> 
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
                                        </table></td>
                                      <td width="162" align="center" valign="top"><table width="100%" height="40" border="0" cellpadding="0" cellspacing="2">
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
                                      <td width="201" align="center" valign="top"><table width="100%" height="40" border="0" cellpadding="0" cellspacing="2">
                                          <?PHP
											for($k =(2*$fstrNum);$k< (2*$fstrNum + $lstrNum );$k++){
											  ?>
                                          <tr> 
                                            <td width="12" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$k]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><img src="images/dot.gif" border="0"></a></td>
                                            <td width="144" valign="top" class="searlstxt"><a href="productsubcategory.php?subcat=<?PHP echo $rec[$k]['CAT_ID']; ?>&catid=<?PHP echo $_REQUEST['catid']; ?>" class="searlstxt"><?PHP echo $rec[$k]['CAT_NAME']; ?></a></td>
                                            <?PHP
											 }
											  ?>
                                        </table>				
										</td>
                                    </tr>
                                  </table></td>
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
                          <td width="1">&nbsp;</td>
                        </tr>
                        <tr align="center"> 
                          <td colspan="2"> <table width="179" height="258" border="0" cellpadding="0" cellspacing="0">
                              <tr> 
                                <?PHP
								 if($rec!=0){
								 echo "<div align='right' class='prred'>".$tot." &nbsp;Records Found !!! </div>";
								 foreach ($page_data as $datarray){
									
								 ?>
                                <td width="175" height="258"><table width="181" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr align="center" valign="top"> 
                   <td height="149" colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $datarray[0]; ?>"><img src="images/<?PHP echo $datarray[5]; ?>" alt="View Details" width="100" height="130" border="0"></a></td>
                  </tr>
                  <tr align="left" class="itemtitle"> 
                   <td height="23" colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $datarray[0]; ?>" ><span class="prred">&nbsp;&nbsp;</span><?PHP echo $datarray[2]; ?></a></td>
                  </tr>
                  <tr align="left" class="itemtitle"> 
                   <td height="22" colspan="2" class="normaltxt"><span class="prred">&nbsp;&nbsp;By 
                    : &nbsp;</span><a href="bookauther.php?auth=<?=$datarray[8]?>"><?PHP echo $datarray[1] ; ?></a></td>
                  </tr>
                  <tr class="prred"> 
                   <td width="152" height="28">&nbsp;&nbsp;Price : $ <?PHP echo $datarray[7]; ?></td>
                   <td width="29" align="left"><a href="add_to_cart.php?prdid=<?PHP echo $datarray[0] ; ?>"><img src="images/cart.jpg" alt="Add to Cart" width="25" height="20" border="0"></a></td>
                  </tr>
                  <tr class="prred"> 
                   <td height="22"> &nbsp; 
                    <?PHP 
				 if($datarray[4] < $datarray[7] && $datarray[4] !="" && $datarray[4] !=0)
					{
						echo "Our Price&nbsp;$&nbsp;".$datarray[4];
					}
				?>
                   </td>
                   <td align="left">&nbsp;</td>
                  </tr>
                  <tr class="prred">
                   <td height="14">&nbsp;</td>
                   <td align="left">&nbsp;</td>
                  </tr>
                 </table></td>
                                <?PHP
									$cnt++;
										if($cnt ==3 ){
										 $cnt =0 ;
										 echo " </tr><tr>";
										}
									 }
									}
									  ?>
                              </tr>
                            </table>
                            <br> <table width="581" border="0" class="redborder">
                              <tr> 
                                <td align="center" class="searlstxt"><?php echo $links['all']; ?></td>
                              </tr>
                            </table></td>
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
