<?php include_once(PATH."classes/Utility.php");
Class Blog{

    var $post_id = 0;
    var $user_id = '';
    var $title='';
    var $content='';
    var $dbconnection='';
    var $lastInsertedId = 0;
    var $errorMessage = '';
    
    function __construct()
    {
        $mysqli_obj = new Database();
        $this->dbconnection =  $mysqli_obj->DataBase_Mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
      
        if (isset($_SESSION['sessuserid']) && !empty($_SESSION['sessuserid']))
				$this->user_id = $_SESSION['sessuserid'];
    }

    function selectBlog(){

        $selectQuery = 'select *, p.created_date post_date from posts p, users u where p.user_id=u.user_id';
        if($this->user_id != '')
        {
            $selectQuery .= ' and p.user_id="'.$this->user_id.'"';
        }
        if($this->post_id != '')
        {
            $selectQuery .= ' and p.post_id="'.$this->post_id.'"';
        }
        
        $selectQuery .= ' Order by p.post_id DESC';

        $result = mysqli_query($this->dbconnection,$selectQuery);
		return $result=Utility::getallData($result);
    }

    function addBlog(){

        $sql = "INSERT INTO posts (user_id, title, content,created_date)
        VALUES ($this->user_id, '".$this->title."','".$this->content."',NOW())";

        if (mysqli_query($this->dbconnection, $sql)) {
            print "<script>window.location='blog.php?msg=created'</script>";
        } else {
            return "Error: " . $sql . "<br>" . mysqli_error($this->dbconnection);
        }
    
    }
}
?>