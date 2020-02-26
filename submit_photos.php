<?php if(!isset($_SESSION)) { 
    session_start(); } ?> 
 <?php  
        include_once 'navbar.php';
 ?>

 <?php
    if($_SESSION["loginstatus"]=="true"){
        
        include_once 'database.php';
        $con = new DB_con();
        if(isset($_POST['submit']))
        {
            $caption = test_input($_POST['caption']);
            $user_id=$_SESSION["user_id"];
            $approve_status=FALSE;
            $view_count=0;
            $image=addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
            $res = $con->submit_photos($caption,$user_id,$image,$approve_status,$view_count);
            if($res)
            {
                ?>
                <script>
                alert('Record inserted...');
                window.location='index.php'
                </script>
                <?php
        
            }
            else
            {
                ?>
                <script>
                alert('error inserting record...');
                window.location='index.php'
                </script>
                <?php
            } 
        }   
    }else{
        header("location:log_in.php");
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 ?>
<div class="container">
    <h3 style="text-align:center;" class="text-success">Submit Your Article</h3>
    <form style="width:500px; margin:auto"  method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="caption">caption</label>
            <input type="text" class="form-control" name="caption" placeholder="Enter captions" required>
        </div>
        <div class="form-group">
            <label for="myfile">Upload a file</label>
            <input type="file" name="myfile" class="form-control">
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
    </form>
</div>

