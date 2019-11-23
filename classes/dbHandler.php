<?php
   
   /** 
#   +----------------------------------------------------------------------+
#   |            This class handles the connect made to Mysql database     |
#   +----------------------------------------------------------------------+
#   | Copyright (c) 2019-present.						       |
#   +----------------------------------------------------------------------+
#   | The contents of this source file is the sole property of             |
#   | Teckbiz. Unauthorized duplication          |
#   | or access is prohibited.                                             |
#   +----------------------------------------------------------------------+
#   | Authors: Vandna Kapoor  <vandnakapoor19@gmail.com>  		                       |
#   +----------------------------------------------------------------------+
#   | Revision Date and Comments:                                          |
#   | Date:                                                                |
#   | Comments:                                                            |
#   +----------------------------------------------------------------------+
#
**/
   

   class DataBase
    {
       var $dbHostName="";
	   var $dbUserName="";
	   var $dbPassword="";
	   var $dbName="";
	   var $dbLink='';
	   
	   
	   function DataBase_Mysqli($hName,$hUser,$hPassword,$hdb)
	    {
		  global $dbconn;
		  $this->dbHostName=$hName;
		  $this->dbUserName=$hUser;
		  $this->dbPassword=$hPassword;
		  $this->dbName=$hdb;
		  
		  
		  $this->dbLink=mysqli_connect($this->dbHostName,$this->dbUserName,$this->dbPassword) or die("Not able to connect to database".mysqli_error());
		  mysqli_select_db($this->dbLink,$this->dbName) or die("Unknown Database ".$this->dbName."  ".mysqli_error($this->dbLink));
		  $dbconn = $this->dbLink;
		  return $this->dbLink;
		  
		} 
	  	
    }
   
?>