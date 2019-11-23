<?php 
if(($_SESSION['sessusername']=="") || !isset($_SESSION['sessusername']) || ($_SESSION['sessuserid']=="") || (!isset($_SESSION['sessuserid'])) )
{
	print "<script language=javascript>window.location='".URL."/logout.php'</script>";
}

?>
