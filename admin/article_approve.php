<div class="container-fluid">
        <?php

            include_once 'database.php';
            include_once 'link.php';
            $con = new DB_con();
        
            $result=$con->get_articles_to_appprove();
            while($row=mysqli_fetch_array($result)){
        ?>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl" style="font-family: 'Montserrat', sans-serif;">
                <h3 class="text-danger" style="font-family: 'Raleway', sans-serif;"><?php echo $row['title'] ?></h3>
                <small>posted by:<?php echo $row['name'] ?></small>
                <hr>
                <p><?php echo substr($row['description'],0,500);?>....</p>
                <?php echo "<a href='display_article.php?article_id=$row[0]' class='btn btn-danger'>Review it</a>"; ?><br><br>
            </div>
            <div class="col-xl-2"></div>
            
            <hr>
        </div>
        
            <?php }?>
</div>