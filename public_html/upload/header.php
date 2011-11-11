<table width="900" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr> 
  <td width="983" height="10"></td>
  </tr>
  <tr> 
    
  <td width="983"><img src="images/lawbookLogo.jpg" width="391" height="69"></td>
  </tr>
  <tr> 
    <td height="32" align="left" valign="top">
<table width="1008" border="0">
        <tr> 
          <td width="984" height="32" background="images/index_05.jpg">
<table width="741" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr class="menu"> 
       <td width="95" height="23">&nbsp;</td>
       <td width="129"><a href="index.php" class="menu">Home</a></td>
       <td width="162"><a href="cart.php" class="menu">Shopping Cart</a></td>
       <td width="113"><a href="howtobuy.php" class="menu">How to buy</a></td>
       <td width="113"><a href="subscribe.php" class="menu">News Letter</a></td>
       <?PHP
		if(isset($_SESSION['username'])){
		 ?>
       <td width="129"><a href="signout.php" class="menu">Sign Out</a></td>
       <?PHP } ?>
      </tr>
     </table></td>
        </tr>
      </table></td>
  </tr>
