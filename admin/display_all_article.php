<?php include_once 'link.php' ?>
 <div class="container-fluid">
        <?php
            //getting top viewed article from database
            include_once 'database.php';
            $con = new DB_con();
        
            $result=$con->get_all_articles();
            while($row=mysqli_fetch_array($result)){
        ?>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl" style="font-family: 'Montserrat', sans-serif;">
                <h3 class="text-danger" style="font-family: 'Raleway', sans-serif;"><?php echo $row['title'] ?></h3>
                <small style="float: left;">posted by:<?php echo $row['name'] ?></small>
                <small style="padding-left:40%;">Total views:<?php echo $row['view_count'] ?></small>
                <hr>
                <p><?php echo substr($row['description'],0,500);?>....</p>
                            <?php echo "<a href='delete_article.php?article_id=$row[0]' class='btn btn-danger'>Delete it</a>"; ?><br><br>
            </div>
            <div class="col-xl-2"></div>
            
            <hr>
        </div>
        
            <?php }?>
</div>