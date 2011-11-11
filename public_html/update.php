<?php
session_start();
$cart=$_SESSION['cart'];
if(isset($_REQUEST['idxs'])){
	$idxs=$_REQUEST['idxs'];
	}
if(isset($_REQUEST['quantity'])){
	$qtys=$_REQUEST['quantity'];
	}
$i=0;
 foreach($qtys as $qty){
 $cart[$i]['Qty']=$qty;
 		if($qty==0){
		unset($cart[$i]);
		}
 $i++;
 }
//deleting products from array
	if(isset($_REQUEST['idxs'])){
			foreach($idxs as $idx){
			unset($cart[$idx]);
			}
		}

$_SESSION['cart']=$cart;
header("location:cart.php");
exit();
?>