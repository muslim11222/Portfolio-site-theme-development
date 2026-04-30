<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- nav section start  -->
<nav>
  <div class="container nav_container">

      <a href="<?php echo home_url(); ?>">
      <h4><?php bloginfo('name') ?></h4>
    </a>

    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary_menu',
        'menu_class'     => 'nav_menu',
        'container'      => false,
      ));
    ?>

    <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
    <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>

  </div>
</nav>
<!-- nav section End  -->

<!-- Single Post Section Start -->
<div class="single-post-wrapper">
    <h2 class="single-post-heading">
        <?php echo get_theme_mod('service_1'); ?>
    </h2>
    <div class="single-post-container">
        <div class="single-post-card">
           <?php the_post_thumbnail('medium', array('class' => 'single-post-image')); ?>
            <h3 class="single-post-title"><?php the_title(); ?></h3>
            <p class="single-post-content">
                <?php echo wp_trim_words(get_the_content(), 30, '.....'); ?>
            </p>
            <a class="single-post-btn" href="<?php the_permalink(); ?>">
                Learn More
            </a>
        </div>
    </div>
</div>
<!-- Single Post Section End -->






<!-- My footer Section Start Here  -->
    <footer>
      <div class="container footer_container">
        <div class="footer_1">
            <a href="index.html" class="footer_logo">
              <h4>MUSLIM</h4>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dolor sint ipsum.</p>
        </div>


        <div class="footer_2">
            
            <h4>Permalinks</h4>
            <ul class="Permalinks">
              <li><a href="index.html">Home</a></li>

              <li><a href="#about">About</a></li>

              <li><a href="#courses">Courses</a></li>

              <li><a href="#">Contact</a></li>
            </ul>
          </div>





          <div class="footer_3">
            
            <h4>Privacy</h4>
            <ul class="Privacy">
              <li><a href="#">Privacy & Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Refund Policy</a></li>

            </ul>
          </div>




          <div class="footer_4">
            
            <h4 id="contact">Contact Me</h4>
            <p>+880 01794-222084</p>
            <p class="mail">muslim9900khan@gmail.com</p>


          <ul class="footer_social">
            <li><a href="https://www.facebook.com/profile.php?id=100036457710676&mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a></li>
                
            <li><a href="https://www.facebook.com/bdcallingitltd?mibextid=ZbWKwL"><i class="fa-brands fa-instagram"></i></a></li>
  
            <li><a href="https://www.youtube.com/"><i class="fa-brands fa-square-whatsapp"></i></a></li>
  
            <li><a href="https://www.facebook.com/bdcallingitltd?mibextid=ZbWKwL"><i class="fa-brands fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="footer_copyright">
        <small>Copyright &copy; DEVELEPER MUSLIM</small>
      </div>
    </footer>


<!-- My footer Section end Here  -->

 <?php wp_footer(); ?>
</body>
</html>


