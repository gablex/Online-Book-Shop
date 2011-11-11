<?PHP
class dbClass
{
	var $con;
	
	function dbClass()
	{
	}
	
	function getConnection()
	{
	
      include_once("config.php");
	  $con=mysql_connect (_DBHOST_ , _DBUSER_,_DBPASS_) or die ('Cannot connect to the database.');
	  mysql_select_db (_DB_,$con) or die ('Cannot select the database.');
	  return $con;
	 } 
	function closeConnection($con){
	 mysql_close($con);
    }
	function ExecuteQuery($query)
	{
	  $res= mysql_query($query);
	  print mysql_error();
	  return $res;
	}
	
	function getObject($result)
	{
	  return mysql_fetch_object($result);
	}
	
	function getArray($result)
	{
	  return mysql_fetch_array($result);
	}
	function getNumberRows($result)
	{
	  return mysql_num_rows($result);
	}

	function getlastid()
	{
	  return mysql_insert_id();
	}
	
	function getValues($table,$codition){
	  $sql="select * from ".$table." where ".$codition;
	  $result=$this->ExecuteQuery($sql);
	  return $result;
	} 
	
	function getRate($rsValue,$currency)
	{
		if($currency == "RS")
		{
			$sqlQuery = "SELECT cur_rupeerate FROM currencyrate";
			$result   = $this->ExecuteQuery($sqlQuery);
			$obj      = $this->getObject($result);
			$newcurValue  = round($rsValue/$obj->cur_rupeerate,2);
		}
		if($currency == "EURO")
		{
			$sqlQuery = "SELECT cur_eurorate FROM currencyrate";
			$result   = $this->ExecuteQuery($sqlQuery);
			$obj      = $this->getObject($result);
			$newcurValue  = round($rsValue/$obj->cur_eurorate,2);
		}
		
		return $newcurValue;
	}
}
?>