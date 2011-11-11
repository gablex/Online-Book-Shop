<?PHP
session_start();
include_once("includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

if(isset($_POST['tblserch']))
{
$sql="SELECT BK_ID,authermaster.AUTH_NAME,BK_TITLE,BK_CURRENCY,BK_SHOPPRICE,BK_IMAGE,BK_EDITION,BK_DESC FROM bookmaster,authermaster WHERE bookmaster.BK_AUTH  = authermaster.AUTH_ID AND  BK_DESC LIKE '%".$_REQUEST['tblserch']."%' OR BK_TABLECNT = '%".$_REQUEST['tblserch']."%'"; 
$_SESSION['query'] = $sql;
header("location:advncdsearchresult.php");
exit();
}


if(isset($_REQUEST['Submit'])){
$_SESSION['keyarr'] = $_POST;
$sql="SELECT BK_ID,authermaster.AUTH_NAME,BK_TITLE,BK_CURRENCY,BK_SHOPPRICE,BK_IMAGE,BK_EDITION,BK_DESC FROM bookmaster,authermaster WHERE bookmaster.BK_AUTH  = authermaster.AUTH_ID "; 
if( $_REQUEST['f_title'] != "" || $_REQUEST['f_author']!= "" || $_REQUEST['f_keyword']!= "" || $_REQUEST['f_ISBN']!= "" ){

$sql .=" AND ";
}
	if(isset($_REQUEST['f_title']) && $_REQUEST['f_title'] != ""){
	 $flagone = 1;
	  if($_REQUEST['f_titleSrchType'] == 0 ){
	   $sql .= " BK_TITLE LIKE '%".$_REQUEST['f_title']."%' ";
	  }
	  if($_REQUEST['f_titleSrchType'] == 1){
	   $sql .= " BK_TITLE LIKE '%".$_REQUEST['f_title']."' ";
	  }
	  if($_REQUEST['f_titleSrchType'] == 2){
	   $sql .= " BK_TITLE ='".$_REQUEST['f_title']."' ";
	  }
	  
	}



if(isset($_REQUEST['f_author']) && $_REQUEST['f_author'] != ""){
    $flagtwo =1;
    if($flagone == 1){
	 $sql .=" AND ";
	}
	  if($_REQUEST['f_authorSrchType'] == 0 ){
	   $sql .= " authermaster.AUTH_NAME LIKE '%".$_REQUEST['f_author']."%' ";
	  }
	  if($_REQUEST['f_authorSrchType'] == 1){
	   $sql .= "  authermaster.AUTH_NAME LIKE '%".$_REQUEST['f_author']."' ";
	  }
	  if($_REQUEST['f_authorSrchType'] == 2){
	   $sql .= " authermaster.AUTH_NAME ='".$_REQUEST['f_author']."' ";
	  }
	}
	
	
if(isset($_REQUEST['f_keyword']) && $_REQUEST['f_keyword'] != ""){

      $flagthree =1;
		if($flagtwo == 1){
		 $sql .=" AND ";
		}
	  if($_REQUEST['f_keywordSrchType'] == 0 ){
	   $sql .= " BK_DESC LIKE '%".$_REQUEST['f_keyword']."%' ";
	  }
	  if($_REQUEST['f_keywordSrchType'] == 1){
	   $sql .= " BK_DESC LIKE '%".$_REQUEST['f_keyword']."' ";
	  }
	  if($_REQUEST['f_keywordSrchType'] == 2){
	   $sql .= " BK_DESC ='".$_REQUEST['f_keyword']."' ";
	  }
	}
	
if(isset($_REQUEST['f_ISBN']) && $_REQUEST['f_ISBN'] != "" ){
		if($flagthree == 1){
		 $sql .=" AND ";
		}
   $sql .= " BK_ISBNTWO  = '".$_REQUEST['f_ISBN']."' OR BK_ISBNONE='".$_REQUEST['f_ISBN'] ."'";
}
$_SESSION['query'] = $sql;
header("location:advncdsearchresult.php");
exit();
}
	?>
<html>
<head>
<title>Online bookshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/onlinebook.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function validate(){
if(document.myform.email.value==""){
	alert("Enter Your Email Address");
	document.myform.email.focus();
	return false;
	}
return true;
}

</script>
</head>
<body leftmargin="0" topmargin="0">
<?PHP include("header.php"); ?>
  <tr> 
    <td align="left" valign="top">
<table width="983" height="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
          
        <td width="137" align="left" valign="top">
          <?PHP include_once("leftmenu_inner.php");?>
        </td>
          <td width="600" align="left" valign="top" class="menu"><table width="600" border="0" cellpadding="0" cellspacing="0">
              
            <tr> 
              <td width="600" height="10"></td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="600" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="600"><table width="600" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="59">&nbsp;</td>
                          <td align="left" valign="top" class="bigtitle"><table width="209" height="52" border="0" cellspacing="2">
                              <tr> 
                                <td valign="bottom" background="images/searchband.jpg"><table width="209" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                      <td width="62">&nbsp;</td>
                                      <td width="147" class="wtlogin">Advanced 
                                        Search </td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td height="266">&nbsp;</td>
                          <td align="center" class="bigtitle" valign="top"><form action="" method="post" name="bookcat_frm" id="bookcat_frm" onSubmit="return validate();">
                              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="blackborder">
                                <tr align="left" valign="bottom" class="content"> 
                                  <td width="2%" height="20" class="searlstxt">&nbsp;</td>
                                  <td width="20%" class="searlstxt">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="left" valign="bottom" class="content"> 
                                  <td height="20" class="searlstxt">&nbsp;</td>
                                  <td height="20" class="searlstxt">Keyword</td>
                                  <td><span class="label"> 
                                    <input name="f_keyword" type="text" class="regbox" id="f_keyword" size="25">
                                    </span></td>
                                  <td><select name="f_keywordSrchType" id="f_keywordSrchType" class="boxser">
                                      <option value="0" selected>All Words</option>
                                      <option value="1">Any Word</option>
                                      <option value="2">Exact Phrase</option>
                                    </select></td>
                                </tr>
                                <tr align="left" valign="top"> 
                                  <td height="18" class="searchtip">&nbsp;</td>
                                  <td height="18" colspan="2" class="searchtip">This 
                                    will return items with these words appearing 
                                    anywhere</td>
                                  <td height="18" class="searchtip">&nbsp;</td>
                                </tr>
                                <tr align="left" valign="bottom"> 
                                  <td height="31" class="searlstxt">&nbsp;</td>
                                  <td height="31" class="searlstxt">Book Title</td>
                                  <td width="44%" height="31" class="label"><input name="f_title" type="text" class="regbox" id="f_title" size="25"></td>
                                  <td width="34%" class="label"><label> 
                                    <select name="f_titleSrchType" class="boxser" id="f_titleSrchType">
                                      <option value="0" selected>All Words</option>
                                      <option value="1">Any Word</option>
                                      <option value="2">Exact Phrase</option>
                                    </select>
                                    </label></td>
                                </tr>
                                <tr align="left" valign="top" class="content"> 
                                  <td height="18" class="searchtip">&nbsp;</td>
                                  <td height="18" colspan="2" class="searchtip">This 
                                    will return items with these words appearing 
                                    in book title </td>
                                  <td height="18" class="searchtip">e.g. Harry 
                                    Potter and the Deathly Hallows</td>
                                </tr>
                                <tr align="left" valign="bottom" class="content"> 
                                  <td height="31" class="searlstxt">&nbsp;</td>
                                  <td height="31" class="searlstxt">Author</td>
                                  <td><span class="label"> 
                                    <input name="f_author" type="text" class="regbox" id="f_author" size="25">
                                    </span></td>
                                  <td><select name="f_authorSrchType" id="f_authorSrchType" class="boxser">
                                      <option value="0" selected>All Words</option>
                                      <option value="1">Any Word</option>
                                      <option value="2">Exact Phrase</option>
                                    </select></td>
                                </tr>
                                <tr class="label"> 
                                  <td height="18" class="searlstxt">&nbsp;</td>
                                  <td height="18" colspan="2" align="left" valign="top" class="searchtip">This 
                                    will return items by author</td>
                                  <td height="18" align="left" valign="top" class="searchtip">e.g.J. 
                                    K. Rowling</td>
                                </tr>
                                <tr align="left" valign="bottom" class="label"> 
                                  <td height="34" class="searlstxt">&nbsp;</td>
                                  <td height="34" class="searlstxt">ISBN13 /ISBN10</td>
                                  <td colspan="2"> <input name="f_ISBN" type="text" class="regbox" id="f_ISBN" size="25"> 
                                  </td>
                                </tr>
                                <tr> 
                                  <td class="label">&nbsp;</td>
                                  <td colspan="3" align="left" valign="top" class="searchtip">This 
                                    will return items items with ISBN13/ISBN10. 
                                    Enter without space or hyphen</td>
                                </tr>
                                <tr align="center" class="content"> 
                                  <td height="43" colspan="3" align="right"> <input name="Submit" type="submit" class="regsub" style="font-weight:bold;" onClick="return checkAdvSearchForm();" value="    SEARCH    "> 
                                    &nbsp;&nbsp; <input name="Submit2" type="reset" class="regsub" style="font-weight:bold;" onClick="return checkAdvSearchForm();" value="    RESET    "> 
                                  </td>
                                  <td height="43" class="ashlabel">[<a href="#" onClick="window.open('searchtip.html','SearchTip','width=430,height=280')" class="ashlabel">Need 
                                    Help ?</a>]</td>
                                </tr>
                              </table>
            </form></td>
                        </tr>
                        <tr> 
                          <td width="10" height="117">&nbsp;</td>
                          <td width="621"><form name="secondfrm" method="post" action="" onSubmit="return secondFormValidate();">
                              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="blackborder">
                                <tr> 
                                  <td width="46%" height="36" align="center" class="searlstxt">Search 
                                    Description/Table Of Contents</td>
                                  <td width="54%" align="center"><input name="tblserch" type="text" class="regbox" id="tblserch" size="25"></td>
                                </tr>
                                <tr align="center"> 
                                  <td height="36" colspan="2"><input name="Submit3" type="submit" class="regsub" style="font-weight:bold;" onClick="return checkAdvSearchForm();" value="    SEARCH    "> 
                                    &nbsp; <input name="Submit22" type="reset" class="regsub" style="font-weight:bold;" onClick="return checkAdvSearchForm();" value="    RESET    "></td>
                                </tr>
                              </table>
                            </form></td>
                        </tr>
                           </table></td>
                  </tr>
                  <tr> 
                    <td>
                      <?PHP include_once("footermenu.php");?>
                    </td>
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
<script language="JavaScript">
function validate()
{
	if(document.bookcat_frm.f_keyword.value=="" && document.bookcat_frm.f_title.value=="" &&  document.bookcat_frm.f_author.value=="" && document.bookcat_frm.f_ISBN.value=="")
	{
	alert("Enter atleast one search crteria");
	
	}
}

function secondFormValidate()
{
	if(document.secondfrm.tblserch.value == "")
	{
		alert("Enter search phrase");
		document.secondfrm.tblserch.focus();
		return false;
	}
}
</script>