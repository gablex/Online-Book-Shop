<?PHP
session_start();
if(isset($_SESSION['login'])){
header("location:shippinginfo.php");
exit();
}else{
header("location:direct.php");
exit();
}

?>