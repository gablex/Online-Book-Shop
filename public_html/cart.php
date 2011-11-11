<?PHP
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
<table width="983" border="0" cellpadding="0" cellspacing="0">
        
      <tr> 
        <td width="137" align="left" valign="top"> 
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="600" align="left" valign="top" class="menu"><table width="612" border="0" cellpadding="0" cellspacing="0">
            
              <tr>
                <td align="left" valign="top"><table width="612" border="0">
                  <tr> 
                    <td width="606" align="left" valign="top"><table width="606" border="0" cellpadding="0" cellspacing="0">
                        <tr align="left"> 
                          <td width="606" align="left"><table width="209" height="50" border="0">
                              <tr>
                                <td valign="bottom" background="images/carthead.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="64">&nbsp;</td>
                                      <td width="145" class="wtlogin">Shopping 
                                        Cart </td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td height="443" align="center" valign="top" class="prred"> 
                            <?PHP if(count($_SESSION['cart']) !=0){ ?>
                            <form name="cartform" method="post" action="update.php">
                              <br>
                              <table width="600" border="0" align="center" cellpadding="0" cellspacing="1" class="blackborder">
                                <tr bgcolor="#000000" class="whtcart"> 
                                  <td width="51" height="12"><div align="center"> 
                                      <p class="whitemicro"><strong>Remove </strong></p>
                                    </div></td>
                                  <td width="238"><div align="center"> 
                                      <p class="whitemicro"><strong>Book Title</strong></p>
                                    </div></td>
                                  <td width="107" align="center">Publisher</td>
                                  <td width="57"><div align="center"> 
                                      <p><strong>Qantity</strong></p>
                                    </div></td>
                                  <td width="72"><div align="center"> 
                                      <p class="whitemicro"><strong>Price Rs.</strong></p>
                                    </div></td>
                                  <td width="69"><div align="center"> 
                                      <p class="whitemicro"><strong>Amount Rs.</strong></p>
                                    </div></td>
                                </tr>
                                <?php
		$cart=$_SESSION['cart'];
		$totalamount=0;
		$i=0;
		foreach($cart as $temp){ ?>
                                <tr class="normaltxt"> 
                                  <td height="18"><div align="center"> 
                                      <p class="text"> 
                                        <input type="checkbox" name="idxs[]" value="<?php echo $i; ?>">
                                      </p>
                                    </div></td>
                                  <td><?php echo $temp['Name']; ?></td>
                                  <td><?php echo $temp['Pub']; ?></td>
                                  <td><div align="center"> 
                                      <input name="quantity[]" type="text" class="cartbox" value="<?php echo $temp['Qty'];?>" size="5">
                                    </div></td>
                                  <td width="72">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $temp['Rate']; ?></td>
                                  <td width="69"> 
                                    <?php
		  $total=$temp['Rate'] * $temp['Qty'];
		  $totalamount +=$total;
		  echo $total;
		   ?>
                                  </td>
                                </tr>
                                <?php 
		$i++;
		} ?>
                                <tr bgcolor="#000000"> 
                                  <td height="1" colspan="6"> </td>
                                </tr>
                                <tr> 
                                  <td height="19">&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                  <td class="prred">&nbsp;</td>
                                  <td class="blackbold"><strong>Total </strong></td>
                                  <td class="blackbold"> 
                                    <?php
				$_SESSION['total_amount']=$totalamount;
			 	echo $totalamount; ?>
                                  </td>
                                </tr>
                                <tr bgcolor="#000000"> 
                                  <td height="1" colspan="6"></td>
                                </tr>
                                <tr> 
                                  <td height="17" colspan="6"><div align="left"></div>
                                    <div align="right">
                                      <table width="600" border="0">
                                        <tr>
                                          <td width="249" height="25"><img src="images/UPDATECART.jpg" width="83" height="23" border="0" onClick="javascript:document.cartform.submit()"></td>
                                          <td width="215"><a href="index.php"><img src="images/cntnue.jpg" width="144" height="23" border="0"></a></td>
                                          <td width="144"><a href="direct.php"><img src="images/checkout.jpg" width="144" height="23" border="0"></a></td>
                                        </tr>
                                      </table>
                                    </div></td>
                                </tr>
                              </table>
                            </form> 
						   <?PHP
							}else{
							 echo "<br><br><br>";
							 echo "Your Shopping Basket is empty";
							}
							?>
                          </td>
                        </tr>
                        <tr align="right"> 
                          <td align="left"><img src="images/index_42.jpg"></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr> 
                    <td><?PHP include_once("footermenu.php");?></td>
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
