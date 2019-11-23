<?php include_once(PATH."classes/User.php");?>

<?php
	Class Utility
	{
	
		var $dbconnection='';
		
		function __construct()
		{
			$mysqli_obj = new Database();
			$this->dbconnection=  $mysqli_obj->DataBase_Mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
		}
		
		static function debug($pValue="--NO MESSAGE--",$pDie="0",$pColor = "red")
		{
			echo ('<br><font face="verdana" size="1px"  color="'.$pColor.'">START DEBUG CODE<br>');
			echo ($pValue);
			echo ('<br></font>');
			if($pDie==1)
				die;
		}
		
		static function getallData($pQuery)
		{
			if(mysqli_num_rows($pQuery)>0)
			{
				while($res=mysqli_fetch_object($pQuery))
				{
					$result[]=$res;
				}
			}
			else
			{
				$result='result not found';
			}
			return $result;
		}
	}
?>