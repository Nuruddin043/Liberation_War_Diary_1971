<?php if(!isset($_SESSION)) { 
    session_start(); } ?> 
 <?php  
        include_once 'navbar.php';
 ?>
 <?php
    
    include_once 'database.php';
    $con = new DB_con();
    if(isset($_POST['submit']))
    {   
        
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $selectresult = $con->log_in($email,$password);
        $result=mysqli_fetch_array($selectresult);
        if(mysqli_num_rows($selectresult)>0)
        {
            $_SESSION["username"]= $result[0];
            $_SESSION["email"]=$result[1];
            $_SESSION["user_id"]=$result[2];
            $_SESSION["loginstatus"]="true";
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
    <h3 style="text-align:center;" class="text-success">Log In</h3>
    <form style="width:500px; margin:auto"  method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
    </form>
</div>

