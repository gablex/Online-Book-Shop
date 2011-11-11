<?PHP
session_start();
include_once("includes/dbClass.php");
require_once 'Pager/Pager.php';
$cmdClass = new dbClass();
$cmdClass->getConnection();
########### Search
if(isset($_REQUEST['SearchKey']))
{
$_SESSION['searKey'] = $_REQUEST['SearchKey'];
}

    
	$sql="SELECT BK_ID,BK_AUTH,BK_TITLE,BK_CURRENCY,BK_PRICE,BK_SHOPPRICE,BK_IMAGE,BK_EDITION FROM bookmaster WHERE BK_TITLE LIKE '%$searKey%' OR BK_PUBLISHER LIKE '%".$_SESSION['searKey']."' OR BK_DESC LIKE '".$_SESSION['searKey']."' OR BK_TABLECNT LIKE '".$_SESSION['searKey']."' OR BK_AUTHDETAILS LIKE '".$_SESSION['searKey']."'  order by BK_CDATE DESC"; //select record from tha table
   	$res = $cmdClass->ExecuteQuery($sql);
	$rec = $cmdClass->getNumberRows($res);
	if($rec==0)
	{
	 $page = "search.php";
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
		$myData[] =array($obj->BK_ID,$obj->BK_AUTH,$obj->BK_TITLE ,$obj->BK_CURRENCY,$shopprice,$obj->BK_IMAGE ,$obj->BK_EDITION,$price);
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

			$label ="";
			$price = ""; 
			
			 if($datarray[4] < $datarray[7] && $datarray[4] !="" && $datarray[4] !=0)
			{
				$label ="Our Price";
				$price = "&nbsp;$&nbsp;".$datarray[4];
			}
	 ?>
			  <table width="581" border="0" cellspacing="0" class="redborder">
                  <tr> 
                    <td width="112" height="111" align="center" valign="middle"><img src="images/<?PHP echo $datarray[5]; ?>" width="95" height="104"></td>
                    <td align="left" valign="top"><table width="458" border="0" cellpadding="0" cellspacing="0">
            <tr> 
             <td width="67" height="33" class="searlstxt">Title</td>
             <td width="220" class="normaltxt">&nbsp;<a href="bookdetails.php?prdid=<?PHP echo $datarray[0]; ?>" ><?php echo $datarray[2]; ?></a></td>
             <td width="71" class="searlstxt">Price</td>
             <td width="100" class="normaltxt">&nbsp;$&nbsp;<?php echo $datarray[7]; ?></td>
            </tr>
            <tr> 
             <td height="32" class="searlstxt">Author</td>
             <td class="normaltxt">&nbsp;<?php echo $datarray[1]; ?></td>
             <td class="searlstxt"><?=$label?></td>
             <td class="normaltxt"><?=$price?></td>
            </tr>
            <tr> 
             <td height="36" class="searlstxt">Edition</td>
             <td class="normaltxt">&nbsp;<?php echo $datarray[6]; ?></td>
             <td colspan="2" class="searlstxt"><a href="add_to_cart.php?prdid=<?PHP echo $datarray[0]; ?>" class="searlstxt">Add 
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
                <table width="581" border="0" class="redborder">
                  <tr>
                    <td align="center" class="searlstxt"><?php echo $links['all']; ?></td>
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
