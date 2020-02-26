<?php
    include_once 'link.php';
?>

<nav class="navbar navbar-expand-sm bg-success navbar-light" style="font-family: 'Montserrat', sans-serif;">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="index.php"><img class="logo" src="image/liberation_war_0.jpg" alt="Liberation war"></a>
        </li>
        <a class="navbar-brand" href="index.php">Liberation War71</a>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                War Stories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="march_june.php">March–June</a>
                <a class="dropdown-item" href="june_september.php">June–September</a>
                <a class="dropdown-item" href="october_december.php">October–December</a>
                
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Photo Gallery </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="submit_article_photos.php">Submit Article/Photos</a>
          </li>
        </ul>
        <?php 
            if($_SESSION["loginstatus"]=="true"){
              include_once 'common/nav_username.php';
              }
              else{
            
              include_once 'common/nav_.php';
            }
              
            
        ?>
        
    </nav>