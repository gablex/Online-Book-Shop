<?PHP
session_start();
include_once("includes/dbClass.php");
require_once 'Pager/Pager.php';
$cmdClass = new dbClass();
$cmdClass ->getConnection();

if(isset($_GET['auth']))
{
$_SESSION['auth'] = $_GET['auth'];
}
$sql="SELECT BK_ID,authermaster.AUTH_NAME,BK_TITLE,BK_CURRENCY,BK_SHOPPRICE,BK_IMAGE,BK_EDITION  FROM bookmaster,authermaster WHERE bookmaster.BK_AUTH = authermaster.AUTH_ID AND BK_AUTH =".$_SESSION['auth']; //select record from tha table
$res = $cmdClass->ExecuteQuery($sql);
$rec = $cmdClass->getNumberRows($res);
while($obj = $cmdClass->getObject($res)){
		$myData[] =array($obj->BK_ID,$obj->AUTH_NAME,$obj->BK_TITLE ,$obj->BK_CURRENCY,$obj->BK_SHOPPRICE,$obj->BK_IMAGE ,$obj->BK_EDITION);
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
                        <tr align="center"> 
                          <td width="1">
						<table width="179" height="195" border="0" cellpadding="0" cellspacing="0">
                              <tr> 
                                <?PHP
								 if($rec!=0){
								 echo "<div align='right' class='prred'>".$tot." &nbsp;Records Found !!! </div>";
								 foreach ($page_data as $datarray){
									
								 ?>
                                <td width="175"><table width="181" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr align="center" valign="top"> 
                                      <td height="149" colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $datarray[0]; ?>"><img src="images/<?PHP echo $datarray[5]; ?>" alt="View Details" width="100" height="130" border="0"></a></td>
                                    </tr>
                                    <tr align="center" class="itemtitle"> 
                                      <td colspan="2"><a href="bookdetails.php?prdid=<?PHP echo $datarray[0]; ?>" class="itemtitle"><?PHP echo $datarray[2]; ?></a></td>
                                    </tr>
                                    <tr align="center" class="itemtitle"> 
                                      <td colspan="2">By &nbsp;<?PHP echo $datarray[1] ; ?></td>
                                    </tr>
                                    <tr class="prred"> 
                                      <td width="129">&nbsp;&nbsp;Price : <?PHP echo $datarray[3] ." ".$datarray[4]; ?></td>
                                      <td width="52" align="left"><a href="add_to_cart.php?prdid=<?PHP echo $datarray[0] ; ?>"><img src="images/cart.jpg" alt="Add to Cart" width="25" height="20" border="0"></a></td>
                                    </tr>
                                    <tr class="prred"> 
                                      <td>&nbsp;</td>
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
