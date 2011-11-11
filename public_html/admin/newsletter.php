<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

include("FCKeditor/fckeditor.php") ;
	$oFCKeditor1 = new FCKeditor('Description') ;
	$oFCKeditor1->BasePath = 'FCKeditor/';
	$oFCKeditor1->Width    = '100%' ;
	$oFCKeditor1->Height   = '500' ; 
	
if(isset($_REQUEST['Submit'])){
	$subject  = $_REQUEST['subject'];
    $message  = $_REQUEST['Description'];
    $headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Online Bookshop <birthday@example.com>' . "\r\n";

   $sql="SELECT NL_EMAIL FROM newsletter  WHERE NL_STATUS = 0"; //select record from the table
   $res = $cmdClass->ExecuteQuery($sql);
   $num = $cmdClass->getNumberRows($res);
   if ($num!=0){
   while($obj = $cmdClass->getObject($res)){
    $mail = $obj->NL_EMAIL;
	$headers .= 'To: $mail' . "\r\n";
    mail($mail, $subject, $message, $headers);
   }
 }
}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="frm_exchange" method="post" action="" onSubmit="return validate();">
  <div align="center"><span class="logintext">News Letter</span><br>
  </div>
  <table width="82%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center"><td height="29" colspan="2" class="errortxt"><?php echo $_REQUEST["msg"];?></td></tr>
	<tr> 
      <td width="18%" height="36" class="labeltxt">Subject</td>
      <td width="82%"><input name="subject" type="text" class="longtxtbox" id="subject" value="<?php echo $ex_name ;?>"></td>
    </tr>
    <tr> 
      <td height="23" class="labeltxt">Message</td>
      <td> 
        <?php $oFCKeditor1->Create(); ?>
      </td>
    </tr>
    <tr align="center"> 
      <td colspan="2"><input name="Submit" type="submit" class="subbox" value="Send Mail"></td>
      
    </tr>
  </table>
</form>

</body>
</html>
<script>
function validate()
{
if(document.frm_exchange.name.value=="")
  {
   alert("please enter the name!");
   document.frm_exchange.name.focus();
   return false;
  }
/*if(document.frm_exchange.Description.value=="")
  {
   alert("please enter the Description!");
   document.frm_exchange.Description.focus();
   return false;
  } */
return true;

}
</script>