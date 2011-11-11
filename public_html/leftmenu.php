<?PHP
if(isset($_REQUEST['Submit'])){
 $sql = "SELECT USER_ID ,USER_FNAME ,USER_LNAME FROM userdetails WHERE USER_EMAIL ='".$_POST['email']."' AND USER_PASSWORD='".$_POST['pwd']."'";
 $res = $cmdClass->ExecuteQuery($sql);
 $num = $cmdClass->getNumberRows($res);
 if($num != 0){
   $obj = $cmdClass->getObject($res);
   $_SESSION['userid']=$obj->USER_ID;
   $_SESSION['username']=$obj->USER_FNAME." ".$obj->USER_LNAME;
   $_SESSION['login'] ="logged";
   header("location:index.php");
   exit(); 
   }else{
    header("location:index.php?msg=1");
    exit();  
   }
   }
?>
<script language="JavaScript">
function frmValidate(){
 if(document.logfrm.email.value==""){
  alert("Please enter your email id");
  document.logfrm.email.focus();
  return false;
 }
 if(document.logfrm.pwd.value==""){
  alert("Please enter your password");
  document.logfrm.pwd.focus();
  return false;
 }
return true;
}


function mailvalidate() // mail validation
{
if(document.frm_mail.mailid.value=="")
  {
 alert("Please Enter the mailid");
 document.frm_mail.mailid.focus();
 return false;
 
  }
  if (echeck(document.frm_mail.mailid.value)==false)
  {
		document.frm_mail.mailid.focus();
		return false;
  }
  var xmlHttp;

 var id;
 try{
	 xmlHttp=new XMLHttpRequest();
	}catch(e){
	 try{
	    xmlHttp = new ActiveXObject("Mxml2.XMLHTTP");
		}catch(e){
		 try{
		  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		 }catch(e){
		  alert("Your browser does not support Ajax");
		  return false;
		 }
		}
	}
 xmlHttp.onreadyStatechange=function(){
	 if (xmlHttp.readystate == 4){
	  document.frm_mail.mailid.value="";
	  alert(xmlHttp.responseText);
	  }
    }
id=document.frm_mail.mailid.value;
xmlHttp.open("GET","news_letter.php?id="+id,true);
xmlHttp.send(null);
 
}


function echeck(str) { //check mail id in correct format

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }	
	}
</script>

<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">


<body leftmargin="0" topmargin="0">
<table width="175" border="0" cellpadding="0" cellspacing="0">
  <tr align="right"> 
    <td height="8%" colspan="2"><img src="images/top.jpg" width="176" height="12"></td>
  </tr>
  <?PHP 
					 if($_REQUEST['msg'] == 1 ){
					 echo '<tr><td width="176" height="35" class="logtxt" align="center" background="images/index_50.jpg" colspan="2">Invalid Login</td></tr>';
					 }
					 if($_REQUEST['msg'] == 2 ){
					 echo '<tr><td width="176" height="35" class="logtxt" align="center" background="images/index_50.jpg" colspan="2">Signed Out</td></tr>';
					 }
                     ?>
  <tr> 
    <td width="174" height="21%" align="right" valign="top" background="images/index_50.jpg" class="whtcart"> 
      <?PHP 
					if(!isset($_SESSION['username'])){
					?>
      <table width="172"  border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="172" height="42" align="left" valign="top" background="images/index_50.jpg" > 
            <table width="167" height="93" border="0" cellspacing="0">
              <form action="" name="logfrm" method="post" onSubmit="return frmValidate();">
                <tr> 
                  <td width="56" height="24" class="logtxt">&nbsp;&nbsp;E Mail 
                    ID</td>
                  <td width="116"><input name="email" type="text" class="logbox" id="email"></td>
                </tr>
                <tr> 
                  <td height="22" class="logtxt">&nbsp;&nbsp;Password</td>
                  <td><input name="pwd" type="password" class="logbox" id="pwd"></td>
                </tr>
                <tr align="center"> 
                  <td height="10" colspan="2"><input name="Submit" type="submit" class="subwhite" value="Login"> 
                    &nbsp;</td>
                </tr>
              </form>
            </table></td>
        </tr>
        <tr> 
          <td align="right"><img src="images/bgfooter.jpg" width="172" height="27" border="0" usemap="#Map" href="forgotpassword.php"></td>
        </tr>
      </table>
      <?PHP
					}else{
					 ?>
      <table width="171" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="139"  align="center" class="logtxt" height="25">&nbsp;Welcome&nbsp;<?PHP echo $_SESSION['username']; ?></td>
        </tr>
      </table>
      <?PHP }?>
    </td>
    <td width="1" background="images/index_50.jpg" class="whtcart">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center" valign="bottom" class="redbrowse"></td>
    <td width="1" background="images/index_50.jpg" class="whtcart"></td>
  </tr>
  <tr> 
    <td rowspan="2" align="center" valign="top"> <table width="173" border="0" cellpadding="0" cellspacing="0">
        <?PHP
		$sql="select catsec_name,CAT_NAME,CAT_ID,SEC_ID from  categorymaster, categorysection where categorysection.catsec_id = categorymaster.SEC_ID AND CAT_PARENT =0 ORDER BY catsec_order,CAT_NAME";
        $res = $cmdClass->ExecuteQuery($sql);
   		while($obj = $cmdClass->getObject($res)){
		$sec = $obj->catsec_name;
		if( $sec != $sec_old){
		
		?>
        <tr> 
          <td width="173" height="21" align="center" class="redbrowse"></td>
        </tr>
        <tr> 
          <td height="21" align="left" class="redbrowse"><?PHP echo $obj->catsec_name ;?></td>
        </tr>
        <tr> 
          <td height="2" background="images/menudotbg.jpg" class="redbrowse" ></td>
        </tr>
        <?PHP
		}
		?>
        <tr> 
          <td align="right" valign="top"> <table width="169" height="24" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td height="5" align="left"></td>
              </tr>
              <tr> 
                <td width="161" height="18" align="left"><a href="productcategory.php?catid=<?PHP echo $obj->CAT_ID; ?>" class="leftmenu"><?PHP echo $obj->CAT_NAME ?></a></td>
              </tr>
            </table></td>
        </tr>
        <?PHP 
	$sec_old = $obj->catsec_name;
	} ?>
      </table></td>
    <td width="1" height="521" background="images/index_50.jpg" class="whtcart">&nbsp;</td>
  </tr>
  <tr> 
    <td width="1" height="90" background="images/index_50.jpg" class="whtcart">&nbsp;</td>
  </tr>
  <tr> 
    <td height="17" align="center" valign="top" colspan="2"><img src="images/btmmnu2.jpg" width="175" height="17"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="4,8,58,27" href="user_register.php">
  <area shape="rect" coords="62,5,167,25" href="forgotpassword.php">
</map>
