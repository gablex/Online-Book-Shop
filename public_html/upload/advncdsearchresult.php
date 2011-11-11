<?PHP
session_start();
include_once("includes/dbClass.php");
include_once("includes/class.searchClass.php");
require_once 'Pager/Pager.php';
$cmdClass = new dbClass();
$searchClass = new searchClass();
$cmdClass->getConnection();
########### Search
   $keyArry = $_SESSION['keyarr'];
   	$res = $cmdClass->ExecuteQuery($_SESSION['query']);
	$rec = $cmdClass->getNumberRows($res);
	if($rec==0)
	{
	 $page = "search.php";
	}
	else
	{
		while($obj = $cmdClass->getObject($res)){
		$myData[] =array($obj->BK_ID,$obj->AUTH_NAME,$obj->BK_TITLE ,$obj->BK_CURRENCY,$obj->BK_SHOPPRICE,$obj->BK_IMAGE ,$obj->BK_EDITION);
	   	}
	   $params = array(
		'itemData' => $myData,
		'perPage' => 10,
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
			
########### Search
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
        <td width="137" height="503" align="left" valign="top"> 
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="600" align="left" valign="top" class="menu"><table width="600" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td width="600" height="55"><table width="209" height="55" border="0">
                  <tr> 
                    <td height="51" valign="bottom" background="images/searchband.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td width="64" height="21">&nbsp;</td>
                          <td width="145" class="wtlogin">Search Results</td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
            <tr> 
              <td height="22" align="center" valign="top">
 <?php 
   // Listing
  if($rec!=0){
  echo "<div align='right' class='prred'>".$tot." &nbsp;Records Found !!! </div>";
	foreach ($page_data as $datarray){
	 ?>
			    <table width="594" border="0" cellpadding="0" cellspacing="0" class="redborder">
                  <tr> 
                    <td width="85" height="92" align="center" valign="middle"><img src="images/<?PHP echo $datarray[5]; ?>" width="60" height="70"></td>
                    <td width="494" align="left" valign="middle">
<table width="509" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td width="68" height="28" class="blackbold">Title &nbsp;&nbsp;&nbsp;&nbsp;:</td>
                          <td width="326" class="seresult"> 
                            <?php
						  /* $txtRes =  $searchClass->markKeyword($keyArry,$datarray[2]);
						  echo  $txtRes;  */
						  echo $datarray[2];
						  ?>
                          </td>
                          <td width="45" class="blackbold">Price</td>
                          <td width="70" class="blackbold">&nbsp;<?php echo $datarray[3]; ?>&nbsp;<?php echo $datarray[4]; ?></td>
                        </tr>
                        <tr> 
                          <td height="35" class="blackbold">Author :</td>
                          <td class="seresult"><?php echo $datarray[1]; ?></td>
                          <td colspan="2" class="blackbold"><a href="bookdetails.php?prdid=<?PHP echo $datarray[0]; ?>" class="blackbold">View 
                            Details</a></td>
                        </tr>
                        <tr> 
                          <td height="29" class="blackbold">Edition :</td>
                          <td class="seresult"><?php echo $datarray[6]; ?></td>
                          <td colspan="2" class="blackbold"><a href="add_to_cart.php?prdid=<?PHP echo $datarray[0]; ?>" class="blackbold">Add 
                            To Cart</a></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
				  <br>
				<?PHP
				}
				//listing Ends
				?>
                <br>
                <table width="600" border="0" class="redborder">
                  <tr>
                    <td width="585" align="center" class="searlstxt"><?php echo $links['all']; ?></td>
                  </tr>
                </table>
				<?PHP
				}
				else
				{
				echo "<br><br><div align=center' class='prred'>No&nbsp;Records Found ,Search again!!! </div><br>";
				include_once($page);
				}
				?>
				 </td>
            </tr>
            <tr>
              <td height="22" align="center" valign="top">
                <?PHP include_once("footermenu.php");?>
              </td>
            </tr>
          </table></td>
          <td width="330">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
