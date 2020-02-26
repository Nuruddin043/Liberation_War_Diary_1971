<?php if(!isset($_SESSION)) { 
    session_start(); } ?> 

 <?php
    include_once 'link.php';
    include_once 'database.php';
    $con = new DB_con();
    if(isset($_POST['submit']))
    {   
        
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $selectresult = $con->log_in_admin($username,$password);
        $result=mysqli_fetch_array($selectresult);
        if(mysqli_num_rows($selectresult)>0)
        {
            $_SESSION["admin_name"]= $result[0];
            $_SESSION["loginstatus_admin"]="true";
		    header("location:index.php");
        }else{?>
            <script>
            alert("user not found");
            </script>
            <?php
        }
        
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
 ?>
<div class="container">
    <h3 style="text-align:center;" class="text-success">Admin Log In</h3>
    <form style="width:500px; margin:auto"  method="post">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
    </form>
</div>

