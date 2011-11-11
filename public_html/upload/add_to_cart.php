<?php
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$con = $cmdClass->getConnection();
	   if(isset($_SESSION['cart']))  // Check whether the cart exist
               $cart = $_SESSION['cart']; // If exist take it from session (Actually it is an array)
       else
               $cart = array(); // If not create a new cart.
       $n = count($cart);              // Find the number of elements in the cart
       $prdid=$_REQUEST['prdid'];
       $sql="select BK_ID,BK_TITLE ,BK_SHOPPRICE,PUB_NAME,BK_CURRENCY,BK_PRICE from bookmaster,publishermaster where bookmaster.BK_PUBLISHER = publishermaster.PUB_ID AND BK_ID =$prdid";
	   $rs=$cmdClass->ExecuteQuery($sql);
       if($cmdClass->getNumberRows($rs)>0) 
       {
  	 	$objBook = $cmdClass->getObject($rs);
  	 	$itemid = $objBook->BK_ID;
   	    $pub   = $objBook->PUB_NAME;
		if($objBook->BK_CURRENCY == "Rs")
		{
			$price     = $cmdClass->getRate($objBook->BK_PRICE,"RS");
		    $shopprice = $cmdClass->getRate($objBook->BK_SHOPPRICE,"RS");
		}
		elseif($objBook->BK_CURRENCY == "Euro")
		{
			$price     = $cmdClass->getRate($objBook->BK_PRICE,"EURO");
			$shopprice = $cmdClass->getRate($objBook->BK_SHOPPRICE,"EURO");
		}
		else
		{
			$price    = $objBook->BK_PRICE;
			$shopprice = $objBook->BK_SHOPPRICE;

		}
		if($shopprice< $price && $shopprice !="" && $shopprice!=0)
		{
	  		$rate= $shopprice;
		}
		else
		{
			$rate= $price;
		}
   		$itemname=$objBook->BK_TITLE;
   	 	$qty=1;
       }
 	else
       {
header("Location:index.php");  // If there is no item with the itemid go back. change the filename.
       }
   $idx = 0;
   $exist = false;
   foreach($cart as $tmp) {
   if($tmp['ItemID'] == $itemid) {
   $tmp['Qty'] +=  $qty;
   $cart[$idx] = $tmp;
   $exist = true;
    break;
    }
   $idx++;    
	}
if($exist==false){
$cart[$n] = array('ItemID' => $itemid,'Pub'=> $pub, 'Qty' => $qty, 'Rate' => $rate,'Name'=>$itemname);
}
$_SESSION['cart'] = $cart; 
$cmdClass->closeConnection($con);
header("Location:cart.php"); //Goto a page required.

?>


