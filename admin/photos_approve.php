<div class="container-fluid">
        <?php

            include_once 'database.php';
            include_once 'link.php';
            $con = new DB_con();
            $n=0;
            $result=$con->get_photos_to_appprove();
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
                    <?php echo "<a href='approve_p.php?photos_id=$row[0]' class='btn btn-danger'>Approve it</a>"; ?><br><br>
                    <?php echo "<a href='delete_photos.php?photos_id=$row[0]' class='btn btn-danger'>Delete it</a>"; ?><br><br>
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