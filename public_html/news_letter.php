<?php
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();
 $sql ="select * from newsletter where  NL_EMAIL ='".trim($_REQUEST['id'])."'";
 $result=$cmdClass->ExecuteQuery($sql);
 $num  = $cmdClass->getNumberRows($result);
 if($num == 0){
 $sql="INSERT INTO newsletter   (NL_EMAIL ) VALUES('".trim($_REQUEST['id'])."')";
 $cmdClass->ExecuteQuery($sql);
 echo "Thank You for joining the group";
 }else{
 echo "This ID exists in the group";
 }
?>
