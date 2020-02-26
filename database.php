<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', "liberation_war");

class DB_con
{	
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	//inserting into users database
	public function users_insert($name,$email,$password,$gender)
	{	
		$sql = "INSERT into users(name,email,password,gender) VALUES('$name','$email','$password','$gender')";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
  }

	//search email
	public function serach_email($email)
	{	
		$sql = "SELECT username FROM users WHERE email = '$email'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	//user authentication
	public function log_in($email,$password)
	{	
		$sql = "SELECT name,email,user_id FROM users WHERE email = '$email' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	
	//getting  all article for index
	public function get_articles()
	{	
		$sql = "SELECT article_id,title,section_name,description,name,view_count FROM users,articles WHERE users.user_id=articles.user_id AND approve_status=TRUE ORDER BY  view_count  desc";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	//getting a particular article 
	public function get_articles_by_id($id)
	{	
		$sql = "SELECT article_id,title,section_name,description,name,view_count FROM users,articles WHERE users.user_id=articles.user_id AND article_id=$id";
		$sql1= "UPDATE articles SET  view_count= view_count+1 WHERE article_id=$id";
		mysqli_query($this->conn, $sql1);
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
		//getting article for particular section
		public function get_article_by_section_name($section_name)
		{	
			$sql = "SELECT article_id,title,section_name,description,name FROM users,articles WHERE users.user_id=articles.user_id AND section_name='$section_name'";
			$res = mysqli_query($this->conn, $sql);
			return $res;
		}
		//Submitting article for approval
		public function submit_article($title,$section_name,$des,$user_id,$approve_status,$view_count)
		{	
			$sql = "INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('$title','$section_name','$des','$user_id','$approve_status','$view_count')";
			if(mysqli_query($this->conn, $sql)){
				return true;
			} else{
				return false;
			}
		}
		public function submit_photos($caption,$user_id,$image,$approve_status,$view_count)
		{	
			$sql = "INSERT into photos(captions,user_id,img,approve_status,view_count) VALUES('$caption','$user_id','$image','$approve_status','$view_count')";
			if(mysqli_query($this->conn, $sql)){
				return true;
			} else{
				return false;
			}
		}
		public function get_photos()
		{	
			$sql = "SELECT * FROM photos,users WHERE users.user_id=photos.user_id AND approve_status=TRUE ORDER BY  view_count  desc";
			$res = mysqli_query($this->conn, $sql);
			return $res;
		}
}	

?>