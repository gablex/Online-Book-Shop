<?PHP
ob_start();
 include_once("logincheck.php");
 $section=$_REQUEST['sec_id'];
 $category=$_REQUEST['cat'];
 switch($section){
  case 1://login management
      $menu="menu/login.php";
	  switch($category){
	   case 1:
	    $page="changepassword.php";	    
		break;
	   case 2:
	    $page="manageadmin.php";	    
		break;
	   case 3:
	    $page="viewadminuser.php";
		break;
		case 4:
	    $page="edit_adminuser.php";
		break;
	   default:
	     $page="viewadminuser.php";
		 break;
	  }
	  
	  break;
	  //login management ends
	  //book management
	  case 2:
      $menu="menu/book.php";
	  switch($category){
	   case 1:
	    $page="addbook.php";	    
		break;
	   case 2:
	    $page="addbookmalayalam.php";	    
		break;
	   case 3:
	    $page="listbook.php";
		break;
		case 4:
	    $page="listbookmalayalam.php";
		break;
	   case 5:
	    $page="removespecialoffer.php";
		break;
	   default:
	     $page="addbook.php";	 
		 break;
	  }
	  
	  break;
	  //book management
	 case 3://category management
      $menu="menu/category.php";
	  switch($category){
	   case 1:
	    $page="category.php";	    
		break;
	   case 2:
	    $page="listcategory.php";	    
		break;
	   default:
	     $page="category.php";
		 break;
	  }
	  break;
	 //category management
	 
	 case 5://auther management
      $menu="menu/auther.php";
	  switch($category){
	   case 1:
	    $page="auther.php";	    
		break;
	   case 2:
	    $page="listauther.php";	    
		break;
	   default:
	     $page="auther.php";
		 break;
	  }
	  break;
	 //auther management
	 
	  case 6://publisher management
      $menu="menu/publisher.php";
	  switch($category){
	   case 1:
	    $page="publisher.php";	    
		break;
	   case 2:
	    $page="listpublisher.php";	    
		break;
	   default:
	     $page="publisher.php";
		 break;
	  }
	  break;
	 //publisher management
	 
	 case 7://subject management
      $menu="menu/subject.php";
	  switch($category){
	   case 1:
	    $page="subject.php";	    
		break;
	   case 2:
	    $page="listsubject.php";	    
		break;
	   default:
	     $page="subject.php";
		 break;
	  }
	  break;
	 //subject management
	 
	  case 8://newsletter
      $menu="menu/newsletter.php";
	  switch($category){
	   case 1:
	    $page="newsletter.php";	    
		break;
	   case 2:
	    $page="subscriber.php";	    
		break;
	   case 3:
	    $page="listsubscriber.php";	    
		break;
	   default:
	     $page="newsletter.php";
		 break;
	  }
	  break;
	  
	  //misc management
	 
	  case 9://newsletter
      $menu="menu/misc.php";
	  switch($category){
	   case 1:
	    $page="add_miscsection.php";	    
		break;
	   default:
	     $page="add_miscsection.php";
		 break;
	  }
	  break;
	 //newsletter			   		 				   		 	
 } 
?>
<html>
<head>
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
<STYLE TYPE="text/css">
<!-- /* $WEFT -- Created by: Anand (phpanand@gmail.com) on 5/27/2007 -- */
  @font-face {
    font-family: ML-TTKarthika;
    font-style:  normal;
    font-weight: normal;
    src: url(MLTTKAR0.eot);
  }
-->
</STYLE>
</head>
<body leftmargin="0" topmargin="0">
<table width="1002" height="517" border="0" cellpadding="0" cellspacing="0">
  <tr align="left" valign="top"> 
    <td height="71" colspan="2"> 
      <?PHP include_once("header.htm")?>
    </td>
  </tr>
  <tr> 
    <td width="178" height="527" rowspan="2" align="left" valign="top"><table width="176" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="15" height="56">&nbsp; </td>
          <td width="161">&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp; </td>
          <td> 
            <?PHP include_once($menu);?>
          </td>
        </tr>
      </table></td>
    <td width="824" height="57" align="left" valign="top">&nbsp; </td>
  </tr>
  <tr>
    <td height="371" align="left" valign="top">
      <?PHP	   include_once($page);	   ?>
    </td>
  </tr>
  <tr> 
    <td height="18" colspan="2"> 
      <?PHP include_once("footer.htm")?>
    </td>
  </tr>
</table>
</body>
</html>
