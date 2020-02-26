<?php
        include_once 'link.php';
        include_once 'database.php';
        $id=$_GET['user_id'];
        $con = new DB_con();
        
        $result=$con->delete_user_by_id($id);
        if($result)
        {
            ?>
            <script>
            alert('Deleted ...');
            window.location='index.php'
            </script>
            <?php
    
        }
        else
        {
            ?>
            <script>
            alert('Not deleted');
            window.location='index.php'
            </script>
            <?php
        } 
    
 

?>