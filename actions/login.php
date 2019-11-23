<?php 
	if(isset($_POST['actionprocess']) && $_POST['actionprocess']=="login_do")
	{
		if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!="" && $_POST['password']!="")
		{
			$obj = new User();
			$obj->email = $_POST['email'];
			$obj->password = $_POST['password'];
			$resselect= $obj->checkLogin();
			if(mysqli_num_rows($resselect)>0)
			{
				$row=mysqli_fetch_object($resselect);
				$_SESSION['sessuserid']=$row->user_id;				
				$_SESSION['sessusername']=$row->email;
				$_SESSION['sessusername']=$row->name;
				

				 if (isset($_GET['redirect'])	&&	$_GET['redirect'] != '')
				{
					print "<script>window.location='".$_GET['redirect']."'</script>";
					exit();
				}
				else
				{
					print "<script>window.location='dashboard.php'</script>";
					exit();
				}
			}
			else
			{
				$frmMessage="Username/Password is incorrect";
			}
		}
	}
?>