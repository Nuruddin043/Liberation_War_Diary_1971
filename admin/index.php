<?php if(!isset($_SESSION)) { session_start(); }
if(!isset($_SESSION['loginstatus_admin'])){
    $_SESSION['loginstatus_admin']="false";
}
?>
<?php
if($_SESSION['loginstatus_admin']=="false")
{
	header("location:login_admin.php");
}
?>



<?php
    include_once 'link.php';

?>
<style>
a{
    padding:20px;
    margin: 10px 10px;
}
</style>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
	<div class="row">
	    <br/>
	   <div class="col text-center">
		<h2>Welcome</h2>
		<p>To Dashboard</p>
		</div>
	</div>

</div>
<div class="container-fluid">
        <a href="article_approve.php">
        <div class="row text-center">
                <div class="col">
                <div class="counter">
            <i class="fa fa-check fa-2x"  ></i>
            <h3>Articles</h3>
            <h6>to be approved</h6>
        </div>
        </div>
        </a>
         <a href="photos_approve.php"> 
            <div class="col">
                <div class="counter">
            <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
            <h3>Photos</h3>
            <h6>to be approved</h6>
            </div>
                </div>
         
         </a>   
         <a href="display_all_article.php">
            <div class="col">
                <div class="counter">
            <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
            <h3>Delete</h3>
            <h6>Article</h6>
            </div></div>
         </a>
        <a href="show_user.php">
            <div class="col">
                <div class="counter">
            <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
            <h3>Delete</h3>
            <h6>Users</h6>
            </div>
                </div>
        </div>
        </a>
        

</div>
