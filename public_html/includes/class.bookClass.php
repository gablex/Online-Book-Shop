<?PHP
class bookClass extends dbClass{
 function bookClass(){
 
 }

function checkLogin($userName,$userPassword){
 $con    = $this->getConnection();
 $result = $this-> ExecuteQuery("select * from adminlogin where AD_NAME ='$userName' AND AD_PASSWORD ='$userPassword'");
 $num    = $this->getNumberRows($result);							   
 if($num!=0){
	     $obj=$this->getObject($result);
		 $_SESSION['ses_id'] = $obj->AD_ID;
		 $_SESSION['ses_type'] = $obj->AD_TYPE;
	     $_SESSION['ses_admin']=$obj->AD_NAME;
	     return true;							   
		}
 else   {
         return false;							   
        }
 
}



}
?>