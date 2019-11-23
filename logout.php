<?php include('private/settings.php');
if(isset($_SESSION['sessusername']) )
{
	session_destroy();	
	session_unset();
}
print "<script language=javascript>window.location='index.php'</script>";
?>