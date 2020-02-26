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
            $title = test_input($_POST['title']);
            $article = test_input($_POST['article']);
            $section_name=$_POST["section_name"];
            $des=$_POST["article"];
            $user_id=$_SESSION["user_id"];
            $approve_status=FALSE;
            $view_count=0;
            $res = $con->submit_article($title,$section_name,$des,$user_id,$approve_status,$view_count);
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
    <form style="width:500px; margin:auto"  method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title" required>
        </div>
        <div class="form-group">
            <label for="section">Select a Section</label>
            <select name="section_name" class="form-control">
                <option value="march_june">march-june</option>
                <option value="june_september">june-september</option>
                <option value="october_december">october-december</option>
                <option value="others">ohters</option>
            </select>
        </div>
        <div class="form-group">
          <label for="article">Article:</label>
          <textarea class="form-control" rows="5" name="article" required placeholder="Enter your article"></textarea>
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
    </form>
</div>

