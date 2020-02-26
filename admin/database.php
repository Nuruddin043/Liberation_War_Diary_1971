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
	//admin authentication
	public function log_in_admin($username,$password)
	{	
		$sql = "SELECT 1 FROM admins WHERE username = '$username' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	public function get_articles_to_appprove()
	{	
		$sql = "SELECT article_id,title,section_name,description,name,approve_status FROM users,articles WHERE users.user_id=articles.user_id AND  approve_status=FALSE";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	
	public function get_articles_by_id($id)
	{	
		$sql = "SELECT article_id,title,section_name,description,name,view_count FROM users,articles WHERE users.user_id=articles.user_id AND article_id=$id";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	public function approve_article($id)
	{	
		$sql = "UPDATE articles SET  approve_status= true WHERE article_id=$id";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
	}
	public function delete_article_by_id($id)
	{	
		$sql = "DELETE FROM `articles` WHERE article_id=$id";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
	}
	public function get_photos_to_appprove()
	{	
		$sql = "SELECT * FROM photos,users WHERE users.user_id=photos.user_id AND approve_status=FALSE";
			$res = mysqli_query($this->conn, $sql);
			return $res;
	}
	public function approve_photos($id)
	{	
		$sql = "UPDATE photos SET  approve_status= true WHERE photos_id=$id";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
	}
	public function delete_photos_by_id($id)
	{	
		$sql = "DELETE FROM `photos` WHERE photos_id=$id";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
	}
	public function get_users()
	{	
		$sql = "SELECT user_id,name,email FROM users";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	public function delete_user_by_id($id)
	{	
		$sql = "DELETE FROM `users` WHERE user_id=$id";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
	}
	public function get_all_articles()
	{	
		$sql = "SELECT article_id,title,section_name,description,name,view_count FROM users,articles WHERE users.user_id=articles.user_id AND approve_status=TRUE ORDER BY  view_count  desc";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
}

?>