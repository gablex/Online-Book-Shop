<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass->getConnection();
########### New Registration
	if(isset($_REQUEST['Submit1']))
	{
		$FirstName=$_REQUEST['FirstName'];
		$LastName=$_REQUEST['LastName'];
		$HouseName=$_REQUEST['HouseName'];
		$Street=$_REQUEST['Street'];
		$City=$_REQUEST['City'];
		$State=$_REQUEST['State'];
		$Country=$_REQUEST['Country'];
		$Telephone=$_REQUEST['Telephone'];
		$PinCode=$_REQUEST['PinCode'];
		$Email_Id=$_REQUEST['Email_Id'];
		$Pwd=$_REQUEST['Pwd'];
		###### Email_Id validation
			$sql_register="select USER_EMAIL from userdetails where USER_EMAIL='$Email_Id'";
			$rs_register=$cmdClass->ExecuteQuery($sql_register);
			if($cmdClass->getNumberRows($rs_register)!=0)
			{
		 	 $back=$_REQUEST;
		 	 $regmsg="User already exists with this email";
	 		}
		###### Email_Id validation Ends
	   	   else
	   		{
				 $sql="insert into userdetails(
	USER_FNAME ,
   USER_LNAME ,  
   USER_HNAME, 
   USER_STREET ,
   USER_CITY,   
   USER_STATE,  
   USER_COUNTRY,
   USER_ZIP, 
   USER_TELEPHONE ,  
   USER_EMAIL ,  
   USER_PASSWORD , 
   USER_LASTLOGIN ,
   USER_CRDATE, 
   USER_MDDATE) values('$FirstName','$LastName','$HouseName','$Street','$City','$State','$Country','$PinCode','$Telephone','$Email_Id','$Pwd',now(),now(),now())";
				 $cmdClass->ExecuteQuery($sql);
				 $userid=$cmdClass->getLastId();
	if($_REQUEST['mail']==1){
	$sql="INSERT INTO newsletter   (NL_EMAIL ) VALUES('$Email_Id')";
    $cmdClass->ExecuteQuery($sql);
	}
			
		$_SESSION['userid']=$userid;
		$_SESSION['username']=$FirstName." ".$LastName;
		$_SESSION['login'] ="logged";
		if(!empty($_SESSION['cart']))
		{	
			header("location:shipmentdetails.php");
			exit();
		}else{
			header("location:index.php");
			exit();
		}
	}

 }
########### New Registration
?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function regformValidate()
{
	if(document.registerfrm.FirstName.value=="")
	{
	alert("Please enter your first name");
	document.registerfrm.FirstName.focus();
	return false;
	}
	if(document.registerfrm.LastName.value=="")
	{
	alert("Please enter your second name");
	document.registerfrm.LastName.focus();
	return false;
	}
	if(document.registerfrm.HouseName.value=="")
	{
	alert("Please enter your House Name");
	document.registerfrm.HouseName.focus();
	return false;
	}
	if(document.registerfrm.Street.value=="")
	{
	alert("Please enter your street");
	document.registerfrm.Street.focus();
	return false;
	}
	if(document.registerfrm.City.value=="")
	{
	alert("Please enter city name");
	document.registerfrm.City.focus();
	return false;
	}
	if(document.registerfrm.State.value=="")
	{
	alert("Please select state");
	document.registerfrm.State.focus();
	return false;
	}
	if(document.registerfrm.Country.value=="")
	{
	alert("Please enter your Country");
	document.registerfrm.Country.focus();
	return false;
	}
	if(document.registerfrm.PinCode.value=="")
	{
	alert("Please enter Pin code");
	document.registerfrm.PinCode.focus();
	return false;
	}
	if(document.registerfrm.Telephone.value=="")
	{
	alert("Please enter telephone number");
	document.registerfrm.Telephone.focus();
	return false;
	}
	var Email=document.registerfrm.Email_Id.value;
	if ((document.registerfrm.Email_Id.value==null)||(document.registerfrm.Email_Id.value==""))
	{
		alert("Please Enter your Email ID");
		document.registerfrm.Email_Id.focus();
		return false;
	}
	if (echeck(document.registerfrm.Email_Id.value)==false)
	{
		document.registerfrm.Email_Id.value="";
		document.registerfrm.Email_Id.focus();
		return false;
	}
	if(document.registerfrm.RetypeEmail.value==""){
	alert("Please retype email Id");
	document.registerfrm.RetypeEmail.focus();
	return  false;
	}
	if(document.registerfrm.Email_Id.value!=document.registerfrm.RetypeEmail.value)
	{
	alert("Email Id mismatch");
	document.registerfrm.RetypeEmail.focus();
	return  false;
	}
	if(document.registerfrm.Pwd.value=="")
	{
	alert("Please enter password");
	document.registerfrm.Pwd.focus();
	return  false;
	}
	if(document.registerfrm.RetypePassword.value=="")
	{
	alert("Please reenter password");
	document.registerfrm.RetypePassword.focus();
	return  false;
	}
	if(document.registerfrm.Pwd.value!=document.registerfrm.RetypePassword.value)
	{
	alert("Password mismatch");
	document.registerfrm.RetypePassword.focus();
	return  false;
	}
	
	return true;
	
}
function echeck(str) {

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
	
function NumericDataOnly()
{

   var key = window.event.keyCode;

   if (( key > 47 && key < 58 ) || (key ==32))
      return;
   else
      alert('Please enter numeric values');
      window.event.returnValue = null;
}	
</script>

</head>
<body leftmargin="0" topmargin="0">
<?PHP include("header.php"); ?>
  <tr> 
    <td align="left" valign="top">
<table width="983" border="0" cellpadding="0" cellspacing="0">
        
      <tr> 
        <td width="137" align="left" valign="top">
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="600" align="left" valign="top" class="menu"><table width="600" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td width="600" height="55"><table width="209" height="55" border="0">
                  <tr> 
                    <td height="51" valign="bottom" background="images/register.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td width="64" height="21">&nbsp;</td>
                          <td width="145" class="wtlogin">User Registration</td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
            <tr> 
              <td height="22" align="center" valign="top"><form name="registerfrm" method="post" action="<?PHP echo $_SERVER['PHP_SELF'];?>" onSubmit="return regformValidate()">
                  <p class="error"><br>
                    <?PHP echo $regmsg;?> <br>
                    <br>
                  </p>
                  <table width="469" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr> 
                      <td height="408" colspan="2" align="center" valign="top"> 
                        <table width="431" cellspacing="0" cellpadding="0" align="center">
                          <tr> 
                            <td width="161" height="31" bgcolor="#FFFFFF" class="normaltxt">&nbsp; 
                              First Name</td>
                            <td width="268" height="31" bgcolor="#FFFFFF">&nbsp; 
                              <input name="FirstName" type="text" class="regbox" id="FirstName" value="<?php if(isset($back)) { echo  $back['FirstName']; } ?>" size="35"></td>
                          </tr>
                          <tr> 
                            <td height="27" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp; Last Name</td>
                            <td align="left" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="LastName" type="text" class="regbox" id="LastName" size="35" value="<?php if(isset($back)) { echo  $back['LastName']; } ?>"> 
                            </td>
                          </tr>
                          <tr> 
                            <td height="27" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;House No/Name</td>
                            <td valign="top" bgcolor="#FFFFFF"> &nbsp; <input name="HouseName" type="text" class="regbox" id="HouseName" size="35" value="<?php if(isset($back)) { echo  $back['HouseName']; } ?>"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;Street</td>
                            <td valign="top" bgcolor="#FFFFFF"> &nbsp; <input name="Street" type="text" class="regbox" id="Street" size="35" value="<?php if(isset($back)) { echo  $back['Street']; } ?>"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;City</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="City" type="text" class="regbox" id="City" size="35" value="<?php if(isset($back)) { echo  $back['City']; } ?>"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp; State</td>
                            <td valign="top" bgcolor="#FFFFFF"> &nbsp; <input name="State" type="text" class="regbox" id="Country" size="35" value="<?php if(isset($back)) { echo  $back['State']; } ?>"></td>
                          </tr>
                          <tr> 
                            <td height="29" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp; Country</td>
                            <td height="29" valign="top" bgcolor="#FFFFFF"> &nbsp;
					<select name="Country" class="regbox">
							<?PHP
						   $sql="SELECT cnt_name,cnt_id FROM countrymaster order by cnt_name"; //slect record from tha table
						   $res = $cmdClass->ExecuteQuery($sql);
						   $num = $cmdClass->getNumberRows($res);
						   if ($num!=0){
						   while($obj = $cmdClass->getObject($res))
						   {
							
							//$myData[] =array($obj->cnt_id ,$obj->cnt_name);
							if($back['Country'] == $obj->cnt_id){
							 $sel = "selected";
							}
							echo '<option value="'.$obj->cnt_id.'"  '.$sel.'>'.$obj->cnt_name.'</option>';
							$sel = "";
							}
							}
							?>							
							</select>
                            </td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;Zip/Pin Code</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="PinCode" type="text" class="regbox" id="PinCode" size="35" value="<?php if(isset($back)) { echo  $back['PinCode']; } ?>"onKeyPress="return NumericDataOnly()"></td>
                          </tr>
                          <tr> 
                            <td height="25" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;Telephone </td>
                            <td height="25" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="Telephone" type="text" class="regbox" id="Telephone" size="35" value="<?php if(isset($back)) { echo  $back['Telephone']; } ?>" onKeyPress="return NumericDataOnly()"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;E-mail:</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="Email_Id" type="text" class="regbox" id="Email32" size="35"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;Retype E-mail:</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="RetypeEmail" type="text" class="regbox" id="RetypeEmail" size="35"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp; Password</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="Pwd" type="password" class="regbox" id="Pwd" size="35"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp;&nbsp;Repeat Password</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
                              <input name="RetypePassword" type="password" class="regbox" id="RetypePassword" size="35"></td>
                          </tr>
                          <tr valign="bottom"> 
                            <td height="42" colspan="2" bgcolor="#FFFFFF" class="normaltxt">I 
                              Would Like To Receive Email Update From onlinebookshop.in 
                              <input name="mail" type="checkbox" id="mail" value="1"> 
                            </td>
                          </tr>
                          <tr valign="bottom">
                            <td height="23" colspan="2" bgcolor="#FFFFFF" class="normaltxt">&nbsp;</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr> 
                      <td width="241" height="34" align="right" valign="middle"><input name="Submit1" type="submit" class="regsub" id="Submit1" value="Submit"> 
                        &nbsp;</td>
                      <td width="226" valign="middle"> &nbsp; <input name="Submit2" type="reset" class="regsub" value="Reset"></td>
                    </tr>
                  </table>
                  <br>
                </form></td>
            </tr>
            <tr>
              <td height="22" align="center" valign="top">
                <?PHP include_once("footermenu.php");?>
              </td>
            </tr>
          </table></td>
          <td width="330">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
