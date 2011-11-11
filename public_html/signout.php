<?PHP
session_start();
session_unset();
header("location:index.php?msg=2");
exit();
?>
