
<?php  
        include_once 'navbar.php';
        include_once 'database.php';
        $id=$_GET['article_id'];
        $con = new DB_con();
        $i=0;
        $result=$con->get_articles_by_id($id);
        while($row=mysqli_fetch_array($result)){
            ?>
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl" style="font-family: 'Montserrat', sans-serif;">
                    <h3 class="text-danger" style="font-family: 'Raleway', sans-serif;"><?php echo $row['title'] ?></h3>
                    <small>posted by:<?php echo $row['name'] ?></small>
                    <hr>
                    <p><?php echo $row['description']?></p>
                    <br><br>
                </div>
                <div class="col-xl-2"></div>
                
                <hr>
            </div>
            
                <?php }?>
        </div>


