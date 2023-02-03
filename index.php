<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="font/flaticon.css" />
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>EPAWS</title>
  </head>
  <body class="container">
    <!--? ===================================== WRAP TopBar ===================================== -->
    <div class="wrap">
      <div class="wrap__container">
        <div class="wrap__left">
        <!--   <a href="tel:12345" class="wrap__left--link">
            <svg class="wrap__left--icon">
              <use xlink:href="img/sprite.svg#call"></use>
            </svg>
            <span> +00 1234 567</span>
          </a>
          <a href="mailto:contactpawanjs@gmail.com" class="wrap__left--link">
            <svg class="wrap__left--icon">
              <use xlink:href="img/sprite.svg#send"></use>
            </svg>
            <span> contactpawanjs@gamil.com</span>
          </a> -->
        </div>
        <div class="wrap__right">
          <a
            class="wrap__right--link"
            target="_blank"
          >
            <svg class="wrap__right--icon">
              <use xlink:href="img/sprite.svg#paw" ></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!--? ===================================== NAVBAR ===================================== -->
    <nav class="nav">
      <div class="nav__left">
        <a href="index.php" class="nav__left--link">
          <svg class="nav__left--icon"  style="color:black;">
            <use xlink:href="img/sprite.svg#paw" ></use>
          </svg>
          <span>EPAWS</span>
        </a>
      </div>
      <input type="checkbox" name="" id="navi-toggle" class="nav__checkbox" />
      <label for="navi-toggle" class="nav__button">
        <span class="nav__icon"></span> MENU
      </label>
      <div class="nav__right">
        <ul class="nav__right--list">
          <li class="nav__right--item">
            <a href="index.php" class="nav__right--link">HOME</a>
          </li>
          <li class="nav__right--item">
            <a href="index.php?view=<?php echo 'ABOUT'; ?>" class="nav__right--link">ABOUT</a>
          </li>
          <li class="nav__right--item">
            <a href="index.php?view=<?php echo 'SERVICES'; ?>" class="nav__right--link">
              Services
            </a>
          </li>
         
          <li class="nav__right--item">
            <a href="index.php?view=<?php echo 'CONTACTS'; ?>" class="nav__right--link">CONTACTS</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--? ===================================== HEADER ===================================== -->
    <?php if(empty($_GET['view'])){ ?>

      <?php include('pages/home.php'); ?>  

    <?php } else if(!empty($_GET['view'] == 'ABOUT')){ ?>  

    <?php include('pages/about.php'); ?> 

    <?php } else if(!empty($_GET['view'] == 'SERVICES')){ ?>  

    <?php include('pages/service.php'); ?>    

    <?php } else if(!empty($_GET['view'] == 'CONTACTS')){ ?>  

    <?php include('pages/contacts.php'); ?>     

    <?php }else{ ?>
        

    <?php } ?>  
  
  
    <footer class="footer">
      <div class="row">
       
        
      </div>
      <p class="footer__copyright--text">
        Copyright &copy;2022 All rights reserved | This template is from
        <a href="#" target="_blank">
          EPAWS
        </a>
      </p>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>
