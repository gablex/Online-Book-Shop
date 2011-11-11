<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass->getConnection();
########### New Registration
	if(isset($_REQUEST['Submit1']))
	{
		//purchase master
		$totalamount=0;
		$cart=$_SESSION['cart'];
		foreach($cart as $temp){
		 $totalamount += $temp['Rate'] * $temp['Qty'];
		}
		$sql = "INSERT INTO userpurchase (PUR_USER ,PUR_AMOUNT,PUR_DATE,PUR_DELIVARY) VALUES('".$_SESSION['userid']."',$totalamount,now(),0)";
    	$cmdClass->ExecuteQuery($sql);
		$purId=$cmdClass->getLastId();
		//purchase master
		//purchase items
		$cart=$_SESSION['cart'];
		foreach($cart as $temp){
		 $sql = "INSERT INTO userpurchaseitems (UPIT_USPRID,UPIT_ITEM,UPIT_QTY,UPIT_PRICE) VALUES('$purId',".$temp['ItemID'].",".$temp['Qty'].",".$temp['Rate'].")";
    	 $cmdClass->ExecuteQuery($sql);
		}
		//purchase items
		//shipment details
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
   $sql="insert into usershipingdetails(
   USER_PURID 
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
   USER_CRDATE, 
   USER_MDDATE) values($purId,'$FirstName','$LastName','$HouseName','$Street','$City','$State','$Country','$PinCode','$Telephone','$Email_Id',now(),now())";
				 $cmdClass->ExecuteQuery($sql);
				 $userid=$cmdClass->getLastId();
	//shipment details
	$_SESSION['purid'] = $purId;
	header("location:procesend.php");
	exit();
}
if(isset($_REQUEST['Shipment'])){
		//PURCHASE DETAILS
        $totalamount=0;
		$cart=$_SESSION['cart'];
		foreach($cart as $temp){
		 $totalamount += $temp['Rate'] * $temp['Qty'];
		}
		//PURCHASE DETAILS
		$sql = "INSERT INTO userpurchase (PUR_USER ,PUR_AMOUNT,PUR_DATE,PUR_DELIVARY) VALUES('".$_SESSION['userid']."',$totalamount,now(),0)";
    	$cmdClass->ExecuteQuery($sql);
		$purId=$cmdClass->getLastId();
		//purchase items
		$cart=$_SESSION['cart'];
		foreach($cart as $temp){
		 $sql = "INSERT INTO userpurchaseitems (UPIT_USPRID,UPIT_ITEM,UPIT_QTY,UPIT_PRICE) VALUES('$purId',".$temp['ItemID'].",".$temp['Qty'].",".$temp['Rate'].")";
    	 $cmdClass->ExecuteQuery($sql);
		}
		//purchase items
        $sql = "SELECT USER_FNAME,USER_LNAME,USER_HNAME,USER_STREET,USER_CITY,USER_STATE,USER_COUNTRY ,USER_ZIP ,USER_TELEPHONE,USER_EMAIL FROM userdetails WHERE USER_ID=".$_SESSION['userid'];
        $res = $cmdClass->ExecuteQuery($sql);
		$obj = $cmdClass->getObject($res);
		$FirstName = $obj->USER_FNAME;
		$LastName  = $obj->USER_LNAME;
		$HouseName = $obj->USER_HNAME;
		$Street    = $obj->USER_STREET;
		$City      = $obj->USER_CITY;
		$State     = $obj->USER_STATE;
		$Country   = $obj->USER_COUNTRY;
		$Telephone = $obj->USER_TELEPHONE;
		$PinCode   = $obj->USER_ZIP;
		$Email_Id  = $obj->USER_EMAIL;
   $sql="insert into usershipingdetails(
   USER_PURID ,
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
   USER_CRDATE, 
   USER_MDDATE) values($purId,'$FirstName','$LastName','$HouseName','$Street','$City','$State','$Country','$PinCode','$Telephone','$Email_Id',now(),now())";
   $cmdClass->ExecuteQuery($sql);
   $_SESSION['purid'] = $purId;
   header("location:procesend.php");
   exit();
}
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
	if(document.registerfrm.State.value=="select one")
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
        <td width="137" align="left" valign="top"><?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="531" align="left" valign="top" class="menu"><table width="650" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td width="650" height="55"><table width="209" height="55" border="0">
                  <tr> 
                    <td height="51" valign="bottom" background="images/register.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td width="64" height="21">&nbsp;</td>
                          <td width="145" class="wtlogin">Shipping Details</td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
            <tr> 
              <td height="22" align="center" valign="top"><span class="bigtitle"><br>
                Shipment in the same Address used for registration </span><br>
                <form name="samefrm" method="post" action="">
                  <table width="148" border="0">
                    <tr> 
                      <td width="142"><input name="Shipment" type="submit" class="regsub" id="Shipment" value="           CLICK HERE         "></td>
                    </tr>
                  </table>
                </form>
                <br>

			  <form name="registerfrm" method="post" action="<?PHP echo $_SERVER['PHP_SELF'];?>" onSubmit="return regformValidate()">
                  <p class="error"><span class="blackbold"><br>
                    </span><span class="bigtitle">New Shipping Address</span> 
                  </p>
                  <table width="469" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr> 
                      <td colspan="2" align="center" valign="top">
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
                            <td valign="top" bgcolor="#FFFFFF"> &nbsp; <input name="State" type="text" class="regbox" id="State" size="35" value="<?php if(isset($back)) { echo  $back['State']; } ?>"></td>
                          </tr>
                          <tr> 
                            <td height="26" valign="top" bgcolor="#FFFFFF" class="normaltxt"> 
                              &nbsp; Country</td>
                            <td height="26" valign="top" bgcolor="#FFFFFF"> &nbsp; 
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
                              </select> </td>
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
                          <tr valign="bottom"> 
                            <td height="18" colspan="2" bgcolor="#FFFFFF" class="normaltxt">&nbsp;</td>
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
              <td height="22" align="center" valign="top"><table width="639" border="0">
                  <tr class="ashlabel"> 
                    <td width="121">&nbsp;</td>
                    <td width="104" align="center">About Us</td>
                    <td width="10" align="center"><img src="images/index_52.jpg" width="4" height="16"></td>
                    <td width="109" align="center">Contact Us</td>
                    <td width="20" align="center"><img src="images/index_52.jpg" width="4" height="16"></td>
                    <td width="103" align="center">Privacy Policy</td>
                    <td width="142">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="330">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
