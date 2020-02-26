<?php if(!isset($_SESSION)) { 
    session_start(); 
    }
 ?> 
<?php

        include_once 'navbar.php';

?>
 <div class="container-fluid">
        <?php
            include_once 'database.php';
            $con = new DB_con();
            $result=$con->get_photos();
            $n=0;
            while($row=mysqli_fetch_array($result)){
        ?>     
        <?php 
        	if($n%3==0)
            {
            ?>
        <div class="row">
        <?php
        
            }?>
            <div class="col-sm-3 col-md-4 col-xs-6 ">
                    <h3 class="text-danger" style="font-family: 'Raleway', sans-serif;"><?php echo $row['captions'] ?></h3>
                    <small>posted by:<?php echo $row['name'] ?></small>
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" height="300" width="300"/>'; ?>  
            </div>
            <?php
                if($n%3==2)
                {
                ?>
                </div>

                <?php
                }
                $n=$n+1;
                }
              ?>

</div> 
<?php  
        include_once 'footer.php'; ?>

