
<?php  
   
        include_once 'database.php';
        $id=$_GET['photos_id'];
        $con = new DB_con();
           
            $result=$con->approve_photos($id);
            if($result)
            {
                ?>
                <script>
                alert('Approved...');
                window.location='index.php'
                </script>
                <?php
        
            }
            else
            {
                ?>
                <script>
                alert('Not approved ,,,and Deleted from Database.');
                window.location='index.php'
                </script>
                <?php
            } 
    
?>


