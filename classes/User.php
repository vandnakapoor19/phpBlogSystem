<?php include_once(PATH."classes/Utility.php");
	Class User
	{
		var $user_id=0;
		var $email='';
		var $name='';
		var $password='';
		var $dbconnection='';
		var $ipAddress = '0.0.0.0';
		var $lastInsertedId = 0;

		function __construct()
		{
			$mysqli_obj = new Database();
			$this->dbconnection=  $mysqli_obj->DataBase_Mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
			$this->ipAddress=$_SERVER['REMOTE_ADDR'];
		}
		
		function addUser()
		{
			$todaydt = date('Y-m-d H:i:s');
			$insertQuery = 'insert into users set
				name="'.$this->name.'",
				email="'.$this->email.'",
				password="'.md5($this->password).'",
				created_date="'.$todaydt.'"';

			$result = $this->isFound();

			if($result==0){
				if (mysqli_query($this->dbconnection,$insertQuery))
				{
					$this->lastInsertedId = mysqli_insert_id($this->dbconnection);
					$_SESSION['sessuserid']		=	$this->lastInsertedId;				
					$_SESSION['sessusername']	=	$this->email;
					$_SESSION['sessusername']	=	$this->name;
					print "<script>window.location='dashboard.php'</script>";
					exit();
				}
				else{
					return "Error: " . $insertQuery . "<br>" . mysqli_error($this->dbconnection);
				}
			}
			else{
				return 'User Already Exist';
			}
			
		}
		
		function isFound()
		{
			$sqlQry="Select * from users where 1";
			
			if ($this->email!='')
			{
				$sqlQry=$sqlQry." and email='".$this->email."' ";
			}
			
			$resFound=mysqli_query($this->dbconnection,$sqlQry);
			
			if(mysqli_num_rows($resFound)==0)
				return mysqli_num_rows($resFound);
			else{
				$result = mysqli_query($this->dbconnection,$sqlQry);
				return $result=Utility::getallData($result);
			}
		}

		function checkLogin()
		{
			 $sqlselect="select * from users  WHERE  email ='".mysqli_real_escape_string($this->dbconnection,$this->email)."' and password='".md5($this->password)."'";
			$resselect=mysqli_query($this->dbconnection,$sqlselect);
			return $resselect;
		}
	}	
?>
