<?php 
	include_once 'link.php';
	include_once 'database.php';
	$link=new DB_con();

	$result=$link->get_users();
    while($row=mysqli_fetch_array($result)){
    ?>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl" style="font-family: 'Montserrat', sans-serif;">
                <h3 class="text-danger" style="font-family: 'Raleway', sans-serif;"><?php echo $row['name'] ?></h3>
                <small>posted by:<?php echo $row['email'] ?></small>
                <hr>
                <?php $id=$row['user_id']; ?>
                <?php echo "<a href='delete_user.php?user_id=$id' class='btn btn-danger'>Delete User</a>"; ?><br><br>
            </div>
            <div class="col-xl-2"></div>
            
            <hr>
        </div>
      
<?php } ?>