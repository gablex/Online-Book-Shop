<?php
session_start();
if(!isset($_SESSION['ses_admin'])){
 header("location:index.php?msg=You must login to the system");
 exit();
}
?>