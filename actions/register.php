<?php 
	if(isset($_POST['actionprocess']) && $_POST['actionprocess']=="register_do")
	{
        if(isset($_POST['name']) 
            && isset($_POST['email']) 
            && isset($_POST['password'])
            && $_POST['name']!=""  
            && $_POST['email']!="" 
            && $_POST['password']!="" 
            && $_POST['password']== $_POST['rpassword'])
		{
            $obj = new User();
            $obj->name = $_POST['name'];
			$obj->email = $_POST['email'];
			$obj->password = $_POST['password'];
			$resselect  = $obj->addUser();
        }
    }
    ?>