<?php
include_once("../includes/dbClass.php");
$cmdClass = new dbClass();
$cmdClass ->getConnection();

include("FCKeditor/fckeditor.php") ;
	$oFCKeditor1 = new FCKeditor('Description') ;
	$oFCKeditor1->BasePath = 'FCKeditor/';
	$oFCKeditor1->Width    = '100%' ;
	$oFCKeditor1->Height   = '500' ;

	$oFCKeditor2 = new FCKeditor('TableContents') ;
	$oFCKeditor2->BasePath = 'FCKeditor/';
	$oFCKeditor2->Width    = '100%' ;
	$oFCKeditor2->Height   = '500' ;

	$oFCKeditor3 = new FCKeditor('AutherDetails') ;
	$oFCKeditor3->BasePath = 'FCKeditor/';
	$oFCKeditor3->Width    = '100%' ;
	$oFCKeditor3->Height   = '500' ;
	
if(isset($_REQUEST['edit_id'])){
  $title      = addslashes($_REQUEST['title']);
  $auther     = $_REQUEST['auther'];
  $category   = $_REQUEST['category'];
   $currency   = $_REQUEST['Currency'];
  if($_REQUEST['edition']==""){
   $edition   = 0;
  }else{
   $edition   = $_REQUEST['edition'];
  }
  //$edition    = $_REQUEST['edition'];
  if($_REQUEST['pages']==""){
   $pages   = 0;
  }else{
   $pages   = $_REQUEST['pages'];
  }
 // $pages      = $_REQUEST['pages'];
 if($_REQUEST['binding']==""){
   $binding   = 0;
  }else{
   $binding   = $_REQUEST['binding'];
  }
  //$binding    = $_REQUEST['binding'];
  if($_REQUEST['price']==""){
   $price   = 0;
  }else{
   $price   = $_REQUEST['price'];
  }
  //$price      = $_REQUEST['price'];
  $ourprice   = $_REQUEST['ourprice'];
  $publisher  = $_REQUEST['publisher'];
  if($_REQUEST['shipdays']==""){
   $shpingdays   = 0;
  }else{
   $shpingdays   = $_REQUEST['shipdays'];
  }
  //$shpingdays = $_REQUEST['shipdays'];
  if($_REQUEST['oversize']==1){
  $oversize   = 1;
  }else{
   $oversize   = 0;
  }
  if($_REQUEST['stock'] == 1){
  $stock   = 1;
  }else{
   $stock   = 0;
  }
  if($_REQUEST['isbn13'] == ""){
  $isbnthirteen   = 0;
  }else{
   $isbnthirteen  = $_REQUEST['isbn13'];
  }
 // $isbnthirteen = $_REQUEST['isbn13'];
 if($_REQUEST['isbn10'] == ""){
  $isbnten   = 0;
  }else{
   $isbnten  = $_REQUEST['isbn10'];
  }
 // $isbnten    = $_REQUEST['isbn10'];
  if($_FILES['image']['name'] == ""){
   $image   = $_REQUEST['img'];
  }else{
   $image      = $_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
  }
  if($_REQUEST['Description'] == ""){
  $description   = 0;
  }else{
   $description  = addslashes($_REQUEST['Description']);
  }
 // $description     = addslashes($_REQUEST['Description']);
  if($_REQUEST['TableContents'] == ""){
  $tableofcontents   = 0;
  }else{
   $tableofcontents  = addslashes($_REQUEST['TableContents']);
  }
  //$tableofcontents = addslashes($_REQUEST['TableContents']);
  if($_REQUEST['AutherDetails'] == ""){
  $autherdetails   = 0;
  }else{
   $autherdetails  = addslashes($_REQUEST['AutherDetails']);
  }
 // $autherdetails   = addslashes($_REQUEST['AutherDetails']);
  $lang            = 2;//malyalam
 $sql="UPDATE bookmaster SET 
   BK_CAT = '$category',
   BK_AUTH = '$auther',  
   BK_STOCK = '$stock', 
   BK_TITLE  = '$title', 
   BK_EDITION  = '$edition',
   BK_PAGES = '$pages',  
   BK_BINDING  = '$binding',
   BK_CURRENCY = '$currency',
   BK_PRICE   = '$price',  
   BK_SHOPPRICE  = '$ourprice',   
   BK_PUBLISHER  = '$publisher',  
   BK_ISBNONE  = '$isbnthirteen',  
   BK_ISBNTWO  = '$isbnten',   
   BK_SHIPDAY  =  '$shpingdays' ,
   BK_OVERSIZE =  '$oversize' , 
   BK_IMAGE  = '$image', 
   BK_DESC = '$description',  
   BK_TABLECNT  = '$tableofcontents', 
   BK_AUTHDETAILS  = '$autherdetails', 
   BK_LANSTAT  = '$lang', 
   BK_MDATE  =  curdate()
    WHERE BK_ID = '".$_REQUEST['edit_id']."'";
  $cmdClass->ExecuteQuery($sql);
  header("location:controlsystem.php?sec_id=2&cat=4&msg=Book Details edited");
  exit();
}

if(isset($_REQUEST['Submit'])){
  $title      = addslashes($_REQUEST['title']);
  $auther     = $_REQUEST['auther'];
  $category   = $_REQUEST['category'];
   $currency   = $_REQUEST['Currency'];
  if($_REQUEST['edition']==""){
   $edition   = 0;
  }else{
   $edition   = $_REQUEST['edition'];
  }
  //$edition    = $_REQUEST['edition'];
  if($_REQUEST['pages']==""){
   $pages   = 0;
  }else{
   $pages   = $_REQUEST['pages'];
  }
 // $pages      = $_REQUEST['pages'];
 if($_REQUEST['binding']==""){
   $binding   = 0;
  }else{
   $binding   = $_REQUEST['binding'];
  }
  //$binding    = $_REQUEST['binding'];
  if($_REQUEST['price']==""){
   $price   = 0;
  }else{
   $price   = $_REQUEST['price'];
  }
  //$price      = $_REQUEST['price'];
  $ourprice   = $_REQUEST['ourprice'];
  $publisher  = $_REQUEST['publisher'];
  if($_REQUEST['shipdays']==""){
   $shpingdays   = 0;
  }else{
   $shpingdays   = $_REQUEST['shipdays'];
  }
  //$shpingdays = $_REQUEST['shipdays'];
  if($_REQUEST['oversize']==1){
  $oversize   = 1;
  }else{
   $oversize   = 0;
  }
  if($_REQUEST['stock'] == 1){
  $stock   = 1;
  }else{
   $stock   = 0;
  }
  if($_REQUEST['isbn13'] == ""){
  $isbnthirteen   = 0;
  }else{
   $isbnthirteen  = $_REQUEST['isbn13'];
  }
 // $isbnthirteen = $_REQUEST['isbn13'];
 if($_REQUEST['isbn10'] == ""){
  $isbnten   = 0;
  }else{
   $isbnten  = $_REQUEST['isbn10'];
  }
 // $isbnten    = $_REQUEST['isbn10'];
  if($_FILES['image']['name'] == ""){
   $image   = 0;
  }else{
   $image      = $_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
  }
  if($_REQUEST['Description'] == ""){
  $description   = 0;
  }else{
   $description  = addslashes($_REQUEST['Description']);
  }
 // $description     = addslashes($_REQUEST['Description']);
  if($_REQUEST['TableContents'] == ""){
  $tableofcontents   = 0;
  }else{
   $tableofcontents  = addslashes($_REQUEST['TableContents']);
  }
  //$tableofcontents = addslashes($_REQUEST['TableContents']);
  if($_REQUEST['AutherDetails'] == ""){
  $autherdetails   = 0;
  }else{
   $autherdetails  = addslashes($_REQUEST['AutherDetails']);
  }
 // $autherdetails   = addslashes($_REQUEST['AutherDetails']);
  $lang            = 2;//malayalam
 $sql="INSERT INTO bookmaster (
   BK_CAT,   
   BK_AUTH,  
   BK_STOCK, 
   BK_TITLE , 
   BK_EDITION ,
   BK_PAGES,  
   BK_BINDING ,
   BK_CURRENCY,
   BK_PRICE  ,  
   BK_SHOPPRICE ,   
   BK_PUBLISHER ,  
   BK_ISBNONE ,  
   BK_ISBNTWO ,   
   BK_SHIPDAY ,
   BK_OVERSIZE, 
   BK_IMAGE , 
   BK_DESC,  
   BK_TABLECNT , 
   BK_AUTHDETAILS , 
   BK_LANSTAT , 
   BK_CDATE ) 
   VALUES
   (
	'$category',
    '$auther',
	'$stock',
	'$title',  
    '$edition',
    '$pages',  
    '$binding', 
	'$currency',
	'$price',
	'$ourprice',
	'$publisher',
	'$isbnthirteen',
	'$isbnten',
    '$shpingdays', 
    '$oversize', 
    '$image',     
    '$description',    
    '$tableofcontents', 
    '$autherdetails',   
    '$lang',
	 curdate())";
     $cmdClass->ExecuteQuery($sql);
    //header("location:controlsystem.php?sec_id=2&cat=2&msg=Book Added");
    //exit();
}
if(isset($_REQUEST['edid'])){
 $sql ="select * from bookmaster where  BK_ID =".$_REQUEST['edid'];
 $result=$cmdClass->ExecuteQuery($sql);
 $obj = $cmdClass->getObject($result);
    $subject = $obj->BK_SUB;
	$category = $obj->BK_CAT;
    $auther = $obj->BK_AUTH;
	$stock = $obj->BK_STOCK;
	$title = $obj->BK_TITLE;  
    $edition = $obj->BK_EDITION;
    $pages = $obj->BK_PAGES;  
    $binding = $obj->BK_BINDING ;
	$price = $obj->BK_PRICE;
	$ourprice = $obj->BK_SHOPPRICE;
	$publisher = $obj->BK_PUBLISHER;
	$isbnthirteen = $obj->BK_ISBNONE;
	$isbnten = $obj->BK_ISBNTWO;
    $shpingdays = $obj->BK_SHIPDAY ;
    $oversize = $obj->BK_OVERSIZE ;
    $image = $obj->BK_IMAGE ;
    $description = stripslashes($obj->BK_DESC);    
    $tableofcontents = stripslashes($obj->BK_TABLECNT) ;
    $autherdetails = stripslashes($obj->BK_AUTHDETAILS); 
	
	$oFCKeditor1->Value=stripslashes($obj->BK_DESC);
	$oFCKeditor2->Value=stripslashes($obj->BK_TABLECNT );
	$oFCKeditor3->Value=stripslashes($obj->BK_AUTHDETAILS);
}
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function validate(){}
 /* this function shows the pop-up when
     user moves the mouse over the link */
    function ShowImg()
    {
        /* get the mouse left position */
        x = event.clientX + document.body.scrollLeft;
        /* get the mouse top position  */
        y = event.clientY + document.body.scrollTop + 35;
        /* display the pop-up */
        Popup.style.display="block";
        /* set the pop-up's left */
        Popup.style.left = x;
        /* set the pop-up's top */
        Popup.style.top = y;
    }
    /* this function hides the pop-up when
     user moves the mouse out of the link */
    function HideImg()
    {
        /* hide the pop-up */
        Popup.style.display="none";
    }
</script>
<link href="css/bookstyle.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<div align="center" class="logintext"> New Book [ Malayalam ]</div>
<form action="" method="post" enctype="multipart/form-data" name="frm_mail" onSubmit="return validate();">
  <table width="715" border="0" align="center" cellpadding="0" cellspacing="4">
    <tr> 
      <td width="188" height="29">&nbsp;</td>
      <td colspan="2" class="errortxt"><?php echo $_REQUEST['msg']; ?></td>
    </tr>
    <tr> 
      <td height="35" class="labeltxt">Title</td>
      <td colspan="2" align="left"><input name="title" type="text" class="longtxtbox" id="state2" value="<?PHP echo $title; ?>"></td>
    </tr>
    <tr> 
      <td height="38" class="labeltxt">Category</td>
      <td colspan="2" align="left"><select name="category" class="txtbox" id="select">
          <?PHP
	 $sql="SELECT t1.CAT_ID, t1.CAT_NAME FROM categorymaster t1  order by t1.CAT_NAME "; //slect record from tha table
     $res = $cmdClass->ExecuteQuery($sql);
     $num = $cmdClass->getNumberRows($res);
     if ($num!=0){
     while($obj = $cmdClass->getObject($res)){
	  if($category == $obj->CAT_ID){
	   $sel = "selected";
	  }else{
	    $sel = "";
	  }
       echo "<option  value='".$obj->CAT_ID."' ".$sel.">".$obj->CAT_NAME."</option>";
      }
	  }
	  ?>
        </select> </td>
    </tr>
    <tr> 
      <td height="38" class="labeltxt">Auther</td>
      <td colspan="2" align="left"> <input name="auther" type="text" class="longtxtbox" id="auther2" value="<?PHP echo $auther; ?>"></td>
    </tr>
    <tr> 
      <td height="38" class="labeltxt">Edition -- Pages -- Binding</td>
      <td colspan="2" align="left" class="labeltxt"><input name="edition" type="text" class="txtbox" id="edition" value="<?PHP echo $edition; ?>">
        --- 
        <input name="pages" type="text" class="txtbox" id="pages" value="<?PHP echo $pages; ?>">
        --- 
        <input name="binding" type="text" class="txtbox" id="binding" value="<?PHP echo $binding; ?>"></td>
    </tr>
    <tr> 
      <td height="39" class="labeltxt">Currency--List Price -- Our Price </td>
      <td colspan="2" align="left" class="labeltxt"><select name="Currency" class="sbox" id="Currency">
          <option value="Rs" <?PHP if($currency == "Rs") echo "selected"; ?>>Rupee</option>
          <option value="$" <?PHP if($currency == "$") echo "selected"; ?>>Dollar</option>
          <option value="Euro" <?PHP if($currency == "Euro") echo "selected"; ?>>Euro</option>
		   <option value="Pound" <?PHP if($currency == "Pound") echo "selected"; ?>>Pound</option>
        </select>
        --- 
        <input name="price" type="text" class="txtbox" id="price" value="<?PHP echo $price; ?>">
        --- 
        <input name="ourprice" type="text" class="txtbox" id="ourprice" value="<?PHP echo $ourprice; ?>"> 
      </td>
    </tr>
    <tr> 
      <td height="38" class="labeltxt">Publisher</td>
      <td colspan="2" align="left" class="labeltxt"> <select name="publisher" class="txtbox" id="publisher">
          <?PHP
   $sql="SELECT PUB_ID ,PUB_NAME FROM publishermaster  order by PUB_NAME "; //select record from tha table
   $res = $cmdClass->ExecuteQuery($sql);
   $num = $cmdClass->getNumberRows($res);
   if ($num!=0){
   while($obj = $cmdClass->getObject($res)){
     if($publisher == $obj->PUB_ID){
	   $sel = "selected";
	  }else{
	    $sel = "";
	  }
     echo "<option  value='".$obj->PUB_ID."'  ".$sel.">".$obj->PUB_NAME."</option>";
   }
   }
   ?>
        </select></td>
    </tr>
    <tr> 
      <td height="40" class="labeltxt">ISBN-13 --- ISBN-10</td>
      <td colspan="2" align="left" class="labeltxt"><input name="isbn13" type="text" class="txtbox" id="isbn13" value="<?PHP echo $isbnthirteen;?>">
        --- 
        <input name="isbn10" type="text" class="txtbox" id="isbn10" value="<?PHP echo $isbnten;?>"></td>
    </tr>
    <tr> 
      <td height="43" class="labeltxt">Normally Ships in</td>
      <td colspan="2" align="left" class="labeltxt"><input name="shipdays" type="text" class="txtbox" id="shipdays" value="<?PHP echo $shpingdays; ?>"></td>
    </tr>
    <tr> 
      <td height="38" class="labeltxt">OverSize</td>
      <td width="100" align="left" class="labeltxt"><input name="oversize" type="checkbox" id="oversize" value="1" <?PHP if($oversize == 1) echo "checked"; ?>></td>
      <td width="411" align="left" class="labeltxt">Out of Stock 
        <input name="stock" type="checkbox" id="stock" value="1"></td>
    </tr>
    <tr> 
      <td height="44" class="labeltxt">Book Image</td>
      <td colspan="2" align="left" class="labeltxt"><input name="image" type="file" class="longtxtbox" id="image"> 
        &nbsp;&nbsp;&nbsp; 
        <?PHP if ($image != 0){?>
        <img src="../images/<?php echo $image;?>" width="25" height="25" onMouseOut="HideImg()" onMouseOver="ShowImg()"  onMouseMove="ShowImg()"><?PHP echo "<input type='hidden' name='img' value='".$image."'>"; }?></td>
    </tr>
    <tr> 
      <td height="29" class="labeltxt"> Description </td>
      <td colspan="2" align="left" class="labeltxt"> 
        <?php $oFCKeditor1->Create(); ?>
      </td>
    </tr>
    <tr> 
      <td height="30" class="labeltxt">Table of contents</td>
      <td colspan="2" align="left" class="labeltxt"> 
        <?php $oFCKeditor2->Create(); ?>
      </td>
    </tr>
    <tr> 
      <td height="29" class="labeltxt">Auther Details</td>
      <td colspan="2" align="left" class="labeltxt"> 
        <?php $oFCKeditor3->Create(); ?>
      </td>
    </tr>
    <tr> 
      <td height="29" class="labeltxt">&nbsp;</td>
      <td colspan="2" align="left" class="labeltxt"> 
        <?PHP 
	  if($_REQUEST['edid']){
	   echo "<input type='hidden' name='edit_id' value='".$_REQUEST['edid']."'>";
	   echo "<input name='Edit' type='submit' class='subbox' value='Edit'> ";
	  }else{
	   echo "<input name='Submit' type='submit' class='subbox' value='Save'> ";
	  }
	  ?>
        <input name="Submit2" type="reset" class="subbox" value="   Reset    "> 
      </td>
    </tr>
  </table>

</form>
<div id="Popup" class="transparent" align="center"> 
  <div> 
    <div align="center"><img src="../images/<?php echo $image; ?>"> </div>
  </div>
</div>
  </body>
</html>
<?php
function rteSafe($strText) {
	//returns safe code for preloading in the RTE
	$tmpString = $strText;
	
	//convert all types of single quotes
	$tmpString = str_replace(chr(145), chr(39), $tmpString);
	$tmpString = str_replace(chr(146), chr(39), $tmpString);
	$tmpString = str_replace("'", "&#39;", $tmpString);
	
	//convert all types of double quotes
	$tmpString = str_replace(chr(147), chr(34), $tmpString);
	$tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);
	
	//replace carriage returns & line feeds
	$tmpString = str_replace(chr(10), " ", $tmpString);
	$tmpString = str_replace(chr(13), " ", $tmpString);
	
	return $tmpString;
}
?>
<!-- END Demo Code -->