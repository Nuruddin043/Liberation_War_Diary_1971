
<?php  
        include_once 'navbar.php';

?>
 <div class="container-fluid">
        <?php
        
            include_once 'database.php';
            $con = new DB_con();
            $section_name="october_december";
            $result=$con->get_article_by_section_name($section_name);
            while($row=mysqli_fetch_array($result)){
        ?>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl" style="font-family: 'Montserrat', sans-serif;">
                <h3 class="text-danger" style="font-family: 'Raleway', sans-serif;"><?php echo $row['title'] ?></h3>
                <small>posted by:<?php echo $row['name'] ?></small>
                <hr>
                <p><?php echo substr($row['description'],0,500);?>....</p>
                <?php echo "<a href='display_article.php?article_id=$row[0]' class='btn btn-danger'>Read More</a>"; ?><br><br>
            </div>
            <div class="col-xl-2"></div>
            
            <hr>
        </div>
        
            <?php }?>
    </div>
<?php  
        include_once 'footer.php';
    ?>
