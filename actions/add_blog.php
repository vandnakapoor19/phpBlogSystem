<?php 
	if(isset($_POST['actionprocess']) && $_POST['actionprocess']=="addblog")
	{
		if(isset($_POST['title']) && isset($_POST['content']) && $_POST['title']!="" && $_POST['content']!="")
		{
            $obj = new Blog();
			$obj->title = $_POST['title'];
            $obj->content = $_POST['content'];
            $resselect= $obj->addBlog();
            
        }
    }